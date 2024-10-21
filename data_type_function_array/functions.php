
<?php 

   include_once "all_function.php";
   
/// --------------------------------------------------------------
    $a = 21;
    //evenOrOdd($a);
    if(evenOrOdd($a)){
       echo "Even Number<br/>"; 
    }else{
       echo "Odd Number<br/>";
    }
/// ---------------------------------------------------------------
    $l = "2";
    if(gettype($l) != "integer"){
        echo "<b style='color:red;'>Invalid value</b><br/>";
    }
    else{
       $store = factorial($l);  
       printf("The %d factorial is : %d",$l,$store);
    } 
/// --------------------------------------------------------------
    include_once "more_functions.php";
     $n = "";  
     $i = "Coffe";
     serve();
/// ----------------------------
    echo "<br/>";
    printf("The dafults Value is : %d",defaults(5,15));

?>