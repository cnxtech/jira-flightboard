<?php

require_once __DIR__ . '/../bootstrap.php';

$controller = new JiraDashboard\Controllers\EpicsController($app);
$page = isset($_GET['page']) ? (int) $_GET['page'] : 0;
echo $controller->get($page);
