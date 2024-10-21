<?php 
class Color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}
class FavColor{
    public $data;
    public $color;
    function __construct($data,$color){
        $this->data = $data;
        $this->color = new Color($color);
    }
    function updateColor($color){
        $this->color = new Color($color);
    } 

    function __clone(){ 
        $this->color = clone $this->color;
    }
}

$f1 = new FavColor("Some Data","red");
print_r($f1);
// $f2 = clone $f1;
// $f2->data = "Green";

$fc2 = clone $f1;
print_r($fc2);

$fc2->updateColor("green");

print_r($f1);
print_r($fc2);

?>