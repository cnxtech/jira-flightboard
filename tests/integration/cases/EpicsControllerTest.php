<?php

/**
 * @author toni <toni.lopez@shazam.com>
 * @package JiraDashboard\Tests\Controllers
 */

namespace JiraDashboard\Tests\Controllers;

use JiraDashboard\Tests;
use JiraDashboard\Controllers\EpicsController;
use PHPUnit_Framework_TestCase;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Common\Config;

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
