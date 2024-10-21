<?php
include_once("config.php");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$connection){
    throw new Exception("Cannot be connect to Database");
}else{
    // $sql = "INSERT INTO tasks(task,date) VALUES('do something','2023-10-01')";
    $sql2 = "INSERT INTO tasks(task,date)VALUES('do something more','2023-10-02')";
    // $sql = "SELECT * FROM tasks";
    $result = mysqli_query($connection, $sql2);
    // while($data = mysqli_fetch_object($result)){
    //     echo "<pre>";
    //        print_r($data);
    //     echo "</pre>";
    // }
    //  mysqli_query($connection,"DELETE FROM tasks");
    // mysqli_query($connection,"DELETE FROM tasks");

    // mysqli_close($connection);
    mysqli_close($connection);
}

?>