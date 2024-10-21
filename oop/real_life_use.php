<?php

class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = ''){
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }

    function setData($colorCode){
        $this->color = ltrim($colorCode,'#'); 
        $this->parseColor();
    }

    private function parseColor(){
        if($this->color){
            // $colors = sscanf($this->color,"%02x%02x%02x");
            list($this->red, $this->green, $this->blue) = sscanf($this->color,"%02x%02x%02x");
            // print_r($colors);
            echo $this->red." ".$this->green." ".$this->blue.PHP_EOL;
        }else{
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        }
    }

    function getData(){
         return $this->color;
    }

    function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    } 

    function readRGBColor(){
        echo " Red : {$this->red}\n Green : {$this->green}\n Blue : {$this->blue}\n";
    }

    function getRed(){
        return $this->red;
    }

    function getGreen(){
        return $this->green;
    }

    function getBlue(){
        return $this->blue;
    }

}

$r = new RGB("#00ff00");
$r->readRGBColor();
$r->getRed();
// $r->getGreen();
// $r->getBlue();
// $r->readRGBColor();
//    $x = new RGB("000");


?>