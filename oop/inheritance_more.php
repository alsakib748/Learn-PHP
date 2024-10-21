<?php

class Shape{
    protected $length;
    protected $width;

    function __construct($length,$width){
         $this->length = $length;
         $this->width = $width;
    }

    function show(){
        echo "Length is : ".$this->length."\n";
        echo "Width is : ".$this->width."\n";
    }
 
}

class rectangle extends Shape{
    function rect(){
        $area = $this->length * $this->width;
        echo "The rectangle of area is ".$area."\n";
    }
}

class triangle extends Shape{
    function tri(){
        $area = 3.1416 * $this->length * $this->width;
        echo "The traingle of area is : ".$area."\n";
    }
}

$r1 = new rectangle(10,2);
$r1->show();
$r1->rect();

$r1 = new triangle(8,7);
$r1->show();
$r1->tri();

?>