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
            $teams = array();
            foreach ($issue['fields']['issuelinks'] as $linkedIssue) {
                if (!isset($linkedIssue['inwardIssue'])) {
                    continue;
                }
                $jiraKey = explode('-', $linkedIssue['inwardIssue']['key']);
                if (!isset($teams[$jiraKey[0]])) {
                    $teams[$jiraKey[0]] = 0;
                }
                $teams[$jiraKey[0]]++;
            }
            arsort($teams);
            reset($teams);
            $firstTeam = key($teams);

            $keyParts = explode('-', $issue['key']);

            $team = empty($firstTeam) ? $keyParts[0] : $firstTeam;
            $status = $issue['fields']['status']['name'];
            $sched = in_array($status, array('In Progress', 'Closed')) ? date('F') : $status;

            switch($status) {
                case "In Progress":
                    $since = DateFormatter::getAge($issue['fields']['created']);
                    $statusToShow = "In flight - $since";
                    break;
                case "Closed":
                    $statusToShow = 'Landed';
                    break;
                default:
                    $statusToShow = '';
                    break;
            }

            $issues[] = array(
                'key' => $team . '-' . $keyParts[1],
                'summary' => $issue['fields']['summary'],
                'sched' => $sched,
                'status' => $statusToShow
            );
        }

        return json_encode(array('issues' => $issues));
    }
}
