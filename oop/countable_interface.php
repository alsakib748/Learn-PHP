<?php 
class Language implements IteratorAggregate,Countable{
    private $lanName;

    function __construct(){
        $this->lanName = array();
    }

    function lanAdd($lan){
        array_push($this->lanName,$lan); 
    }

    function getIterator(){
        return new ArrayIterator($this->lanName);
    }

    function count(){
        return count($this->lanName);
    }
}

$l = new Language();
$l->lanAdd("Html");
$l->lanAdd("Css");
$l->lanAdd("Javascript");
$l->lanAdd("Php");
$l->lanAdd("Sql");

echo count($l).PHP_EOL;

foreach($l as $val){
    echo strtoupper($val).PHP_EOL;
}


?>