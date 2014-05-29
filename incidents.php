<?php

require_once __DIR__ . '/bootstrap.php';

echo $app['twig']->render('incidents.twig');
