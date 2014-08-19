<?php

require_once __DIR__ . '/../bootstrap.php';

$controller = new JiraDashboard\Controllers\EpicsController($app);
$start = isset($_GET['start']) ? (int)  $_GET['start'] : 1;
$end = isset($_GET['end']) ? (int)  $_GET['end'] : null;
echo $controller->get($start, $end);
