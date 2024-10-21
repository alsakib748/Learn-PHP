<?php 

namespace Project;

include "c1.php";
include "c2.php";

/// Alias name
use \Project\Motorcycle\Bike as Hornet;
use \Project\Bike as Apache;

// $obj = new Bike();
// $obj2 = new \Project\Motorcycle\Bike();

// echo $obj->getName().PHP_EOL;
// echo $obj2->getName();

$h = new Hornet();
echo $h->getName().PHP_EOL;

$a = new Apache();
echo $a->getName();

?>