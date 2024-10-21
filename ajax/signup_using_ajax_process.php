<?php 

$info = $_POST;
$info["method"] = $_SERVER["REQUEST_METHOD"];
echo json_encode($info,JSON_PRETTY_PRINT);

?>