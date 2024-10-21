<?php 

$datum = $_GET;
$datum['show'] = "Ajax PUT and DELETE request";
// $datum['method'] = $_SERVER['REQUEST_METHOD'];
$datum["method"] = $_SERVER["REQUEST_METHOD"];
echo json_encode($datum,JSON_PRETTY_PRINT);

?>