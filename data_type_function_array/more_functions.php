
<?php
/// -------------------------------------------------------------------
   function serve($a = 5,$b = "Coffe"){
       echo "<span style='color:cyan;'><b> {$a} </b></span> cups <span style='color:green'><b> {$b} </b></span> have been serve<br/>";
       printf(gettype($b));
   }
/// -------------------------------------------------------------------
   function defaults(int $a ,int $b): int {
      return $a + $b;    
   } 
/// -------------------------------------------------------------------

function fact($m){
   if($m == 0){
      return 0;
   }
   else if($m == 1){
      return 1;
   }
   else{
      return fact($m-1) + fact($m-2);
   }
} 

?>