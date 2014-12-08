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
use JiraDashboard\Domain\Ticket;
use JiraDashboard\Domain\TicketMap;

class EpicsController
{
    private $dao;
    private $config;
    private $ticketMap;
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

        $this->map = new TicketMap($this->config);

        foreach ($rawIssues['issues'] as $rawIssue) {
            $ticket = new Ticket($rawIssue, $this->config['teams'], $this->states);

            $config = $this->config['epics']['fields'][$ticket->status];

            $ticket->format($config);
            if ($ticket->shouldBeIncluded($config)) {
                $this->map->addTicket($ticket);
            }
        }

        $list = $this->map->getList();

        $listSlice = $end === null
            ? array_slice($list, $start - 1)
            : array_slice($list, $start - 1, $end - $start + 1);

        return $app['twig']->render('epics.twig', array('issues' => $listSlice));
    }

    /**
     * @param Application $app
     */
    private function initialise(Application $app)
    {
        $this->dao = $app['dao'];

        $this->config = $app['config']->fetch();

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
