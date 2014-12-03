<?php

/**
 * Copyright 2014 Shazam Entertainment Limited
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this 
 * file except in compliance with the License.
 *
 * You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under 
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the specific 
 * language governing permissions and limitations under the License.
 *
 * @package JiraDashboard\Controllers
 * @author toni <toni.lopez@shazam.com>
 */

namespace JiraDashboard\Controllers;

use Exception;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use JiraDashboard\Utils\DateFormatter;

class EpicsController
{
    private $dao;
    private $config;
    private $orderedIssuesMap;
    private $states = array();
    private $summaries;

    /**
     * @param Request $request
     * @param Application $app
     * @return string
     */
    public function get(Request $request, Application $app)
    {
        $this->initialise($app);

        $start = $request->get('start', 1);
        $end = $request->get('end');

        try {
            $rawIssues = $this->getRawIssuesFromJira();
        } catch (Exception $e) {
            //ERROR, What is this $app, I have no idea...
            return $app->json(array('error' => 'Could not get issues from Jira.'));
        }

        $this->prepareOrderedMap();

        foreach ($rawIssues['issues'] as $rawIssue) {
            $issue = $this->extractIssueFromRawIssue($rawIssue);
            if ($issue !== null) $this->addIssueToOrderedMap($issue);
        }

        $issueList = $this->getListFromMap();

        $summaries = array();
        $issueListGrouped = array();
        foreach ($issueList as $key => $issue) {
            $jiraSummary = trim($issue['summary']);
            if (!isset($summaries[$jiraSummary])) {
                $issueListGrouped[] = $issue;
                $summaries[$jiraSummary] = count($issueListGrouped) - 1;
            } else {
                $newIndex = $summaries[$jiraSummary];
                $head = array_slice($issueListGrouped, 0, $newIndex + 1);
                $head[] = $issue;
                for ($i = $newIndex + 1; $i < count($issueListGrouped); $i++) {
                    $head[] = $issueListGrouped[$i];
                }
                $issueListGrouped = $head;
                foreach ($summaries as $summary => $index) {
                    if ($newIndex <= $index) $summaries[$summary]++;
                }
            }
        }

        $issueListSlice = $end === null
            ? array_slice($issueListGrouped, $start - 1)
            : array_slice($issueListGrouped, $start - 1, $end - $start + 1);

        return $app['twig']->render('epics.twig', array('issues' => $issueListSlice));
    }

    private function initialise(Application $app)
    {
        $this->config = $app['config']->fetch();
        $this->dao = $app['dao'];

        $fields = $this->config['epics']['fields'];

        foreach ($fields as $field => $properties) {
            if ($field === 'delayed') continue;

            $this->states = $this->setFieldProperties($field, $properties);
        }
    }

    /**
     * @return array
     */
    private function getRawIssuesFromJira()
    {
        $status = $this->config['epics']['status'];
        $status[] = date('F');
        $status[] = date('F', strtotime('+1 month'));

        return $this->dao->getByStatus($this->config['epics']['project'], $status);
    }

    private function prepareOrderedMap()
    {
        $this->orderedIssuesMap = array();

        $teams = array();
        foreach (array_keys($this->config['teams']) as $team) {
            $teams[$team] = array();
        }

        foreach ($this->config['epics']['fields'] as $field => $properties) {
            if ($properties['sorting'] == 'time') {
                $this->orderedIssuesMap[$field] = array();;
            } else if ($properties['sorting'] == 'team-group') {
                $this->orderedIssuesMap[$field] = $teams;
            }
        }
    }

    /**
     * @param array $rawIssue
     * @return array
     */
    private function extractIssueFromRawIssue(array $rawIssue)
    {
        // get basic info
        $component = $rawIssue['fields']['components'][0]['name'];
        $version = array_pop($rawIssue['fields']['versions']);
        $status = $rawIssue['fields']['status']['name'];
        $resolution = $rawIssue['fields']['resolution']['name'];

        $issue = array(
            'key' => $this->config['teams'][$component]['key'] . '-' . array_pop(explode('-', $rawIssue['key'])),
            'scheduled' => array_shift(explode(' ', $version['name'])),
            'summary' => $rawIssue['fields']['summary'],
            'project' => $this->config['teams'][$component]['key'],
            'icon' => $this->config['teams'][$component]['id'],
            'blocking' => array(),
            'rank' => (int) $rawIssue['fields']['customfield_10250'],
            'month' => date('m', strtotime($status)),
            'component' => $rawIssue['fields']['components'][0]['name']
        );

        // get status
        $stateKey = isset($this->states[$status]) ? $status : 'default';
        $issue['status'] = isset($this->states[$stateKey][$resolution])
            ? $this->states[$stateKey][$resolution]
            : $this->states[$stateKey][0];

        // check if delayed
        $isDelayed = function($changelog, $status) {
            foreach ($changelog as $actions) {
                if (!is_array($actions)) continue;
                foreach ($actions as $action)
                    if ($action['items'][0]['toString'] == 'In Progress') return true;
            }
        };
        if ($status == 'Open' && $isDelayed($rawIssue['changelog'], $status)) {
            $issue['status'] = 'delayed';
        } else if ($status == 'Open') {
            //return null;
            $issue['status'] = 'unscheduled';
            $issue['scheduled'] = 'N/A';
        }

        $config = $this->config['epics']['fields'][$issue['status']];
        $issue['statusLabel'] = $config['label'];

        // get since
        if ($config['display']['since'] || isset($config['limit'])) {
            foreach ($rawIssue['changelog'] as $actions) {
                if (!is_array($actions)) continue;
                foreach ($actions as $action) {
                    if ($action['items'][0]['toString'] == $status) {
                        $issue['since'] = $action['created'];
                        break;
                    }
                }
            }

            if (isset($config['limit']) && strtotime($config['limit']) > strtotime($issue['since'])) {
                return null;
            }

            if ($config['display']['since'])  $issue['time'] = DateFormatter::getAge($issue['since']);
        } else {
            $issue['since'] = $rawIssue['fields']['created'];
        }

        // get styles
        $issueStyles = function ($issue, $config) {
            $styles = array();

            if (isset($config['time'])) {
                $timeColor = function($since, $config) {
                    foreach ($config as $time => $color)
                        if (strtotime($time) && strtotime($time) > strtotime($since))
                            return $color;
                    return $config['normal'];
                };

                $styles['status'] = $config['states_color'] === 'time'
                    ? $timeColor($issue['since'], $config['time'])
                    : $config['states_caolor'];

                if (isset($config['time_color'])) {
                    $styles['time'] = $config['time_color'] === 'time'
                        ? $timeColor($issue['since'], $config['time'])
                        : $config['states_color'];
                }
            } else {
                $styles['status'] = $config['states_color'];
            }

            return $styles;
        };
        $issue['styles'] = $issueStyles($issue, $config['display']);

        return $issue;
    }

