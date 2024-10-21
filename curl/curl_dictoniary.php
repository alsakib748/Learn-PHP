<?php

$word = "survey";
// $endpoint = "https://dictionary.cambridge.org/dictionary/english-bengali/{$word}";
// $endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&format=json";
$endpoint = "https://www.vocabulary.com/dictionary/{$word}/";
// $endpoint = "https://www.google.com";
$ch = curl_init($endpoint);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
// curl_setopt($ch,CURLOPT_URL,$endpoint);
// curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
$result = curl_exec($ch);
$short_start = strpos($result,'<p class="short">')+17;
$short_end = strpos($result,"</p>",$short_start);
$short = substr($result,$short_start,($short_end-$short_start));
echo "<strong>Short Meaning</strong>:{$short}";

?>