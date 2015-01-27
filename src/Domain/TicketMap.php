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

class TicketMap
{
    public $map = array();
    private $config;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
        $this->prepareOrderedMap();
    }

    private function prepareOrderedMap()
    {
        $teams = array();
        foreach (array_keys($this->config['teams']) as $team) {
            $teams[$team] = array();
        }

        foreach ($this->config['epics']['fields'] as $field => $properties) {
            if ($properties['sorting'] == 'time') {
                $this->map[$field] = array();
            } else if ($properties['sorting'] == 'team-group' || $properties['sorting'] == 'board') {
                $this->map[$field] = $teams;
            }
        }
    }


    /**
     * param Ticket $ticket
     */
    public function addTicket(Ticket $ticket)
    {
        $status = $ticket->status;
        $component = $ticket->component;
        $month = $ticket->month;
        $rank = $ticket->rank;
        $priority = $ticket->priority;

        $sorting = $this->config['epics']['fields'][$status]['sorting'];

        if ($sorting === 'time') {
            $time = strtotime($ticket->since);
            if (!isset($this->map[$status][$time]))
                $this->map[$status][$time] = array();

            $this->map[$status][$time][] = $ticket;
        } else if ($sorting === 'team-group') {
            if (!isset($this->map[$status][$component][$month])) {
                $this->map[$status][$component][$month] = array();
                ksort($this->map[$status][$component]);
            }
            if (!isset($this->map[$status][$component][$month][$rank]))
                $this->map[$status][$component][$month][$rank] = array();

            $this->map[$status][$component][$month][$rank][] = $ticket;
        } else if ($sorting === 'board') {
            if (!isset($this->map[$status][$component][$month])) {
                $this->map[$status][$component][$month] = array();
                ksort($this->map[$status][$component]);
            }
            if (!isset($this->map[$status][$component][$month][$priority])) {
                $this->map[$status][$component][$month][$priority] = array();
                ksort($this->map[$status][$component][$month]);
            }

            $this->map[$status][$component][$month][$priority][] = $ticket;
        }
    }

    /**
     * @return array
     */
   public function getList()
    {
        if (empty($this->map)) {
            return array();
        }

        $list = array();

        foreach ($this->map as $type => $byStateIssues) {
            if ($this->config['epics']['fields'][$type]['sorting'] == 'time') {
                ksort($byStateIssues);
                foreach ($byStateIssues as $key => $group)
                    if ($this->config['epics']['fields'][$type]['sorting'] == 'time')
                        foreach ($group as $issue)
                            $list[] = $issue;
            } else if ($this->config['epics']['fields'][$type]['sorting'] == 'board') {
                foreach (array_keys($this->map[$type]) as $team) {
                    foreach (array_keys($this->map[$type][$team]) as $month) {
                        ksort($this->map[$type][$team][$month]);
                        foreach (array_keys($this->map[$type][$team][$month]) as $rank) {
                            ksort($this->map[$type][$team][$month][$rank]);
                            $list = array_merge($list, $this->map[$type][$team][$month][$rank]);
                        }
                    }
                }
            } else {
                while (!empty($this->map[$type])) {
                    foreach (array_keys($this->map[$type]) as $team) {
                        foreach (array_keys($this->map[$type][$team]) as $month) {
                            ksort($this->map[$type][$team][$month]);
                            foreach (array_keys($this->map[$type][$team][$month]) as $rank) {
                                $list[] = array_shift($this->map[$type][$team][$month][$rank]);

                                if (empty($this->map[$type][$team][$month][$rank])) 
                                    unset($this->map[$type][$team][$month][$rank]);
                                break;
                            }
                            if (empty($this->map[$type][$team][$month])) 
                                unset($this->map[$type][$team][$month]);
                            break;
                        }
                        if (empty($this->map[$type][$team])) 
                            unset($this->map[$type][$team]);
                    }
                    if (count($list)) {
                        $list[count($list) - 1]->separation = true;
                    }
                }
            }
        }

        return $this->groupTicketsInList($list);
    }

    /**
     * @param array $list
     * @return array
     */
    private function groupTicketsInList(array $list)
    {
        $summaries = array();
        $groupedList = array();

        foreach ($list as $key => $ticket) {
            $jiraSummary = trim($ticket->summary);

            if (!isset($summaries[$jiraSummary])) {
                $groupedList[] = get_object_vars($ticket);
                $summaries[$jiraSummary] = count($groupedList) - 1;
            } else {
                $newIndex = $summaries[$jiraSummary];
                $head = array_slice($groupedList, 0, $newIndex + 1);
                $head[] = get_object_vars($ticket);
                for ($i = $newIndex + 1; $i < count($groupedList); $i++) {
                    $head[] = $groupedList[$i];
                }
                $groupedList = $head;
                foreach ($summaries as $summary => $index) {
                    if ($newIndex <= $index) $summaries[$summary]++;
                }
            }
        }

        return $groupedList;
    }
}
