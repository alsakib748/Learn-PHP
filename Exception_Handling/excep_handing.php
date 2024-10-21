<?php 
/*
class Student{
    function __construct($name,$age){
        $this->name = $name;
        if($age < 4){
            throw new Exception("Too Young",405);    
        }else if($age > 35){
            throw new Exception("Too Old",450);
        }
        $this->age = $age; 
        echo $this->name.PHP_EOL;
        echo $this->age.PHP_EOL;
    }
}

try{
    $stu = new Student("Sakib",38);
    echo "It will never display\n";
}
catch(Exception $e){
   echo $e->getCode().":".$e->getMessage().PHP_EOL;
}
finally{
    echo "It will run";
}
*/

class Example{
    function divide($val1, $val2){
        $this->val1 = $val1;
        if($val2 <= 0){
            throw new Exception("You can't divisible by 0\n",405);
        }
        else if($val2 > $val1){
            throw new Exception("You can't give second number to greater than first number\n",1001);
        }
        $this->val2 = $val2;
        $val3 = ($val1 / $val2);
        echo "The divide result is : ".$val3.PHP_EOL;
    }
}

try{
    $exa = new Example();
    $exa->divide(10,50);
}
catch(Exception $e){
    echo $e->getCode()." : ".$e->getMessage();
}
finally{
    echo "it will be work if you divide valid number for example(10/5)";
}


?>