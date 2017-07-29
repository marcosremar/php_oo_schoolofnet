<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../vendor/autoload.php');
require_once('config.php');
require_once('service.php');

$list = $container['ServiceProduct']->list();

var_dump($list);