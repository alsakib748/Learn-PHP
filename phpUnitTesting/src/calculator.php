<?php
class Calculator{
    function add(... $operands){
        return array_sum($operands);
    }
    function substract($a,$b){
        return $a - $b;
    }
    function multiply(... $operands){
        return array_product($operands);
    }
    function divide($a, $b){
        return $a / $b;
    }
}

?>