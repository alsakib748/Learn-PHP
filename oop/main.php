<?php 

// include "spaceship.php";
// include "bike.php";

// function __autoload($name){
//     include "{$name}.php";
// }

function autoload($name){
   if(strpos($name,"Planet_") !== false){
       $filename = str_replace("Planet_","",$name); 
       include strtolower("planets/{$filename}.php"); 
   }else{
       include strtolower("{$name}.php"); 
   }  
}

spl_autoload_register('autoload');

(new SpaceShip)->lunch();
(new Bike)->getType();
(new Mars)->Mars_Planet();

?>
