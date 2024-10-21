<?php 

// $ch = curl_init("http://artisan.com/web/curl/hello.php");
// curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
// curl_setopt($ch,CURLOPT_POSTFIELDS,'secret=noodles');
// curl_exec($ch);

// $ch = curl_init("http://artisan.com/web/curl/hello.php");
// curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
// curl_setopt($ch,CURLOPT_POSTFIELDS,"wish=futureplan");
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// $store = curl_exec($ch);
// echo PHP_EOL.strlen($store).PHP_EOL;
// echo $store;

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://artisan.com/web/curl/hello.php");
// curl_setopt($ch,CURLOPT_URL,"http://artisan.com/web/curl/hello.php");
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
curl_setopt($ch,CURLOPT_POSTFIELDS,"wish=futureplan");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$store = curl_exec($ch);
echo strtoupper($store)." ".strlen($store);

?>