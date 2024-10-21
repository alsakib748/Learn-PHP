
<?php

    $fruits1 = array("b"=>"banana","a"=>"apple","o"=>"orange","s"=>"strawberry","c"=>"coconat");
    $fruits2 = array("f"=>"banana","a"=>"apple","r"=>"lebu","t"=>"mango","x"=>"coconat");

    $number1 = array(4,5,44,1,78,96,12,55,45,17);
    $number2 = array(4,55,40,1,87,69,12,65,45,71);

    $intersec = array_intersect($number1,$number2);

    print_r($intersec);
    
    $fruitInter = array_intersect_assoc($fruits1,$fruits2);

    print_r($fruitInter);

    $numberDiff = array_diff($number2,$number1);

    print_r($numberDiff);

    $fruitDiff = array_diff($fruits2,$fruits1);

    $fruitDiff = array_diff_assoc($fruits2,$fruits1);

    print_r($fruitDiff);

?>