<?php

// $ch = curl_init("https://plus.unsplash.com/premium_photo-1673491311218-3a0956bff47e");
// curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
// $filename = fopen("image.jpg","w");
// curl_setopt($ch,CURLOPT_FILE,$filename);
// curl_exec($ch);

// set_time_limit(0);
// $ch = curl_init("https://images.unsplash.com/photo-1610448720983-959b147f1ac6");
// $fileputh = fopen("image5.jpg","w");
// curl_setopt($ch,CURLOPT_FILE,$fileputh);
// curl_exec($ch);
// curl_close($ch);

set_time_limit(0);
$ch = curl_init("https://images.unsplash.com/photo-1694435833920-5578d935bc88");
$path = fopen("eagle.jpg","w");
curl_setopt($ch,CURLOPT_FILE,$path);
curl_exec($ch);
curl_close($ch);


?>