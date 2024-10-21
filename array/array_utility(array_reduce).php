
<?php

    $numbers = array(1,2,3,4,5); 

    function cal($oldvalue,$newvalue)
    {
        if($newvalue%2==1)
        {
            return $oldvalue + $newvalue;
        }
        else
        {
            return $oldvalue;
        }  
    } 

    $totalCount = array_reduce($numbers, 'cal');

    echo $totalCount."\n";

    // cal(0,1) = 1
    // cal(1,2) = 3
    // cal(3,3) = 6
    // cal(6,4) = 10
    // cal(10,5) = 15

    echo count($numbers);

?>