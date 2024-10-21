<?php 

$password = "qwerty";

$hash = md5($password);

echo "Hash = ".$hash.PHP_EOL;

$ssalt = "qsdvbnm#S@a#utiopl%t&ergf*fgjkl";
$esalt = "*qaeesdgS&asa#l@t%9tryuddtopi12";

echo "Start Salt = ".md5($ssalt).PHP_EOL;

echo "End Salt = ".md5($esalt).PHP_EOL;

$ssalt_hash = md5($password.$ssalt);

$esalt_hash = md5($password.$esalt);

$both_salt_hash = md5($ssalt.$password.$esalt);

echo "Hash with Start Salt = ".$ssalt_hash.PHP_EOL;

echo "Hash with end Salt = ".$esalt_hash.PHP_EOL;

echo "Hash with Start and End Salt = ".$both_salt_hash.PHP_EOL;



?>