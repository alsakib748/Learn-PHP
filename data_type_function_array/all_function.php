<?php

/// this function is check for even or odd to the given input
function evenOrOdd($n){
    if($n % 2 == 0){
       return true;
       //echo "Even";
    }
    else{
        return false;
    } 
}

/// this function is calculate the factorial number to given number.

function factorial($f){
    for($i=$f, $fact=1; $i > 1;$i--){
        $fact *= $i;
    }
    return $fact;
}

?>