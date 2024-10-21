<?php 

    $string = "Hello World";

    echo $string[0].PHP_EOL;
    echo $string[1].PHP_EOL.PHP_EOL;

    echo $string[-1].PHP_EOL;
    echo $string[-2].PHP_EOL.PHP_EOL;

    echo substr($string,0,5).PHP_EOL;
    $length = strlen($string);
    echo substr($string,$length-5).PHP_EOL;

    echo "=============================\n";

    echo substr($string,-5,5).PHP_EOL;


?>