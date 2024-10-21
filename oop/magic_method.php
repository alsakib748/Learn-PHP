<?php 
class Example{
    private $name;
    private $age;
    private $class;

    function __construct($name ='',$age ='',$class =''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return strtoupper($this->$prop);
    } 

    public function __set($prop,$value){
        $this->$prop = $value;
    }

    // function setName($name){
    //     $this->name =  $name;
    // }
    // function getName(){
    //     return $this->name;
    // }
    // function setAge($age){
    //     $this->age = $age;
    // }
    // function getAge(){
    //     return $this->age;       
    // }
    // function setClass($class){
    //     $this->class = $class;
    // }
    // function getClass(){
    //     return $this->class; 
    // }
}

$E = new Example("sakib",22,14);

echo $E->name.PHP_EOL;

$E->name = "Nishan";
echo $E->name.PHP_EOL;

$E->age = 22;
echo $E->age;

// echo $E->getName()."\n";
// echo $E->getAge()."\n";
// echo $E->getClass();

// $E1 = new Example();
// $E1->setName("Sakib");
// echo $E1->getName();


?>