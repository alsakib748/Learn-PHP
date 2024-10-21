<?php 

    $numers = array(4,5,6,7,8,9,1,3);

    shuffle($numers);

    print_r($numers);

    $fruits = array("a"=>"apple","b"=>"banana","o"=>"orange","s"=>"strawberry");

    //shuffle($fruits);

    $key = array_rand($fruits);

    echo $key;

    //print_r($fruits);

    echo "\n".$fruits[$key];
    
?>