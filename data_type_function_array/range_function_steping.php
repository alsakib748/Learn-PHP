<?php

///$number = [10,11,12,13,14,15,16,17,18,19,20];

  $numbers = [];

  for($i=10;$i <= 20;$i++){
      array_unshift($numbers,$i);
  }

  print_r($numbers);

  echo PHP_EOL.PHP_EOL;

  $numbers2 = range(12,24,2);

  print_r($numbers2);

  $numbers3 = range(11,30,2);

  print_r($numbers3);

  echo PHP_EOL.PHP_EOL;

  foreach(range(0,50,11) as $values){
      //if($values % 7 == 0) {
          //echo $values.PHP_EOL;
      //}
      if($values > 0){
          echo $values.PHP_EOL;
      }

  }


