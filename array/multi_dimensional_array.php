<?php 

$familyTree = [
    ['great grandfather','great grandmother'],
    ['grandfather','grandmother'],
    ['father','mother',['sister','brother']]
];

$familyTrees = [
    "oop" => "great grandfather, greet grandmother",
    "op" => "grandfather,grandmother",
    "fam" => "mother,father,['sibling1'=>'sister','sibling2'=>'brother']"
];

print_r($familyTree);

echo "\n\n He is my ".$familyTree[2][2][1];

print_r($familyTrees);

echo "\n\n".$familyTrees["fam"];

//echo "\n\n";

?>
