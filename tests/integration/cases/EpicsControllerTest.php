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
 * @package JiraDashboard\Tests\Controllers
 * @author toni <toni.lopez@shazam.com>
 */

namespace JiraDashboard\Tests\Controllers;

use JiraDashboard\Tests;
use JiraDashboard\Controllers\EpicsController;
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

        $this->app['dao'] = $this->getMock('\JiraDashboard\Daos\IssuesRestApiDao', array(), array(), '', false);

        $this->controller = new EpicsController();
    }

    public function testDummy()
    {
        $checkTemplateParams = function($templateParams) {
            $expected = require(__DIR__ . '/../expected.php');
            return $expected == $templateParams;
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

        $request = new Request(array(), array('start' => 5, 'end' => 10));
        $response = $this->controller->get($request, $this->app);

        $this->assertSame('a response', $response);
    }
}
