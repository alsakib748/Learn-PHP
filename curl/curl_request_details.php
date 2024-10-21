<?php 

$ch = curl_init("https://pixabay.com/photos/mountains-sun-clouds-peak-summit-1900550/");

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

// curl_setopt($ch,CURLOPT_VERBOSE,true);

curl_exec($ch);

$info = curl_getinfo($ch);

// print_r($info);

$headers = get_headers("https://pixabay.com/photos/mountains-sun-clouds-peak-summit-190055/");

print_r($headers);

?>