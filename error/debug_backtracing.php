<?php
function x($a){
    y($a);
}
function y($b){
   z($b*2);
}
function z($c){
   if($c < 20){
      trigger_error("Too small {$c}\n");
    //   debug_print_backtrace();
    //   print_r(debug_backtrace());
   }else{
      echo "{$c} is okey\n";
   } 
        // debug_print_backtrace();
        print_r(debug_backtrace());
}
function w($d, $e){
    x(($d+$e));
}

z(23);

w(2,3);

?>