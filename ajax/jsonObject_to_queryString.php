<?php 

$dummy = $_REQUEST;
$dummy["string"] = "Json object to Query string";
$dummy["method"] = $_SERVER["REQUEST_METHOD"];
echo json_encode($dummy,JSON_PRETTY_PRINT);

?>