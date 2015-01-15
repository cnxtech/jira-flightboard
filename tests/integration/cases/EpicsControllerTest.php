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
            $expected1['created'] = $ticket1['created'];
            $expected2['created'] = $ticket2['created'];
            $expected1['separation'] = $ticket1['separation'];
            $expected2['separation'] = $ticket2['separation'];
            $expected1['changelog'] = $ticket1['changelog'];
            $expected2['changelog'] = $ticket2['changelog'];
            $expected1['jiraStatus'] = $ticket1['jiraStatus'];
            $expected2['jiraStatus'] = $ticket2['jiraStatus'];

            return $expected1 == $ticket1 && $expected2 == $ticket2;
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
        $this->controller->sync($this->app['config'], $this->app['dao']);
        $response = $this->controller->get($request, $this->app);

        $this->assertSame('a response', $response);
    }
}
