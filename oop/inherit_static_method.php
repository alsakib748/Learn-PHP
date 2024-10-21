<?php
class A{
    protected static $name;
    static function sayHi(){
        self::$name = "Sakib";
        echo "Say Hi A\n";
    }
}
class B extends A{
    static function sayHi(){
        // parent::sayHi();
        parent::$name = "Ayon";
        parent::sayHi();
        echo "Say Hi B\n";
    }
}

$b = new B();
// $b->sayHi();
B::sayHi();
// echo B::$name = "Al Sakib Ayon\n";

?>