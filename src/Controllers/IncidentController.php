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

class IncidentController
{
    /**
     * @param Application $app
     * @return Response
     */
    public function get(Application $app)
    {
        $priorities = $app['config']['incidents']['priorities'];

        $dao = new IssuesRestApiDao(
            $app['config']['jira_api']['endpoint'],
            $app['config']['jira_api']['token']
        );

        try {
            $rawIssues = $dao->getByPriority(
                $app['config']['incidents']['project'],
                $priorities
            );
        } catch (\Exception $e) {
            return $app->json(array('error' => 'Could not get issues from Jira.'));
        }

        $issues = array();
        $teams = array();
        foreach ($priorities as $priority) {
            $issues[$priority] = array(
                'priority' => $priority,
                'generalSmell' => 0,
                'issueList' => array()
            );
        }

        foreach ($rawIssues['issues'] as $issue) {
            $priority = $issue['fields']['priority']['name'];

            $smell = DateFormatter::getSmellLevel(
                $issue['fields']['created'],
                $app['config']['smell_levels']
            );

            $linkedIssues = array();
            foreach ($issue['fields']['issuelinks'] as $linkedIssue) {
                if (!isset($linkedIssue['inwardIssue'])) {
                    continue;
                }
                $status = $linkedIssue['inwardIssue']['fields']['status']['name'];
                if (!in_array($status, array('Resolved'))) {
                    $jiraKey = explode('-', $linkedIssue['inwardIssue']['key']);
                    $teamName = $jiraKey[0];
                    $linkedIssues[$teamName] = true;

                    if (!isset($teams[$teamName])) {
                        $teams[$teamName] = array('smell' => 0, 'count' => 0, 'name' => $teamName);
                    }
                    $teams[$teamName]['count']++;
                    $teams[$teamName]['smell'] = $teams[$teamName]['smell'] < $smell
                        ? $smell
                        : $teams[$teamName]['smell'];
                }
            }

            $issues[$priority]['issueList'][] = array(
                'key' => $issue['key'],
                'summary' => $issue['fields']['summary'],
                'since' => DateFormatter::getAge($issue['fields']['created']),
                'smell' => $smell,
                'linked' => implode(', ', array_keys($linkedIssues)),
                'assignee' => $issue['fields']['assignee']['displayName']
            );

            if ($smell > $issues[$priority]['generalSmell']) {
                $issues[$priority]['generalSmell'] = $smell;
            }
        }

        // just clean up the priorities without any isues
        $formattedIssues = array();
        foreach (array_keys($issues) as $priority) {
            if (!empty($issues[$priority]['issueList'])) {
                $formattedIssues[] = $issues[$priority];
            }
        }

        return json_encode(
            array(
                'issues' => $formattedIssues,
                'teams' => $this->getOrderedTeams($teams)
            )
        );
    }

    private function getOrderedTeams($teams)
    {
        $orderedTeams = array();

        foreach ($teams as $team => $info) {
            if (!isset($orderedTeams[$info['smell']])) {
                $orderedTeams[$info['smell']] = array();
            }
            if (!isset($orderedTeams[$info['smell']][$info['count']])) {
                $orderedTeams[$info['smell']][$info['count']] = array();
            }
            $orderedTeams[$info['smell']][$info['count']][] = $team;
        }

        krsort($orderedTeams);
        foreach (array_keys($orderedTeams) as $key) {
            krsort($orderedTeams[$key]);
        }

        $teams = array();
        foreach ($orderedTeams as $smells) {
            foreach ($smells as $counts) {
                foreach ($counts as $team) {
                    $teams[] = $team;
                }
            }
        }

        return $teams;
    }
}
