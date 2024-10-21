<?php 
use PHPUnit\Framework\TestCase;
require "src/calculator.php";

class CalculatorTest extends TestCase{
    private $calc;
    protected function setUp():void{
        $this->calc = new Calculator();
    }
    function testAdditionOfTwoNumber(){
        $result = $this->calc->add(5,7);
        $this->assertEquals(12,$result);
    }
    function testAdditionOfMultipleNumbers(){
        $result = $this->calc->add(2,3,7,1);
        $this->assertEquals(13,$result);
    }

    function testSubtractOfTwoNumber(){
        $result = $this->calc->substract(9,3);
        $this->assertEquals(6,$result);
    }
}    

?>