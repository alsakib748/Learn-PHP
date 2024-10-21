<?php 

    $info = $_POST;
    $info["message"] = "Ajax request success"; 
    echo json_encode($info,JSON_PRETTY_PRINT);

?>