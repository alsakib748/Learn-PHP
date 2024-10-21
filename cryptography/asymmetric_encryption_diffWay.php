<?php

// require __DIR__."/vendor/autoload.php";
// use phpseclib\Crypt\RSA;
// $message = "This is a secret message";

// $rsa = new RSA();
// $rsa->loadkey(file_get_contents(__DIR__."/keys/id-rsa.pub"));

require __DIR__ . '/vendor/autoload.php';
use phpseclib\Crypt\RSA;

$message = "This is a secret message";

$rsa = new RSA();
$rsa->loadKey(file_get_contents(__DIR__ . '/keys/id-rsa'));


?>
