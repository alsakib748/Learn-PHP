<?php

class Planet{
    private $name;
    function __construct($name){
        $this->name = $name;
    }
}

$p1 = new Planet("Earth");
$p2 = new Planet("Mars");

$p3 = new Planet("Earth");
$p4 = $p1;

if($p1 === $p4){
    echo "Similar planet";
}else{
    echo "Not Similar planet";
}

?>