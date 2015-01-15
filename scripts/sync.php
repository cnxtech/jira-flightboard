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
 * @package scripts
 * @author toni <toni.lopez@shazam.com>
 */

use EasyConfig\Config;
use JiraFlightboard\Daos\IssuesRestApiDao;
use JiraFlightboard\Controllers\EpicsController;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

ini_set('date.timezone', 'Europe/London');

require_once __DIR__ . '/../vendor/autoload.php';

$config = Config::getInstance();
$config->setUseCache(true);
$config->loadConfig(array(__DIR__ . '/../config/properties.yml'));

$log = new Logger('Jira-Flightboard');
$log->pushHandler(new StreamHandler($config->fetch('log', 'file'), Logger::WARNING));

$rootPoint = $config->fetch('root_point');

$dao = new IssuesRestApiDao(
    $config->fetch('jira_api', 'endpoint'),
    $config->fetch('jira_api', 'token'),
    $log
);

$epicsDao = new EpicsController();
$epicsDao->sync($config, $dao);
