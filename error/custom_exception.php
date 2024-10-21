<?php 
$person = [
    "name"=>"sakib",
    "id"=>"22231203028",
    "age"=>"19",
    "sex"=>"M"
];
function processMaternityLeave($person){
    if('F' == $person['sex']){
        echo "processed";
    }
    else{
        throw new GenderMismatchException($person);
    }
    if(20 > $person['age']){
        throw new Exception("Too young");  
    }
    else{
        echo "Processed age";
    }  
}
class GenderMismatchException extends Exception{
    private $person;
    function __construct($person){
        $this->person = $person;
        parent::__construct("Gender Mismatch\n"); 
    }
    function getDetailedMessage(){
        echo "Gender Mismatch for person with Id {$this->person['id']}\n";
    }   
}
try{
    processMaternityLeave($person);
}
catch(GenderMismatchException $e){
   echo $e->getMessage();
   $e->getDetailedMessage();
}
catch(Exception $e){
   $e->getMessage();
}
?>