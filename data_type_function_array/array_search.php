
<?php

   $name = array("ayon","sakib","rakib","sakil","s" => "sabbir","foysal");
   $numbers = array(5,7,'8',9,3,4,"4" => 11,6,9);

   if(in_array(8,$numbers,true)){
       echo "The number is found";
   }else{
       echo "The number is not found";
   }

   echo PHP_EOL;


   $offset = array_search(8,$numbers);

   if($offset){
       echo "founded";
   }else{
       echo "Not founded";
   }

   echo PHP_EOL.$offset.PHP_EOL;

   $keyData = key_exists("sa",$name);

   if($keyData){
       echo "Key exists";
   }else{
       echo "Key not exists";
   }
