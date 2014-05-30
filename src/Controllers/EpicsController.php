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
            switch($status) {
                case "In Progress":
                    $statusToShow = "In flight";

                    $changeLog = $dao->getChangeLog($issue['id']);
                    foreach ($changeLog as $action) {
                        if ($action['items'][0]['toString'] === 'In Progress') {
                            $since = DateFormatter::getAge($action['created']);
                            $order = strtotime($action['created']);
                            $statusToShow .= ' - ' . $since;
                            break;
                        }
                    }
                    break;
                case "Closed":
                    if (!($issue['fields']['resolution']['name'] == 'Done'
                        || $issue['fields']['resolution']['name'] == 'Complete'
                        || $issue['fields']['resolution']['name'] == 'Fixed')) {
                        $statusToShow = 'Cancelled';
                    } else {
                        $statusToShow = 'Landed';
                    }
                    $changeLog = $dao->getChangeLog($issue['id']);
                    foreach ($changeLog as $action) {
                        if ($action['items'][0]['toString'] === 'Closed') {
                            $since = DateFormatter::getAge($action['created']);
                            preg_match('/([0-9]+)d/', $since, $matches);
                            if ($matches[1] > 7) {
                                $skip = true;
                                break;
                            }
                        }
                    }
                    $order = time();
                    break;
                default:
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
                'status' => $statusToShow,
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
