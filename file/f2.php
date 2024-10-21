<?php 

// $filename = "text.txt";
// //  $existingData = file_get_contents($filename);
// // $fp = fopen($filename,'w');
// // fwrite($fp,$existingData);
// $fp = fopen($filename,'a');
// fwrite($fp,"Mercury\n");
// fwrite($fp,"Venus\n");
// fwrite($fp,"Earth\n");
// fwrite($fp,"Universe\n");

// $datum = file_get_contents($filename);
// echo $datum;
// fclose($fp);
// echo PHP_EOL;
// // $fp = fopen($filename,'r');
// //    while($line = fgets($fp));
// //     echo $line;
// // fclose($fp);

// // $fp = fopen($filename,'r');
// // while($line = fgets($fp))
// // echo $line;
// // fclose($fp);

// // echo PHP_EOL;

// // $file = file($filename);
// // print_r($file);

// // $datum = file_get_contents($filename);
// // echo $datum;
?>
<?php 

   $filename = "C:\\xampp\\htdocs\\php\\f1.txt";

   if(is_writeable($filename)){
      $fp = fopen($filename,'w+');
      fwrite($fp,"C\n");
      fwrite($fp,"C++\n");
      fwrite($fp,"C#\n");
      fwrite($fp,"Java\n");
      fwrite($fp,"Python\n");
      fclose($fp);
   }

   if(is_readable($filename)){
     $fp = fopen($filename,'r');
     while($show = fgets($fp))
       echo $show;
     fclose($fp);
   }

?>
