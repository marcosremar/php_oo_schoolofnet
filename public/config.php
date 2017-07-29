<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=teste_oo";
$container['user'] = 'homestead';
$container['pass'] = 'secret';