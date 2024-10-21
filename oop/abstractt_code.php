<?php 
abstract class Shape{
     abstract function area();
     abstract function perimeter();
}

class Rectangle extends Shape{
     private $length;
     private $width;

     function __construct($length,$width){
         $this->length = $length;
         $this->width = $width;   
     }

     function getLength($length){
        return $this->length = $length;
     }

     function getWidth($width){
        return $this->width = $width;
     }

     function area(){
         echo "Area of Rectangle : ".$this->length*$this->width.PHP_EOL;
     }

     function perimeter()
     {
        $perimeterResult = 2 * ($this->length+$this->width);
        echo "Area of Perimeter : ".$perimeterResult.PHP_EOL;
     }

}

// class Triangle extends Shape{

// }

$r1 = new Rectangle(8,7);
$r1->area();
$r1->perimeter();

?>