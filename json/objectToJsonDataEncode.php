<?php 
class Example{
    public $firstname = "Al Sakib";
    public $lastname = "Ayon";
    private $private;
    static $static;
    public function display(){
        echo "Display function";
    }

    public $data = array(
        "id" => "22231203028",
        "cgpa" => "3.72"
    );
}
$obj = new Example();
// $obj->firstname = "Al Sakib";
// $obj->lastname = "Ayon";
// $obj->private = "private";
// $obj->static = "static";

echo json_encode($obj);

?>