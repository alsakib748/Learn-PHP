<?php 
   
    // $filename = "C:\\xampp\\htdocs\\php\\file\\text\\f3.txt";

    // $fp = fopen($filename,'r+');
    // $show = fgets($fp);
    // echo $show; 
    // fwrite($fp,"Uranus");
    // $show = fgets($fp);
    // echo $show;
    // fseek($fp,0); // rewind($fp);
    // fwrite($fp,"Moon");
    // fclose($fp);

?>
<?php 

    // $filename = "C:\\xampp\\htdocs\\php\\file\\text\\f3.txt";
    // $fp = fopen($filename,"w+");
    // fwrite($fp,"Uranus\n");
    // rewind($fp);
    // $line = fgets($fp);
    // echo $line;

?>
<?php 

$filename = "C:\\xampp\\htdocs\\php\\file\\text\\f3.txt";
$fp = fopen($filename,'a+');
while($line = fgets($fp))
echo $line;
fwrite($fp,"Uranus\n");
while($line = fgets($fp))
echo $line;
fwrite($fp,"Sun\n");
while($line = fgets($fp))
echo $line;

?>