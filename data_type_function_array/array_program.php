
<?php

  $students = array(
    "Al Sakib Ayon",
    10,
    "FAll-2022-2023(Bi-Semester)",
    "43(DH)",
    3.61);
   
  echo count($students),"<br/>";  

  var_dump($students);
  echo "<br/>";

  echo $students[0]."<br/>"; 
  echo $students[1]."<br/>";
  echo $students[2]."<br/>";
  echo $students[3]."<br/>";
  echo $students[4]."<br/><br/>";

  for($i=0;$i<5;$i++){
      echo $students[$i]."<br/>";
  }

  echo "<br/><br/>-----------Initialazation Second array and operation--------------<br/><br/>";

  $companys = ["Al Sakib Ayon",0000615423,"Web Developer",35000,"HTML,CSS,Javascript,PHP,Laravel"];

  array_shift($companys);

  /// different way to insert array value .
  $companys [] = "Full Stack Web Developer";

  array_push($companys,"PYTHON Developer");

  array_unshift($companys,"Javascript Developer");

  $array_size = count($companys);


  for($j = $array_size - 1;$j >= 0;$j--){
     echo $companys[$j]."<br/>";    
  }
   
  //  array insert built-in function array_push() and array_unshift()
  //  array delete built-in function array_pop() and array_shift() 

?>