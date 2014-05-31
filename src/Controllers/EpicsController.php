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
    /**
     * @param Application $app
     * @return Response
     */
    public function get(Application $app)
    {
        $dao = new IssuesRestApiDao(
            $app['config']['jira_api']['endpoint'],
            $app['config']['jira_api']['token']
        );

        $status = $app['config']['epics']['status'];
        $status[] = date('F', strtotime('+1 month'));; // adds the month as another status

        try {
            $rawIssues = $dao->getByStatus(
                $app['config']['epics']['project'],
                $status
            );
        } catch (\Exception $e) {
            return $app->json(array('error' => 'Could not get issues from Jira.'));
        }

        $issues = array();

        foreach ($rawIssues['issues'] as $issue) {
            $component = $issue['fields']['components'][0]['name'];
            $keyParts = explode('-', $issue['key']);
            $team = $app['config']['teams'][$component]['key'];

            $status = $issue['fields']['status']['name'];
            $sched = in_array($status, array('In Progress', 'Closed')) ? date('F') : $status;
            $icon = $app['config']['teams'][$component]['id'] . '.png';

            $skip = false;
            $statusFromCache = apc_fetch($issue['id']);
            if ($statusFromCache === $status) {
                $changeLog = apc_fetch('changes-' . $issue['id']);
            } else {
                apc_store($issue['id'], $status);
                $changeLog = array();
            }
            switch($status) {
                case "In Progress":
                    $statusToShow = "In flight";
                    $statusId = 'progress';

                    if (empty($changeLog)) {
                        $changeLog = $dao->getChangeLog($issue['id']);
                        apc_store('changes-' . $issue['id'], $changeLog);
                    }
                    $closed = false;
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
                    $statusToShow = "Delated";
                    $statusId = 'delayed';

                    if (empty($changeLog)) {
                        $changeLog = $dao->getChangeLog($issue['id']);
                        apc_store('changes-' . $issue['id'], $changeLog);
                    }
                    $skip = true;
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
                    if (empty($changeLog)) {
                        $changeLog = $dao->getChangeLog($issue['id']);
                        apc_store('changes-' . $issue['id'], $changeLog);
                    }
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

            if (!isset($issues[$sched])) {
                $issues[$sched] = array();
            }
            if (!isset($issues[$sched][$order])) {
                $issues[$sched][$order] = array();
            }

            $issues[strtotime($sched)][$order][] = array(
                'key' => $team . '-' . $keyParts[1],
                'summary' => $issue['fields']['summary'],
                'sched' => $sched,
                'status' => $statusId,
                'statusMessage' => $statusToShow,
                'icon' => $icon
            );
        }
        ksort($issues);

        $formattedIssues = array();
        foreach ($issues as $issuesMonth) {
            ksort($issuesMonth);
            foreach ($issuesMonth as $issueList) {
                $formattedIssues = array_merge($formattedIssues, $issueList);
            }
        }

        return json_encode(array('issues' => $formattedIssues));
    }
}
