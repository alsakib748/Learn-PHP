<?php 
class MotorCycle{
    //  private $displacement, $capacity, $milage;
     private $parameters;
     function __construct($displacement, $capacity, $milage){
         $this->parameters = []; 
         $this->parameters['displacement'] = $displacement;
         $this->parameters['capacity'] = $capacity;
         $this->parameters['milage'] = $milage;
     }
    //  function setDisplacement($displacement){
    //      $this->parameters['displacement'] = $displacement;
    //  }
    //  function getDisplacement(){
    //      return $this->parameters['displacement'];
    //  }
     function __isset($name){
        if(!isset($this->parameters[$name])){
            echo "{$name} is not found\n";
            return false;
        }
        return true;
     }
     function __unset($delete){
        print_r($this->parameters);
        unset($this->parameters[$delete]);
        print_r($this->parameters);
     }
     function __set($prop,$value){
        $this->parameters[$prop] = $value;
     }
     function __get($name){
         return $this->parameters[$name];
     }

     function __call($name, $arguments){
         if('run' == $name){
             if($arguments){
                echo "I am running at {$arguments[0]} to {$arguments[1]}\n";
             }else{
                echo "I am running\n";
             }
         }  
     }
     static function __callStatic($name,$arguments){
        echo "Call magic method who's name call Static\n";
     }
}
$mc = new MotorCycle("150cc","16ltr","40kmph");
// echo $mc->getDisplacement().PHP_EOL;
$mc->displacement = "170cc";
$mc->capacity = "70ltr";

echo $mc->displacement.PHP_EOL.$mc->capacity.PHP_EOL;

if(isset($mc->tiresize)){
    // echo $mc->tiresize;
    echo "Found\n";
}else{
    echo "Not Found\n";
}
   
  unset($mc->milage);

  $mc->run("40kmph","90kmph");
//   $mc->run(); 

 /// Call static magic method 
  MotorCycle::wash();

?>