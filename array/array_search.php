
<?php 

   $number = array(4,'7',8,96,8,44,12,8,24,87);
   $fruits = array("b"=>"banana","a"=>"apple","o"=>"orange","s"=>"strawberry","z"=>"coconat");

   if(in_array('7',$number,true))
   {
      echo "Data is found";
   }
   else
   {
      echo "Data is not found";
   }

   $offset = array_search(8,$number,true);

   echo "\n".$offset;

   if(key_exists("c",$fruits))
   {
      echo "\nThe Key Is found";
   }
   else
   {
      echo "\nThe Key is not found";
   }

?>