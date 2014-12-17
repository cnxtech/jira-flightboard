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
 * @package JiraFlightboard\Tests\Controllers
 * @author toni <toni.lopez@shazam.com>
 */

namespace JiraFlightboard\Tests\Controllers;

use JiraFlightboard\Tests;
use JiraFlightboard\Controllers\EpicsController;
use PHPUnit_Framework_TestCase;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use EasyConfig\Config;

class EpicsControllerTest extends PHPUnit_Framework_TestCase
{
    private $app;
    private $controller;

    public function setUp()
    {
        $this->app = new Application();

        $this->app['twig'] = $this->getMock('\Twig_Environment', array(), array(), '', false);

        $this->app['config'] = Config::getInstance();
        $this->app['config']->loadConfig(array(__DIR__ . '/../..//../config/properties.yml'));

        $this->app['dao'] = $this->getMock('\JiraFlightboard\Daos\IssuesRestApiDao', array(), array(), '', false);

        $this->controller = new EpicsController();
    }

    public function testGetEpics()
    {
        $checkTemplateParams = function($templateParams) {
            $expected = require(__DIR__ . '/../expected.php');

            $expected1 = $expected['issues'][0];
            $expected2 = $expected['issues'][1];
            $ticket1 = $templateParams['issues'][0];
            $ticket2 = $templateParams['issues'][1];
        
            return $expected1['key'] == $ticket1->key
                && $expected1['scheduled'] == $ticket1->scheduled
                && $expected1['summary'] == $ticket1->summary
                && $expected1['project'] == $ticket1->project
                && $expected1['icon'] == $ticket1->icon
                && $expected1['blocking'] == $ticket1->blocking
                && $expected1['rank'] == $ticket1->rank
                && $expected1['month'] == $ticket1->month
                && $expected1['component'] == $ticket1->component
                && $expected1['status'] == $ticket1->status
                && $expected1['styles'] == $ticket1->styles
                && $expected2['key'] == $ticket2->key
                && $expected2['scheduled'] == $ticket2->scheduled
                && $expected2['summary'] == $ticket2->summary
                && $expected2['project'] == $ticket2->project
                && $expected2['icon'] == $ticket2->icon
                && $expected2['blocking'] == $ticket2->blocking
                && $expected2['rank'] == $ticket2->rank
                && $expected2['month'] == $ticket2->month
                && $expected2['component'] == $ticket2->component
                && $expected2['status'] == $ticket2->status
                && $expected2['styles'] == $ticket2->styles;
        };

        $this->app['twig']
            ->expects($this->once())
            ->method('render')
            ->with('epics.twig', $this->callBack($checkTemplateParams))
            ->will($this->returnValue('a response'));

        $issuesFromJira = require(__DIR__ . '/../jiraResponse.php');
        $this->app['dao']
            ->expects($this->once())
            ->method('getByStatus')
            ->with(
                'Shazam Road Map',
                array('In Progress', 'Closed', 'Open', 'Resolved', date('F'), date('F', strtotime('+1 month')))
            )
            ->will($this->returnValue($issuesFromJira));

        $request = new Request(array(), array('start' => 1, 'end' => 10));
        $response = $this->controller->get($request, $this->app);

        $this->assertSame('a response', $response);
    }
}
