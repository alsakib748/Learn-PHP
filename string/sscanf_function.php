<?php

$name = "Al Sakib 01608566928";
$parts = sscanf($name,"%s %s %11s");
print_r($parts);

sscanf($name,"%s %s %11s",$fname,$lname,$mobile);

echo $mobile;

?>