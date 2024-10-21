<?php

use Predis\Client;
require __DIR__."/vendor/autoload.php";

$redis = new Predis\Client();

$redis->rpush('chatroom','Jessica: I\'m doing greet ');
// echo $redis->llen("chatroom");
print_r($redis->lrange('chatroom',0,3));

?>