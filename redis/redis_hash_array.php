<?php 

    use Predis\Client;
    require  __DIR__."/vendor/autoload.php";
    
    $redis = new Predis\Client();
    // $redis->hset("com","name","ASA Company");
    // $redis->hset("com","build","2000");
    // $redis->hset("com","web","https://www.asa.com");

    // echo $redis->hget("com","name").PHP_EOL;
    // $redis->hset("com","build","1999").PHP_EOL;
    // echo $redis->hget("com","web").PHP_EOL.PHP_EOL;
    // $redis->hdel("com","build");
    // print_r($redis->hgetall("com"));

    $com = [
        "name" => "ASA Company",
        "build" => "2000",
        "web" => "https://www.asa.com"
    ];

    $redis->hmset("key",$com);

    print_r($redis->hmget("key",["name","build","web"]));

    
?>