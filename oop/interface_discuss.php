<?php 
interface BaseAnimal{
    function isAlive();
    function isEat($para1, $para2);
    function breed();
}

class Animal implements BaseAnimal{
    function isAlive(){}
    function isEat($para1, $para2){}
    function breed(){}
} 

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

abstract class AbstractHuman implements BaseHuman{
    abstract function run();
    function eat(){
        echo "I am eating";
    }
}

class Human extends AbstractHuman{
    function isAlive(){}
    function isEat($para1, $para2){}
    function breed(){}
    function canTalk(){}
    function run(){}
}

$h1 = new Human();
// $bh = new BaseHuman();
// echo $bh instanceof BaseAnimal;
echo $h1 instanceof BaseAnimal;


?>