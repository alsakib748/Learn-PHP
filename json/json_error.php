<?php 

// $json = "{'country':'বাংলাদেশ'}";

// print_r(json_decode($json,1));

// echo json_last_error_msg().PHP_EOL;

// if(json_last_error()){
//     echo json_last_error();
// }

$jsonData = "{\"country\":\"বাংলাদেশ\",\"capital\":\"ঢাকা\"}";

$jsonDataDecode = json_decode($jsonData,1);

echo $jsonData.PHP_EOL;

if(json_last_error_msg()){
    echo json_last_error_msg().PHP_EOL;
}

print_r($jsonDataDecode);

?>