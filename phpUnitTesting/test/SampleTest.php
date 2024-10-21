<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase{
    function testSomething(){
        $result = 3 * 2;
        $this->assertEquals(6,$result);
    }

    function testAnotherThing(){
        $result = 0;
        $this->assertEquals(false,$result);
    }
}


?>