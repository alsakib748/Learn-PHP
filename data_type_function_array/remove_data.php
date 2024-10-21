
<?php

   //Remove any data from associative array using unset() function.

   $student = array(
       "name" => "Al Sakib Ayon",
       "id" => 22231203028,
       "intake" => "43(DH)",
       "semester" => "Fall(2022-2023)",
       "cgpa" => 3.61
   );

   print_r($student);

   unset($student['semester'],$student['intake']);

   print_r($student);

