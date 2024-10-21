<?php 
// echo substr("Hello World",5);

   function custom_error_handler($severity,$msg,$file,$line){
       echo "Error [{$severity}]: {$msg} in {$file} on line number{$line}\n";
   }

//    trigger_error("This is an error");
//    set_error_handler('custom_error_handler');
//    echo substr([1234],2);
   function division($devident, $devisor){
       if(0 == $devisor){
          trigger_error("Cannot divide by 0");
       }else{
          return $devident / $devisor;
       }    
   }

   echo division(8,0);

?>