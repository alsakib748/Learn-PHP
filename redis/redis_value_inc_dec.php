<?php 
use Predis\Client;
require __DIR__."/vendor/autoload.php";

$redis = new Predis\Client();
$redis->set("value",20);
// echo $redis->get("value");

$redis->incr("value");
// echo $redis->get("value").PHP_EOL;

// $redis->incr("value");
// echo $redis->get("value").PHP_EOL;

// $redis->incrby("value",10);
// echo $redis->get("value").PHP_EOL;

// $redis->decr("value");
// echo $redis->get("value").PHP_EOL;

// $redis->decr("value");

// echo $redis->get("value").PHP_EOL;

// $redis->decrby("value",5);
// echo $redis->get("value").PHP_EOL;

// $redis->decrby("value",10);
echo $redis->get("value");

?>