<?php 

$ch = curl_init("https://postman-echo.com/headers");

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// curl_setopt($ch,CURLOPT_HEADER,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,[
    "http-key:value",
    "http-long:hello postman",
    "setData:php"
]);

echo curl_exec($ch);

?>