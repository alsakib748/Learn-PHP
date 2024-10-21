<?php 

class Myself{    
     public $name;
     public $id;
     public function __construct($name = "No Name",$id = "No Id"){
         $this->name = $name;
         $this->id = $id;  
     }

     function showMySelf(){
         echo "My name is {$this->name} and my id no is {$this->id}\n";
     }
}
class Carrier{

}

$m1 = new Myself("Al Sakib Ayon", 22231203028);
$m1->showMySelf();

$m2 = new Myself();
$m2->showMySelf();

?>

<?php
/*
class Myself {    
     public $name;
     public $id;

     public function __construct($name, $id) {
         // Assign the values to class properties, not local variables
         $this->name = $name;
         $this->id = $id;  
     }

     function showMyself() {
         echo "My name is {$this->name} and my id no is {$this->id}\n";
     }
}

class Carrier {

}

$m1 = new Myself("Al Sakib Ayon", 22231203021);
$m1->showMyself();
*/
?>

