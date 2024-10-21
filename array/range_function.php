<?php 

$numbers = array();

// for($i=10;$i<=20;$i++)
// {
//     array_push($numbers,$i);
// }

//print_r($numbers);

$nums = range(10,20,2);

print_r($nums);

foreach(range(0,50,11) as $val)
{
    if($val > 0)
    echo $val."\n";
}

print_r(range(0,10));

?>