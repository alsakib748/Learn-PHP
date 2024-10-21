
<?php

   $fruits = array('a'=>'apple','b'=>'banana','co'=>'coconat','c'=>'cherry','r'=>'array');

   //shuffle($fruits);

  // print_r($fruits);

   $asso_rand = array_rand($fruits);

   print_r($asso_rand);

   echo "=>".$fruits[$asso_rand];


