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
 * @author toni lopez <toni.lopez@shazam.com>
 */

use Silex\Application;
use EasyConfig\Config;
use Symfony\Component\HttpFoundation\Request;
use Silex\Provider\TwigServiceProvider;
use JiraDashboard\Daos\IssuesRestApiDao;

ini_set('date.timezone', 'Europe/London');

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app['debug'] = true;

$app['config'] = Config::getInstance();
$app['config']->setUseCache(true);
$app['config']->loadConfig(array(__DIR__ . '/../config/properties.yml'));

$app->register(new TwigServiceProvider(), array('twig.path' => __DIR__ . '/../views'));

$rootPoint = $app['config']->fetch('root_point');

$app['dao'] = new IssuesRestApiDao(
    $app['config']->fetch('jira_api', 'endpoint'),
    $app['config']->fetch('jira_api', 'token')
);

$controllerFactory = $app['controllers_factory'];
$controllerFactory->get('epics', '\JiraDashboard\Controllers\EpicsController::get');
$app->mount($rootPoint, $controllerFactory);

$app->run();
