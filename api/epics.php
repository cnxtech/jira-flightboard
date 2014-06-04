<?php

require_once __DIR__ . '/../bootstrap.php';

$controller = new JiraDashboard\Controllers\EpicsController($app);
echo $controller->get();
