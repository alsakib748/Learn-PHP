<?php
/*
    $string = "  Hello Programming \n";
    $string = trim($string);
    echo $string;
    echo " World";
*/
    $string = "  Hello Programming   \n,";
    //$string = rtrim($string);
    $string = rtrim($string,"  \n,");
    echo $string;
    echo " World";
?>