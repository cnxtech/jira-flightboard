<?php

use Silex\Application;
use Common\Config;
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
