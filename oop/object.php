<?php 

class Human{
    public $name;
    function sayHi(){
        echo "Al Sakib Ayon\n";
        $this->sayName();
    }

    function sayName(){
        echo "My name is {$this->name} \n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

$h1 = new Human();
$h1->name = "BUBT";
$h1->sayName();
$c1 = new Cat();
$d1 = new Dog();

// echo $h1->name.PHP_EOL;
$h1->sayHi();
$d1->sayHi();

// $h1->age = 22;

// echo $h1->age;

?>