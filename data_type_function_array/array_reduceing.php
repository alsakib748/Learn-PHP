
<?php

    $numbers = array(1,2,3,4,5,6);

    function sum($prev,$next){
        if($next % 2 == 0){
           return $prev + $next;
        }
        return $prev;
    }

    $reduceNumbers = array_reduce($numbers,'sum',0);

    print_r($reduceNumbers);


