
<?php

   
    function recur($start,$end,$inc=1){
        if($start > $end){
            return;
        }
        echo $start."<br/>";

        $start += $inc;

        recur($start,$end,$inc);
    }

    recur(10,30,8);

    echo "-----------Showed the factorial number using recursive function-----------<br/>"; 

    function fact($a){
        if($a == 0){
            return 0;
        }  
        else if($a == 1){
            return 1;
        }
        else{
            return $a * fact($a-1);
        }
    }    

    printf("The factorial value is : %d<br/>",fact(5));
   
    $a = 10;
    $a = 20;

    static $b = 50;
    $b = 100;

    echo $a,",",$b;


?>