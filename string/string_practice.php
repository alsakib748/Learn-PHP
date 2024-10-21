<?php 

    $name = "Ayon";

    $showName = "My name is $name \n \t I am a student.";

    //echo $name."\n";
    //echo $showName;


    $heredoc = <<<'DOE'
    hello , everyone
    how are you 
    this is $name
    DOE;

   // echo $heredoc;

   echo ord(98);
   echo chr(13);
   echo chr(65);
   echo chr(13);
   echo chr(75);
   echo chr(13);
   echo chr(48);
   echo chr(13);
   echo ord('A');
   echo chr(13);

   $details = "Sakib Ayon 01608566928 ayon2465@gmail.com";
 
   $parts = sscanf($details,"%s %s %11s %s",$fname,$lname,$mobile,$email);
   
   print_r($parts);
   echo PHP_EOL;
   echo $fname."\n";
   echo $lname.PHP_EOL;
   echo $mobile."\n";
   echo $email.PHP_EOL;

?>