<?php 
class DistrictCollection implements IteratorAggregate{
    private $districts;
    function __construct(){
        $this->districts = array();
    }
    function add($district){
        array_push($this->districts,$district);
    }
    // function getDistrict(){
    //     return $this->districts;
    // }
    function getIterator(){
        return new ArrayIterator($this->districts);
    }
}

$dc = new DistrictCollection();

$dc->add("Dhaka");
$dc->add("Barishal");
$dc->add("Chaitagonj");
$dc->add("Rajshahi");
$dc->add("Khulna");
$dc->add("Commila");

// $_district =  $dc->getDistrict();

// // print_r($_district);

foreach($dc as $district){
   echo $district.PHP_EOL;
}

?>