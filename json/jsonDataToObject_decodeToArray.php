<?php

class Example{
    public $name = "Al Sakib";
    public $id = "22231203028";

    public $array = array(
        "university"=>"BUBT",
        "cgpa"=>"3.72" 
    );
}

$obj = new Example();

$jsonEncodeData = json_encode($obj,JSON_PRETTY_PRINT);

echo $jsonEncodeData.PHP_EOL.PHP_EOL;

/// stdClass Object
// $jsonDecodeData = json_decode($jsonEncodeData,false);

// print_r($jsonDecodeData);

// stdClass object access way
// echo $jsonDecodeData->name.PHP_EOL;
// echo $jsonDecodeData->array->university.PHP_EOL;
// echo $jsonDecodeData->array->cgpa;

    $jsonDecodeData = json_decode($jsonEncodeData,true);

    print_r($jsonDecodeData);

    echo $jsonDecodeData["name"].PHP_EOL;
    echo $jsonDecodeData["id"].PHP_EOL;
    echo $jsonDecodeData["array"]["university"].PHP_EOL;
    echo $jsonDecodeData["array"]["cgpa"];

?>