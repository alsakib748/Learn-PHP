<?php 

    $numbers = array(1,2,3,4,5,6,7,8,9,10); 

    function square($n)
    {
        printf("Square of %d is %d \n",$n,$n*$n);
    }

    array_walk($numbers,'square');
    
    //print_r($numbers);

    function cube($n)
    {
        return $n * $n * $n;
    }

    $newNumbers = array_map('cube',$numbers);

    //print_r($newNumbers);
    //print_r($numbers);

    function even($n)
    {
        return $n % 2 == 0;   
    }

    $evenArray = array_filter($numbers,'even');

    print_r($evenArray);
   // print_r($numbers);

   function odd($n)
   {
      return $n % 2 == 1;
   }

   $oddArray = array_filter($numbers,'odd');

   print_r($oddArray);
   //print_r($numbers);

   $name = array("sakib","ayon","sabbir","hridoy","foysal","siam");

   function CharacterFilter($check)
   {
       return $check[0] == 's';
   } 

   $nameFilter = array_filter($name,'CharacterFilter');
   
   print_r($nameFilter);

?>