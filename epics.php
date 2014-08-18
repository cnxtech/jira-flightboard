<?php

require_once __DIR__ . '/bootstrap.php';

$page = isset($_GET['page']) ? (int)  $_GET : 0;
echo $app['twig']->render('epics.twig', array('page' => $page));
