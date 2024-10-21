<?php 


   $name = array("sakib","ayon","zahid","firoz","mehrab","zehad");

   $newName = array("Hridoy","Habib","Najmul");

   $connectingArray = array_splice($name,2,-1,$newName);

   print_r($connectingArray);
   print_r($name);

?>