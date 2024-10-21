<?php

  $name = "Sakib";
  $message = "My name is $name \n \t new line";

  //echo $name."\n";
  //echo $message;

  $heredoc = <<<'EOD'
  
  new data
  my name is $name \t \t \n
  bubt

  EOD;
 
  echo $heredoc;


?>