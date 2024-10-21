<?php 
class MathCalculator{
    private $number;
    static $num;
    static function factorial($n){
        // $this->number = 12;
        self::doSomething();
        self::$num = 18;
        echo "find the factorial of {$n}\n";
       //echo "The static variable number is {$num}\n";
    }

    static function doSomething(){
        echo (self::$num = 10)."\n";
        echo (self::$num = "ABCD")."\n";
        echo "Do Something!!\n";
    }

    function fibonacci($n){
       echo "find the fibonacci series to {$n} time\n";
    }
} 

$obj = new MathCalculator();
$obj->fibonacci(5);
$obj->factorial(7);

MathCalculator::factorial(5);
// MathCalculator::fibonacci(7);
MathCalculator::$num;

MathCalculator::doSomething();

?>