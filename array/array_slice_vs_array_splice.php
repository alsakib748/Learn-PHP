<?php 

$random = array(12 => 20, 18 => 28, 30 => 45, "a" => "ayon", "s" => "sakib" );

print_r($random);

$ran1 = array_slice($random,1,2,true);
$ran2 = array_slice($random,3,null,true);

print_r($ran1);
print_r($ran2);

$ran12 =  $ran1 + $ran2;

$random2 = array("j"=>"jack","d"=>"doe","z"=>"zenifer");

$finalRan = $ran1 + $ran2 + $random2;

print_r($ran12);

print_r($finalRan);

$ano = array_splice($random,2,2,$random2);

print_r($ano);

?>