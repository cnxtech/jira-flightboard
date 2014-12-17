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
 * @package JiraFlightboard\Domain
 * @author toni <toni.lopez@shazam.com>
 */

namespace JiraFlightboard\Domain;

use JiraFlightboard\Utils\DateFormatter;

class Ticket
{
    public $key;
    public $scheduled;
    public $summary;
    public $project;
    public $icon;
    public $blocking = array();
    public $rank;
    public $month;
    public $component;
    public $status;
    public $changelog;
    public $statusLabel;
    public $styles = array();
    public $since;
    public $jiraStatus;
    public $created;
    public $separation = false;

    /**
     * @param array $ticketFromJira
     */
    public function __construct(array $ticketFromJira, array $teams, array $states)
    {
        $fields = $ticketFromJira['fields'];

        $component = $fields['components'][0]['name'];
        $version = array_pop($fields['versions']);
        $resolution = $fields['resolution']['name'];

        $this->jiraStatus = $fields['status']['name'];
        $this->key = $teams[$component]['key'] . '-' . array_pop(explode('-', $ticketFromJira['key']));
        $this->scheduled = array_shift(explode(' ', $version['name']));
        $this->summary = $fields['summary'];
        $this->project = $teams[$component]['key'];
        $this->icon = $teams[$component]['id'];
        $this->rank = (int) $fields['customfield_10250'];
        $this->month = date('m', strtotime($this->jiraStatus));
        $this->component = $fields['components'][0]['name'];
        $this->changelog = $ticketFromJira['changelog'];
        $this->created = $fields['created'];
        $this->since = $this->created;

        // get status
        $stateKey = isset($states[$this->jiraStatus]) ? $this->jiraStatus : 'default';
        $this->status = isset($states[$stateKey][$resolution])
            ? $states[$stateKey][$resolution]
            : $states[$stateKey][0];

        // check if delayed
        if ($this->isDelayed()) {
            $this->status = 'delayed';
        } else if ($this->jiraStatus == 'Open') {
            $this->status = 'unscheduled';
            $this->scheduled = 'N/A';
        }
    }

    /**
     * @param array $config
     */
    public function format(array $config)
    {
        $this->statusLabel = $config['label'];

        $this->setSince($config['display']['since']);
        $this->setStyles($config['display']);
    }

    /**
     * @param string|null
     */
    private function setSince($since)
    {
        foreach ($this->changelog as $actions) {
            if (!is_array($actions)) continue;

            foreach ($actions as $action) {
                if ($action['items'][0]['toString'] == $this->jiraStatus) {
                    $this->since = $action['created'];
                    break;
                }
            }
        }

        if ($since) $this->time = DateFormatter::getAge($this->since);
    }

    /**
     * @param array $displayConfig
     */
    private function setStyles(array $displayConfig)
    {
        if (isset($displayConfig['time'])) {
            $timeColor = function($since, $displayConfig) {
                foreach ($displayConfig as $time => $color)
                    if (strtotime($time) && strtotime($time) > strtotime($since))
                        return $color;

                return $displayConfig['normal'];
            };

            $this->styles['status'] = $displayConfig['states_color'] === 'time'
                ? $timeColor($this->since, $displayConfig['time'])
                : $displayConfig['states_caolor'];

            if (isset($displayConfig['time_color'])) {
                $this->styles['time'] = $displayConfig['time_color'] === 'time'
                    ? $timeColor($this->since, $displayConfig['time'])
                    : $displayConfig['states_color'];
            }
        } else {
            $this->styles['status'] = $displayConfig['states_color'];
        }
    }

    /*8
     * @param array $config
     */
    public function shouldBeIncluded(array $config)
    {
        return !isset($config['limit']) || strtotime($config['limit']) <= strtotime($this->since);
    }

    /**
     * @return boolean
     */
    public function isDelayed()
    {
        if ($this->jiraStatus != 'Open') return false;

        foreach ($this->changelog as $actions) {
            if (!is_array($actions)) continue;

            foreach ($actions as $action) {
                if ($action['items'][0]['toString'] == 'In Progress') return true;
            }
        }

        return false;
    }
}
