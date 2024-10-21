<?php 
define('ok',123);
const city = "Dhaka";
echo city."\n";

class Example{
    const name = "Sakib\n";
    function display(){
        // echo self::name;
        echo $this::name;
    }
}

$ex = new Example();
// echo $ex::name;
$ex->display();
echo Example::name;


?>