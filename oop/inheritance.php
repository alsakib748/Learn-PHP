<?php 
class Animal{
    protected $name;
    public function __construct($name){
         $this->name = $name; 
    }
    protected function addTitle(){
        echo "Mr.";
    }
    public function eat(){
        // $this->addTitle();
        echo "{$this->name} is eating\n";
    }
    public function run(){
        // $this->addTitle();
        echo "{$this->name} is running\n";
    }
    public function sleep(){
        // $this->addTitle();
        echo "{$this->name} is sleeping\n";
    }
    public function copy(){}
    
}

class Human extends Animal{
    public function sayHi(){
        echo $this->addTitle()."{$this->name} say Hi from Animal to Human\n";
    }
}

class Cat extends Animal{
    public function sayHi(){
        echo "{$this->name} say Hi from Animal to Cat\n";
    }
}

   $hu = new Human("Sakib");
   $hu->eat();
   $hu->sayHi();
//    $h1->copy();
   $ca = new Cat("Tom");
//    $a1->run();
   $ca->sleep();
   $ca->sayHi();

?>