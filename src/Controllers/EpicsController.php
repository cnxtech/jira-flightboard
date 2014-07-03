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
        $status[] = date('F', strtotime('+1 month')); // adds the month as another status
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
            'release' => array(),
            'progress' => array(),
            'delayed' => array(),
            'cancelled' => array(),
            'waiting' => array()
        );
        foreach (array_keys($this->config['teams']) as $team) {
            foreach (array_keys($groupedIssues) as $issueGroup) {
                $groupedIssues[$issueGroup][$team] = array();
            }
        }

        // iterate issues to construct ordered array
        foreach ($rawIssues['issues'] as $issue) {
            // get basic info from issue array
            $summary = $issue['fields']['summary'];
            $component = $issue['fields']['components'][0]['name'];
            $keyParts = explode('-', $issue['key']);
            $issueKey = $keyParts[1];
            $status = $issue['fields']['status']['name'];
            $rank = (int) $issue['fields']['customfield_10250'];
            $team = $this->config['teams'][$component]['key'];
            $icon = $this->config['teams'][$component]['id'] . '.png';
            $version = array_pop($issue['fields']['versions']);
            $sched = empty($version) ? '' : array_shift(explode(' ', $version['name']));

            $skip = false;
            // logic for each issue group
            switch($status) {
                case "In Progress":
                    $statusToShow = "In flight";
                    $group = 'progress';
                    $statusId = 'progress';
                    $closed = false;
                    $changeLog = $this->getChangeLog($issue['id'], $status);
                    foreach ($changeLog as $action) {
                        if ($action['items'][0]['toString'] === 'In Progress') {
                            $since = DateFormatter::getAge($action['created']);
                            $order = strtotime($action['created']);
                            break;
                        }
                    }
                    if (preg_match('/^([0-9]+)d/', $since, $matches)) {
                        if ($matches[1] >= 45) {
                            $statusId = 'progress-red';
                        } elseif ($matches[1] >= 30) {
                            $statusId = 'progress-yellow';
                        }
                    }
                    break;
                case "Open":
                    $statusToShow = "Delayed";
                    $group = 'delayed';
                    $statusId = $group;
                    $skip = true;
                    $changeLog = $this->getChangeLog($issue['id'], $status);
                    foreach ($changeLog as $action) {
                        if ($action['items'][0]['toString'] === 'In Progress') {
                            $skip = false;
                        }
                    }
                    break;
                case "Resolved":
                    $statusToShow = 'Awaiting Release';
                    $group = 'release';
                    $statusId = $group;
                    $changeLog = $this->getChangeLog($issue['id'], $status);
                    foreach ($changeLog as $action) {
                        if ($action['items'][0]['toString'] === 'Resolved') {
                            $since = DateFormatter::getAge($action['created']);
                            $order = strtotime($action['created']);
                            break;
                        }
                    }
                    break;
                case "Closed":
                    if (!($issue['fields']['resolution']['name'] == 'Done'
                        || $issue['fields']['resolution']['name'] == 'Completed'
                        || $issue['fields']['resolution']['name'] == 'Fixed')) {
                        $statusToShow = 'Cancelled';
                        $group = 'cancelled';
                        $statusId = $group;
                    } else {
                        $statusToShow = 'Shipped';
                        $group = 'shipped';
                        $statusId = $group;
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
                        if ($action['items'][0]['toString'] === 'In Progress' && $group === 'cancelled') {
                            $group = 'cancelled';
                        }
                    }
                    $order = 0;
                    break;
                default:
                    $group = 'waiting';
                    $statusId = $group;
                    $order = 0;
                    $statusToShow = '';
                    break;
            }

            if ($skip) {
                continue;
            }

            // add issue in the correct position
            $ticket = array(
                'key' => $team . '-' . $keyParts[1],
                'summary' => $summary,
                'sched' => $sched,
                'status' => $statusId,
                'statusMessage' => $statusToShow,
                'icon' => $icon
            );

            if ($status === 'In Progress' || $status === 'Resolved') {
                if ($status === 'Resolved') {
                    $component = 0;
                }
                if ($statusId !== 'delayed') {
                    $ticket['since'] = $since;
                }

                if (!isset($groupedIssues[$group][$summary])) {
                    $groupedIssues[$group][$summary] = array();
                }
                if (!isset($groupedIssues[$group][$summary][$order])) {
                    $groupedIssues[$group][$summary][$order] = array();
                }
                $groupedIssues[$group][$summary][$order][] = $ticket;
            } else {
                $groupedIssues[$group][$component][$rank] = $ticket;
            }
        }

        // order issues
        $issues = array();
        foreach (array_keys($groupedIssues) as $group) {
            if ($group === 'progress' || $group == 'release') {
                $issuesByTime = array();
                foreach (array_keys($groupedIssues[$group]) as $title) {
                    ksort($groupedIssues[$group][$title]);
                    reset($groupedIssues[$group][$title]);
                    $oldestTime = key($groupedIssues[$group][$title]);
                    if (!isset($issuesByTime[$oldestTime])) {
                        $issuesByTime[$oldestTime] = array();
                    }
                    foreach ($groupedIssues[$group][$title] as $time => $issuesGroupedByTitle) {
                        ksort($issuesGroupedByTitle);
                        $issuesByTime[$oldestTime] = array_merge($issuesByTime[$oldestTime], $issuesGroupedByTitle);
                    }
                    ksort($issuesByTime);
                }

                foreach ($issuesByTime as $issuesInTimestamp) {
                    $issues = array_merge($issues, $issuesInTimestamp);
                }
            } else {
                while(!empty($groupedIssues[$group])) {
                    foreach (array_keys($groupedIssues[$group]) as $team) {
                        if (empty($groupedIssues[$group][$team])) {
                            unset($groupedIssues[$group][$team]);
                        } else {
                            $issues[] = array_shift($groupedIssues[$group][$team]);
                        }
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
