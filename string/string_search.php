<?php 

    $string = "quick brown fox jumps over Fox fox Fox fox the lazy dog";
   /* echo $string[8];
    echo $string[9];
    echo $string[10];
    echo $string[11];
    echo $string[12]; */
    //echo strpos(strtolower($string),'fox');
    //echo stripos($string,'fox');
    //echo strpos($string,'fox',14);
     $offset = strripos($string,'fox');
     echo $offset.PHP_EOL;
     if($offset !== false){
        echo "Word is found";
     }
     else{
        echo "Word is not found";
     }

       

?>