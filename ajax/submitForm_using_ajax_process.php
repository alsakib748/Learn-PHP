<?php 

$data = $_POST;
$data["method"] = $_SERVER["REQUEST_METHOD"];
$data["message"] = "Showing Data";
echo json_encode($data,JSON_PRETTY_PRINT);

?>