<?php
$file = "./data/f01.txt";

if(is_readable($file)){

    $handle = fopen($file,'r');

while($line = fgets($handle)){
    echo $line;
}
echo "\n";
rewind($handle);
fseek($handle,11);
fseek($handle,-1,SEEK_END);
while($line = fgets($handle)){
    echo "-".$line;
}

fclose($handle); 

$data = file($file);
echo $data[2];
print_r($data);

echo "\n";
// $datum = file_get_contents($file);
$datum = file_get_contents($file);
echo $datum;

}

?>