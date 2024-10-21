
<?php 
/*
   $string = "A quick brown Brown fox jumps over the lazy dog";

   $string_replaced = str_replace("fox","cat",$string);

   echo $string_replaced.PHP_EOL;

   $string_replace = str_ireplace("Brown","red",$string,$count);
   echo $string_replace.PHP_EOL;

   echo PHP_EOL.$string.PHP_EOL;

   echo "Total Replacement : ".$count;
*/

  $string = "A quick brown fox jumps over the lazy dog";
  $multi_replace = str_replace(array("brown","fox","dog"),"fuck",$string,$count);   
  echo $string.PHP_EOL;
  echo $multi_replace.PHP_EOL;
  echo "Total Replacement : ".$count;                  

?>