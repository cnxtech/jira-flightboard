<?php

use Symfony\Component\Yaml;
use Silex\Application;

ini_set('date.timezone', 'Europe/London');

require_once __DIR__ . '/vendor/autoload.php';

$app = new Application();

$yaml = new Yaml\Parser();
$app['config'] = array_merge(
    $yaml->parse(file_get_contents(__DIR__ . '/config/environment.yml')),
    $yaml->parse(file_get_contents(__DIR__ . '/config/properties.yml'))
);

$app->register(
    new Silex\Provider\TwigServiceProvider(),
    array('twig.path' => __DIR__ . '/views')
);
$app['twig']->addGlobal('rootPoint', $app['config']['root_point']);

echo $app['twig']->render('home.twig');
