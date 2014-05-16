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

            $newIssue = array(
                'summary' => $issue['fields']['summary'],
                'since' => DataFormatter::getAge($issue['fields']['created']),
                'smell' => DataFormatter::getSmellLevel(
                        $issue['fields']['created'],
                        $app['config']['smell_levels']
                    ),
                'linked' => array(),
                'assignee' => $issue['fields']['assignee']['displayName'],
                'linked' => array('IMT' => true, 'IOS' => true)
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
                        $teams[$jiraKey[0]] = 0;
                    }
                    $teams[$jiraKey[0]]++;
                }
            }
            $newIssue['linked'] = implode(', ', array_keys($newIssue['linked']));

            $issues[$priority][] = $newIssue;
        }
        //@todo: remove hack
        $issues['Critical'] = array_slice($issues['Major'], 40, 5);
        $issues['Blocker'] = array_slice($issues['Major'], 45, 3);
        $a = $issues['Major'];
        unset($issues['Major']);
        $issues['Major'] = array_slice($a, 12, 10);
        $teams = array('SE' => 12, 'IMT' => 13, 'IOS' => 2);
        //@end-todo

        return $app['twig']->render(
            'issues.twig',
            array('issues' => $issues, 'teams' => $teams)
        );
    }
} 
