<?php 
                                                                      
    $fruits = array("b"=>"banana","a"=>"apple","o"=>"orange","s"=>"strawberry","z"=>"coconat");

    $number = array(4,5,44,1,78,96,12,55,45,17);

    $name = array("Sakib","sakib","Hridoy","mehrab","Ayon","ayon","Zahid");

    sort($name, SORT_STRING | SORT_FLAG_CASE);

    print_r($name);

    print_r($number); /// Before Sort

    sort($number, SORT_STRING);

    print_r($number);  /// After Sort 

  /*  for($i=0;$i<count($number);$i++)
    {
        echo $number[$i]."\n";
    }
  */
  /* 
   foreach($fruits as $val)
   {
       echo $val."\n";
   }
  */

?>