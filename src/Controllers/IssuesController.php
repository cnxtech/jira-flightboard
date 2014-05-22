<?php

/**
 * @package IncidentDashboard\Controllers
 * @author toni <toni.lopez@shazam.com>
 */

namespace IncidentDashboard\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;
use Tests\Behat\Gherkin\Filter\LineRangeFilterTest;
use IncidentDashboard\Utils\DataFormatter;

/**
 * Controller to handle issues.
 *
 * @package IncidentDashboard\Controllers
 */

class IssuesController
{
    /**
     * @param Application $app
     * @return Response
     */
    public function getSevereIncidents(Application $app)
    {
        try {
            $rawIssues = $app['IncidentDashboard\Daos\Issues']->get(
                $app['config']['filters']['project'],
                $app['config']['filters']['priorities']
            );
        } catch (\Exception $e) {
            return $app->json(array('error' => 'Could not get issues from Jira.'));
        }

        $issues = array_combine(
            array_values($app['config']['filters']['priorities']),
            array_pad(array(), count($app['config']['filters']['priorities']), array())
        );
        $teams = array();
        foreach ($rawIssues['issues'] as $issue) {
            $priority = $issue['fields']['priority']['name'];

            $smell = DataFormatter::getSmellLevel(
                $issue['fields']['created'],
                $app['config']['smell_levels']
            );
            $newIssue = array(
                'key' => $issue['key'],
                'summary' => $issue['fields']['summary'],
                'since' => DataFormatter::getAge($issue['fields']['created']),
                'smell' => $smell,
                'linked' => array(),
                'assignee' => $issue['fields']['assignee']['displayName']
            );

            foreach ($issue['fields']['issuelinks'] as $linkedIssue) {
                if (!isset($linkedIssue['inwardIssue'])) {
                    continue;
                }
                $status = $linkedIssue['inwardIssue']['fields']['status']['name'];
                if (!in_array($status, array('Resolved'))) {
                    $jiraKey = explode('-', $linkedIssue['inwardIssue']['key']);
                    $newIssue['linked'][$jiraKey[0]] = true;

                    if (!isset($teams[$jiraKey[0]])) {
                        $teams[$jiraKey[0]] = array('smell' => 0, 'count' => 0);
                    }
                    $teams[$jiraKey[0]]['count']++;
                    $teams[$jiraKey[0]]['smell'] = $teams[$jiraKey[0]]['smell'] < $smell
                        ? $smell
                        : $teams[$jiraKey[0]]['smell'];
                }
            }
            $newIssue['linked'] = implode(', ', array_keys($newIssue['linked']));

            $issues[$priority][] = $newIssue;
        }

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
        return $app['twig']->render(
            'issues.twig',
            array('issues' => $issues, 'teams' => $orderedTeams)
        );
    }
} 
