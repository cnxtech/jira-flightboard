<?php

/**
 * @package JiraDashboard\Controllers
 * @author toni <toni.lopez@shazam.com>
 */

namespace JiraDashboard\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Tests\Behat\Gherkin\Filter\LineRangeFilterTest;
use JiraDashboard\Utils\DateFormatter;
use JiraDashboard\Daos\IssuesRestApiDao;

/**
 * @package JiraDashboard\Controllers
 */

class EpicsController
{
    private $dao;
    private $config;

    public function __construct(Application $app)
    {
        $this->config = $app['config'];

        $this->dao = new IssuesRestApiDao(
            $this->config['jira_api']['endpoint'],
            $this->config['jira_api']['token']
        );
    }

    public function get()
    {
        // get issues from jira
        $status = $this->config['epics']['status'];
        $status[] = date('F', strtotime('+1 month'));; // adds the month as another status
        try {
            $rawIssues = $this->dao->getByStatus(
                $this->config['epics']['project'],
                $status
            );
        } catch (\Exception $e) {
            return $app->json(array('error' => 'Could not get issues from Jira.'));
        }

        // set up initial issues array ready to be ordered
        $groupedIssues = array(
            'shipped' => array(),
            'cancelled' => array(),
            'delayed' => array(),
            'progress' => array(),
            'waiting' => array()
        );
        foreach (array_keys($this->config['teams']) as $team) {
            foreach (array_keys($groupedIssues) as $issueGroup) {
                $groupedIssues[$issueGroup][$team] = array();
            }
        }
        //var_dump($groupedIssues);

        // iterate issues to construct ordered array
        foreach ($rawIssues['issues'] as $issue) {
            // get basic info from issue array
            $component = $issue['fields']['components'][0]['name'];
            $keyParts = explode('-', $issue['key']);
            $issueKey = $keyParts[1];
            $status = $issue['fields']['status']['name'];
            $rank = (int) $issue['fields']['customfield_10250'];
            $team = $this->config['teams'][$component]['key'];
            $icon = $this->config['teams'][$component]['id'] . '.png';
            $sched = in_array($status, array('In Progress', 'Closed')) ? date('F') : $status;

            $skip = false;
            // logic for each issue group
            switch($status) {
                case "In Progress":
                    $statusToShow = "In flight";
                    $statusId = 'progress';
                    $closed = false;
                    $changeLog = $this->getChangeLog($issue['id'], $status);
                    foreach ($changeLog as $action) {
                        if ($action['items'][0]['toString'] === 'Closed') {
                            $closed = true;
                            $statusToShow = 'Delayed';
                            $statusId = 'delayed';
                        }
                        if ($action['items'][0]['toString'] === 'In Progress') {
                            $since = DateFormatter::getAge($action['created']);
                            $order = strtotime($action['created']);
                        }
                    }
                    $statusToShow .= ' - ' . $since;
                    break;
                case "Open":
                    $statusToShow = "Delayed";
                    $statusId = 'delayed';
                    $skip = true;
                    $changeLog = $this->getChangeLog($issue['id'], $status);
                    foreach ($changeLog as $action) {
                        if ($action['items'][0]['toString'] === 'Closed') {
                            $skip = false;
                        }
                    }
                    break;
                case "Closed":
                    if (!($issue['fields']['resolution']['name'] == 'Done'
                        || $issue['fields']['resolution']['name'] == 'Complete'
                        || $issue['fields']['resolution']['name'] == 'Fixed')) {
                        $statusToShow = 'Cancelled';
                        $statusId = 'cancelled';
                    } else {
                        $statusToShow = 'Shipped';
                        $statusId = 'shipped';
                    }
                    $changeLog = $this->getChangeLog($issue['id'], $status);
                    foreach ($changeLog as $action) {
                        if ($action['items'][0]['toString'] === 'Closed') {
                            $since = DateFormatter::getAge($action['created']);
                            preg_match('/([0-9]+)d/', $since, $matches);
                            if (isset($matches[1]) &&  $matches[1] > 7) {
                                $skip = true;
                                break;
                            }
                        }
                    }
                    $order = 0;
                    break;
                default:
                    $statusId = 'waiting';
                    $order = 0;
                    $statusToShow = '';
                    break;
            }

            if ($skip) {
                continue;
            }

            // add issue in the correct position
            $groupedIssues[$statusId][$component][$rank] = array(
                'key' => $team . '-' . $keyParts[1],
                'summary' => $issue['fields']['summary'],
                'sched' => $sched,
                'status' => $statusId,
                'statusMessage' => $statusToShow,
                'icon' => $icon
            );
        }

        // order issues
        $issues = array();
        foreach (array_keys($groupedIssues) as $group) {
            //var_dump('ordering group ' . $group);
            while(!empty($groupedIssues[$group])) {
                foreach (array_keys($groupedIssues[$group]) as $team) {
                    //var_dump('checking team ' . $team);
                    if (empty($groupedIssues[$group][$team])) {
                        unset($groupedIssues[$group][$team]);
                    } else {
                        //var_dump('adding an issue');
                        $issues[] = array_shift($groupedIssues[$group][$team]);
                    }
                }
            }
        }

        return json_encode(array('issues' => $issues));
    }

    private function getChangeLog($issueId, $status)
    {
        $statusFromCache = apc_fetch($issueId);

        if ($statusFromCache === $status) {
            $changeLog = apc_fetch('changes-' . $issueId);
        } else {
            $changeLog = $this->dao->getChangeLog($issueId);
            apc_store($issueId, $status);
            apc_store('changes-' . $issueId, $changeLog);
        }

        return $changeLog;
    }

}
