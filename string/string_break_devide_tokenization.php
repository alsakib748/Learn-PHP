<?php 

     $string = "Hello world, World How are you";
     $string2 = "A quick brown fox jumps over the lazy dog";
     $parts = explode(", ",$string);
     print_r($parts);
     echo PHP_EOL;
     
     //$original = join(" ",$parts);
     $original = implode(" ",$parts);
     echo $original;  

     echo PHP_EOL.PHP_EOL;

     $parts2 = str_split($string);
     print_r($parts2);

     echo PHP_EOL;

     $parts3 = strtok($string,", ");
     //print_r($parts3);
     while($parts3 !== false){
        echo $parts3."\n";
        $parts3 = strtok(", ");
     } 
     echo PHP_EOL.PHP_EOL;

     $parts4 = strtok($string2," ");
     while($parts4 !== false){
        echo $parts4."\n";
        $parts4 = strtok(" "); 
     }
     
     echo PHP_EOL;

     //$parts5 = preg_split("/ |,/",$string2);
     $parts5 = preg_split("/ |,/",$string2);
     print_r($parts5); 

?>