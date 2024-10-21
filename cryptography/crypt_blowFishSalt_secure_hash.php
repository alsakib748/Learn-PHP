<?php

// $message = "A quick brown fox jumps over the lazy dog";

// $blosFish_salt = "$2y$10$".bin2hex(random_bytes(11));

// echo crypt($message,$blosFish_salt).PHP_EOL.PHP_EOL;

// $blowFish_salt2 = "$2y$10$".bin2hex(openssl_random_pseudo_bytes(11));

// echo crypt($message,$blowFish_salt2);

$message = "Al Sakib Ayon";

$blowFish_salt = "$2y$10$".bin2hex(openssl_random_pseudo_bytes(11));

echo crypt($message,$blowFish_salt);

echo crypt($message,$blowFish_salt);


?>