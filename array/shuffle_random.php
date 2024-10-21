<?php 

  $numbers = range(40,50);
  $random = mt_rand(0,30);
  
 // $rand = $numbers[$random];
  echo $random."\n";
  if($random % 2 == 0)
     echo "Head";
  else
     echo "Tail";   

  echo "\n\n";

  shuffle($numbers);
  
  print_r($numbers);

  $lastIndex = $numbers[5];
  echo "\nEnter the 5 index data : ".$lastIndex;

?>