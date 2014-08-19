<?php

require_once __DIR__ . '/bootstrap.php';

$start = isset($_GET['start']) ? (int)  $_GET['start'] : 1;
$end = isset($_GET['end']) ? (int)  $_GET['end'] : null;
echo $app['twig']->render('epics.twig', array('start' => $start, 'end' => $end));
