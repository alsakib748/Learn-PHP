<?php 
trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;
    function sayHi()
    {
        echo "Hi\n";
    }
}

class MyClassB{
    use MyTrait;
    function sayHi(){
        echo "SayHi\n";
    }
}

MyClassA::$number = 2;
echo MyClassA::$number.PHP_EOL;

$m = new MyClassA();
$m->sayHi();
echo $m::$number.PHP_EOL;

$b = new MyClassB();
echo ($b::$number = 10).PHP_EOL;
$b->sayHi();

?>