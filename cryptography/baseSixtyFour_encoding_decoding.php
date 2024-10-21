<?php 

$text = "This is a secret message";

// echo base64_encode($text);

$type = "A quick borwn fox jumps over the lazy dog";

$encode = base64_encode($type);

// echo "Encode : ".$encode.PHP_EOL;

// echo "Decode : ".base64_decode($encode);

$name = "Al Sakib Ayon";
$encode_name = base64_encode($name);

// echo "Encoded Name : ".$encode_name.PHP_EOL;

// echo "Decoded Name : ".base64_decode($encode_name);

$quote = "Life is beautiful";
$encode = base64_encode($quote);
echo "Encode = ".$encode.PHP_EOL;
echo "Decode = ".base64_decode($encode);


?>