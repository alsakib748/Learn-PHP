<?php 

$sakib = explode(", ","Id : 028, Intake : 43, Semester : Bi-Semester, Cgpa : 3.61");

$n = count($sakib);

// for($i=0;$i<$n;$i++)
//   echo $sakib[$i].", ";  
 

  $details = array("name"=>"Sakib","id"=>"28","Semester"=>"Tri-semester");

  $arrayToString = join(", ",$sakib);
  echo $arrayToString;

?>