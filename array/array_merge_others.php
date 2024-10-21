
<?php 

   $name1 = array("sakib","ayon","mehrab","zahid","firoz","zehad","ramim");

   $nameP1 = array_slice($name1,1,3);
   $nameP2 = array_slice($name1,4);

   print_r($nameP1);
   print_r($nameP2);

   $merged = array_merge($nameP1,$nameP2);

   print_r($merged);

   $mergedAnotherWay = $nameP1 + $nameP2;

   print_r($mergedAnotherWay,true);

?>