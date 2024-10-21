<?php

   $name = array("ayon","sakib","rakib","sakil","s" => "sabbir","foysal");
   $numbers = array(5,7,8,9,3,4,"4" => 11,6,9);

   ///asort($name);
   arsort($name);
   ///asort($numbers);
   arsort($numbers);

   print_r($name);
   print_r($numbers);

   echo PHP_EOL;


//   for($i=0;$i < count($name); $i++){
//       echo "[{$i}]"."=".$name[$i];
//       echo PHP_EOL;
//   }

  foreach($name as $key=>$names){
      echo $key."=".$names."\n";
  }

  echo PHP_EOL;
  echo PHP_EOL;

  $animals = array('d' => 'monkey','o' => 'lion', 'i' => 'tiger', 'a'=>'elephant', 'j' => 'snake');

  asort($animals);

  foreach($animals as $keys => $values){
      echo $keys." => ".$values;
      echo PHP_EOL;
  }

  echo PHP_EOL;
  arsort($animals);

  foreach($animals as $keys => $values){
    echo $keys." => ".$values;
    echo PHP_EOL;
  }

  echo PHP_EOL;
  ksort($animals);

  foreach($animals as $keys => $values){
    echo $keys." => ".$values;
    echo PHP_EOL;
  }

  echo PHP_EOL;
  krsort($animals);

  foreach($animals as $keys => $values){
     echo $keys." => ".$values;
     echo PHP_EOL;
  }