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
            $issues[1][$priority] = array(
                'priority' => $priority,
                'generalSmell' => 0,
                'issueList' => array()
            );
            $issues[2][$priority] = array(
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
                    if (!isset($linkedIssues[$teamName])) {
                        $linkedIssues[$teamName] = 0;
                    }
                    $linkedIssues[$teamName]++;
                }
            }
            $status = $issue['fields']['status']['name'];
            switch ($status) {
                case 'Open':
                    $status = 'Active';
                    $group = 1;
                    $statusOrder = 1;
                    break;
                case 'Fixed':
                    $status = 'All clear';
                    $group = 2;
                    $statusOrder = 1;
                    break;
                case 'Closed':
                    $status = 'Resolved';
                    $group = 2;
                    $statusOrder = 2;
                    break;
                default:
                    $group = 1;
                    $statusOrder = 2;
            }

            $linkedIssuesFormatted = array();
            foreach ($linkedIssues as $linkedIssue => $count) {
                $linkedIssuesFormatted[] = sprintf('%s (%d)', $linkedIssue, $count);
            }

            $issues[$group][$priority][$statusOrder]['issueList'][] = array(
                'key' => $issue['key'],
                'summary' => $issue['fields']['summary'],
                'since' => DateFormatter::getAge($issue['fields']['created']),
                'smell' => $smell,
                'linked' => implode(', ', $linkedIssuesFormatted),
                'assignee' => $issue['fields']['assignee']['displayName'],
                'status' => $status,
                'priority' => $priority
            );
        }

        // just clean up the priorities without any isues
        $formattedIssues = array();
        foreach ($issues as $group => $groupedIssues) {
            foreach ($groupedIssues as $priority => $priorityIssues) {
                foreach (array_keys($priorityIssues) as $statusOrder)
                if (!empty($issues[$group][$priority][$statusOrder]['issueList'])) {
                    if (!isset($formattedIssues[$group])) {
                        $formattedIssues[$group] = array();
                    }
                    $formattedIssues[$group][] = $issues[$group][$priority][$statusOrder];
                }
            }
        }

        return json_encode(array('issues' => $formattedIssues));
    }
}
