
<?php
    /// call by value
//    $program = array("Hello","World");
//    $newProgram = $program;
//
//    $newProgram['0'] = "Guys";
//
//    print_r($program);
//    print_r($newProgram);

    /// call by reference

    $person = array("name","designation");

//    $newPerson = &$person;
//
//    $newPerson[1] = "id";

    //print_r($person);
    //print_r($newPerson);

   function callByValue($person){
       $new = &$person;
       $new['1'] = $new['1']."Salary";
       print_r($person);
       print_r($new);
   }

   callByValue($person);