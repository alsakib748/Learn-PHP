<?php

class ParentClass{
    protected $name;
    function __ParentClass($name){
        $this->name = $name; 
    }
    public function sayHi(){
        echo $this->name;  
        echo "Parent Class sayHi function\n";
    } 
}
class ChildClass extends ParentClass{
    public function sayHi(){
        parent::sayHi();
        echo "Child Class sayHi function\n";
    }
}

$c1 = new ChildClass("The Great Wall");

$c1->sayHi();

$p1 = new ParentClass("Sex Education");
$p1->sayHi();

?>