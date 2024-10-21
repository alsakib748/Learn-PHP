<?php 

// use Predis\Client;

// require "vendor/autoload.php";

// $redis = new Predis\Client();

// // $redis->set("key",10);
// // $redis->del("key");

// echo $redis->get("key");

?>
<?php 

// use Predis\Client;
// require __DIR__."/vendor/autoload.php";
// $redis = new Predis\Client();
// // $redis->set("key",6379,"EX",20);
// // $redis->del("key");
// // $redis->expire("key",20);
// echo $redis->get("key");

?>
<?php 
use Predis\Client;
require __DIR__."/vendor/autoload.php";
$redis = new Predis\Client();
// $redis->set("myself",json_encode(["name"=>"Al Sakib","id"=>"22231203028","university"=>"BUBT"]));
// echo $redis->get("myself");
// print_r(json_decode($redis->get("myself"),true));
$redis->set("myself",serialize(["name"=>"Al Sakib Ayon","id"=>"22231203028","university"=>"BUBT"]));

// print_r(unserialize($redis->get("myself")));
echo $redis->get("myself");
print_r(unserialize($redis->get("myself")));

$redis->expire("myself",10);

?>