    /**
     * param array $issue
     */
    private function addIssueToOrderedMap(array $issue)
    {
        $sorting = $this->config['epics']['fields'][$issue['status']]['sorting'];

        if ($sorting === 'time') {
            $time = strtotime($issue['since']);
            if (!isset($this->orderedIssuesMap[$issue['status']][$time]))
                $this->orderedIssuesMap[$issue['status']][$time] = array();

            $this->orderedIssuesMap[$issue['status']][$time][] = $issue;
        } else if ($sorting === 'team-group') {
            if (!isset($this->orderedIssuesMap[$issue['status']][$issue['component']][$issue['month']])) {
                $this->orderedIssuesMap[$issue['status']][$issue['component']][$issue['month']] = array();
                ksort($this->orderedIssuesMap[$issue['status']][$issue['component']]);
            }
            if (!isset($this->orderedIssuesMap[$issue['status']][$issue['component']][$issue['month']][$issue['rank']]))
                $this->orderedIssuesMap[$issue['status']][$issue['component']][$issue['month']][$issue['rank']] = array();

            $this->orderedIssuesMap[$issue['status']][$issue['component']][$issue['month']][$issue['rank']][] = $issue;
        }
    }

    /**
     * @return array
     */
    private function getListFromMap()
    {
        if (empty($this->orderedIssuesMap)) {
            return array();
        }

        $issues = array();

        foreach ($this->orderedIssuesMap as $type => $byStateIssues) {
            if ($this->config['epics']['fields'][$type]['sorting'] == 'time') {
                ksort($byStateIssues);
                foreach ($byStateIssues as $key => $group)
                    if ($this->config['epics']['fields'][$type]['sorting'] == 'time')
                        foreach ($group as $issue)
                            $issues[] = $issue;
            } else {
                while (!empty($this->orderedIssuesMap[$type])) {
                    foreach (array_keys($this->orderedIssuesMap[$type]) as $team) {
                        foreach (array_keys($this->orderedIssuesMap[$type][$team]) as $month) {
                            ksort($this->orderedIssuesMap[$type][$team][$month]);
                            foreach (array_keys($this->orderedIssuesMap[$type][$team][$month]) as $rank) {
                                $issues[] = array_shift($this->orderedIssuesMap[$type][$team][$month][$rank]);

                                if (empty($this->orderedIssuesMap[$type][$team][$month][$rank])) 
                                    unset($this->orderedIssuesMap[$type][$team][$month][$rank]);
                                break;
                            }
                            if (empty($this->orderedIssuesMap[$type][$team][$month])) 
                                unset($this->orderedIssuesMap[$type][$team][$month]);
                            break;
                        }
                        if (empty($this->orderedIssuesMap[$type][$team])) 
                            unset($this->orderedIssuesMap[$type][$team]);
                    }
                    if (count($issues)) {
                        $issues[count($issues) - 1]['separation'] = true;
                    }
                }
            }
        }

        return $issues;
    }

    /**
     * @param $resolutions
     * @param $field
     * @param $state
     * @return array
     */
    private function setResolutions($resolutions, $field, $state)
    {
        $resolutionsArray = is_array($resolutions) ? $resolutions : array($resolutions);

        foreach ($resolutionsArray as $resolution) {
            $this->states[$state][$resolution] = $field;
        }

        return $this->states[$state]; //This can be refactored into a local variable
    }

    /**
     * @param $field
     * @param $properties
     * @return array
     */
    private function setFieldProperties($field, $properties)
    {
        $states = isset($properties['states']) ? $properties['states'] : 'default';

        $statesArray = is_array($states) ? $states : array($states);

        foreach ($statesArray as $state) {
            //Since this is not static, will it ever be set here?
            if (!isset($this->states[$state])) {
                $this->states[$state] = array();
            }

            if (isset($properties['resolution'])) {
                $this->states[$state] = $this->setResolutions($properties['resolution'], $field, $state);
            } else {
                $this->states[$state][] = $field;
            }
        }

        return $this->states; //This can be refactored into a local variable
    }
}
