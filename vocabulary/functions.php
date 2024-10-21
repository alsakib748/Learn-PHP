<?php
include_once ("config.php");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$connection){
    throw new Exception("Database didn't connect");
}

function getStatusMessage($statusCode = 0)
{
    $status = [
        "0" => '',
        "1" => "Duplicate Email Entry",
        "2" => "Email & Password is empty",
        "3" => "User create Successfully",
        "4" => "Email and Password didn't match",
        "5" => "Email and Password doesn't exist"
    ];
    return $status[$statusCode];
}

function getWords($user_id,$search=null){
    global $connection;
    if($search){
        $query = "SELECT * FROM words WHERE user_id = '{$user_id}' AND word LIKE '{$search}%' ORDER BY word"; 
        
    }else{
        $query = "SELECT * FROM words WHERE user_id = {$user_id} ORDER BY word ASC";
    }
    $result = mysqli_query($connection, $query);
    $data = [];
    while($_data = mysqli_fetch_assoc($result)){
        array_push($data,$_data);
    }
    return $data;
}

?>