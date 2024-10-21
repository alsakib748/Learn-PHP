<?php 

// $ch = curl_init("https://artisan.com/web/curl/hello.php");
$ch = curl_init("https://www.php.net");

curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
// curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

$result = curl_exec($ch);

$error = curl_error($ch);

if($error){
    echo $error;
}

?>