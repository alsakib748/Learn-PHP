<?php 

/// HMAC

$password = "Sakib@123";
$key = "a1B2C#d@l&";

print_r(hash_hmac_algos());

// $hash_hmac = hash_hmac("sha512",$key,$password);

// $hash_hmac = bin2hex(mhash(MHASH_SHA512,$password,$key));

$hash_hmac = hash_hmac("gost-crypto",$password,$key);

echo $hash_hmac.PHP_EOL.PHP_EOL;

echo hash_hmac("whirlpool","Al Sakib Ayon","ldkjfdso641few4fwe654rfe");

// $hash_hmac = 


?>