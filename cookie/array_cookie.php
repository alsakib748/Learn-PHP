<?php 

// setcookie('cookie',array('sakib',28),time() + 180);
//    setcookie('datum',serialize(array('Name' => 'sakib', 'Id' => 28)), time()+300);

//    foreach(unserialize($_COOKIE['datum']) as $key => $val ){
//        echo $key." :".$val."<br/>";
//    }

     setcookie("array['name']",'habbib',time()+300);

     setcookie("array['id']",91,time()+300); 

     foreach($_COOKIE['array'] as $key => $value){
         echo $key." : ".$value."<br/>";  
     } 

?>