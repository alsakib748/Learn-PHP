<?php

$ch = curl_init("http://artisan.com/web/curl/cookiejer.php");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=john&password=qwerty&submit=1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$cookie_file = "/tmp/cookies.txt";
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
echo curl_exec($ch);


$ch = curl_init("http://artisan.com/web/curl/cookiejer.php?logout=1");
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo curl_exec($ch);

?>