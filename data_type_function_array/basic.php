
<?php
 /*
     $fact = 1; 
     for($i=1;$i<=10;$i++){
         $fact = $fact * $i; 
     }
     echo "The factorial number : ".$fact;
*/
/*
    for($i=1,$j=10; $i<10, $j !=0; $i++, $j-- ){
        echo $i.".".$j."<br/>";
    }
*/
?>

<?php
/*
    $n = 6;
    for($i = $n,$fact = 1; $i > 0;$i--){
        $fact = $fact * $i; 
    } 
    printf("The %d Factorial is : %d",$n,$fact);
*/
?>

<?php
/*
    for($i=1;$i<10;$i++){
        echo $i."<br/>";
        
        if($i == 6 6 == 6 ){
           break;
           //continue;    
        } 
        
    }
*/ 
?>

<?php

    $old = 1;
    $new = 1;
    $vOld = 0; 

    for($i=1;$i<=10;$i++){
        
           echo "Loop ".$i." = ".$vOld."<br/>";
           $old = $new;
           $new = $old + $vOld;
           $vOld = $old;

    }


?>