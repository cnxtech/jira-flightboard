<?php

use Silex\Application;
use Common\Config;
use Symfony\Component\HttpFoundation\Request;
use Silex\Provider\TwigServiceProvider;

ini_set('date.timezone', 'Europe/London');

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app['debug'] = true;

$app['config'] = Config::getInstance();
$app['config']->setUseCache(true);
$app['config']->loadConfig(array(__DIR__ . '/../config/properties.yml'));

$app->register(new TwigServiceProvider(), array('twig.path' => __DIR__ . '/../views'));

$rootPoint = $app['config']->fetch('root_point');

$controllerFactory = $app['controllers_factory'];
$controllerFactory->get('incidents', function(Application $app) {
    return $app['twig']->render('incidents.twig');
});
$controllerFactory->get('epics', function(Request $request, Application $app) {
    $start = (int) $request->get('start', 1);
    $end = $request->get('end', null);

    return $app['twig']->render('epics.twig', array('start' => $start, 'end' => $end));
});
$app->mount($rootPoint, $controllerFactory);

$controllerFactory = $app['controllers_factory'];
$controllerFactory->get('incidents', '\JiraDashboard\Controllers\IncidentController::get');
$controllerFactory->get('epics', '\JiraDashboard\Controllers\EpicsController::get');
$app->mount($rootPoint . '/api', $controllerFactory);

$app->run();
