<?php 

     $name = "Al Sakib Ayon";
     $length = strlen($name)-1;
     for($i = $length;$i >= 0;$i--){
        echo $name[$i]; 
     }

     echo PHP_EOL.PHP_EOL;

     $string = "fucking bubt";
     $length = strlen($string); 
     for($i = 1;$i <= $length;$i++){
        echo $string[$i * -1];
     }

     echo PHP_EOL.PHP_EOL;

     $type = "A quick brown fox jumps over the lazy dog.";

     echo strrev($type);

?>