<?php 

abstract class example{

    final function something(){
        echo "Something from parent class";
    }

}

class example2 extends example{
    function something(){
        echo "Something from child class";
    }
}

$e1 = new example2();
$e1->something();


?>