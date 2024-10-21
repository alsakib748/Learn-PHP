<?php

     $rang = range(0,20);
     //print_r($rang);
     //echo count($rang);

     $random = mt_rand(0,50);

     //echo $rang[$random].PHP_EOL;

     //echo $doubleRandom;

     if($random % 2 == 0){
         echo "Head\n";
     }else{
         echo "Tail\n";
     }

     shuffle($rang);

     print_r($rang);

     echo $rang[3].PHP_EOL;

