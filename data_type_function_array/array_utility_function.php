
<?php

    $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

    function square($n,$m){
        printf("The square of %d is %d",$n,$n*$m);
        echo PHP_EOL;
    }

    array_walk($numbers,'square');

    echo PHP_EOL;

    function cube($a){
        return $a * $a * $a;
    }

    $newNumbers = array_map('cube',$numbers);

    print_r($newNumbers);

    foreach($newNumbers as $val){
        echo $val.PHP_EOL;
    }
         echo PHP_EOL;
    function even($n){
        return $n % 2 == 0;
    }

   $evenNumber = array_filter($numbers,'even'); /// Here 'even' is call back function

   print_r($evenNumber);
        echo PHP_EOL;

    $names = array('sakib','ayon','rakib','sabbir','foysal','shakil');

    function filterNames($s){
//        if($s[0] == 's'){
//            return $s;
//        }
        echo $s.PHP_EOL;
        return $s[2] == 'k';
    }

    $editFilterNames = array_filter($names,'filterNames');

    print_r($editFilterNames);