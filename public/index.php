<?php

// require_once('IConn.php');
// require_once('Conn.php');
// require_once('Product.php');
// require_once('Container.php');

require_once('../vendor/autoload.php');

// $db = Container::getConn();

// $product = Container::getProduct();

// $list = $product->list();

// var_dump($list);

use Pimple\Container;

$container = new Container();

$container['date'] = function(){
	return new \DateTime;
};

var_dump($container['date']);

$container['date2'] = $container->factory(function(){
	return new \DateTime;
});

echo '<br>';
//$date = new \Date
var_dump($container['date']);