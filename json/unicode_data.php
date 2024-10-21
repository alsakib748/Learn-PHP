<?php 

$unicode = [
    "country" => "বাংলাদেশ",
    "nationality" => "বাংলাদেশী"
];

$jsonData = json_encode($unicode,JSON_UNESCAPED_UNICODE,JSON_PRETTY_PRINT);

echo $jsonData.PHP_EOL;

$jsonDecode = json_decode($jsonData,true);

print_r($jsonDecode);

echo $jsonDecode["country"].PHP_EOL;
echo $jsonDecode["nationality"];

// echo $jsonDecode->country.PHP_EOL;
// echo $jsonDecode->nationality.PHP_EOL;

// $name = "আল সাকিব অয়ন ";
// echo json_encode($name,JSON_UNESCAPED_UNICODE).PHP_EOL;
// $address = "মিরপুর,ঢাকা ";
// echo json_encode($address,JSON_UNESCAPED_UNICODE);

?>