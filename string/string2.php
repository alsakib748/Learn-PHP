<?php 

   echo ord('A')."\n";
   echo ord('a')."\n";   
   echo PHP_EOL;
   echo ord(9);
   echo chr(13);
   echo chr(98);
   echo chr(13);
   echo chr(105);
   echo chr(13);
   echo ord(0);
   echo chr(13);
   for($i = 0;$i < 9;$i++){
       echo "$i ASCII Value = ".ord($i);
       echo PHP_EOL;
   }

?>