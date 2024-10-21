<?php 
session_start();
include_once("config.php");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
mysqli_set_charset($connection,"utf8");
$action = $_POST['action'] ?? '';
$status = 0;
if(!$connection){
     throw new Exception("Database didn't connect");
}
else{  
    if ('register' == $action) {
         $email = $_POST['mail']??'';
         $password = $_POST['password']??'';
         // $duplicateEmailCheck = "SELECT email FROM users WHERE email = '{$email}'";
         // $resultFound = mysqli_query($connection,$duplicateEmailCheck);
         // $foundedCheck = mysqli_num_rows($resultFound);  
         if($email && $password){
             $hashPassword = password_hash($password,PASSWORD_BCRYPT);
             $insertQuery = "INSERT INTO users (email,password) VALUES('{$email}','{$hashPassword}')";
             mysqli_query($connection,$insertQuery);
            if(mysqli_error($connection)){
                $status = 1;
               //  header("Location: index.php?status={$status}");
             }
             else{
                $status = 3;
             }
         }else{
            $status = 2;
         }
         header("Location: index.php?status={$status}");
     }
     else if('login' == $action){
         $email = $_POST['mail']??'';
         $password = $_POST['password']??'';
         if($email && $password){
             $findingDataQuery = "SELECT id,email,password FROM users WHERE email = '{$email}'";
             $result = mysqli_query($connection,$findingDataQuery);
             if(mysqli_num_rows($result) > 0){
                 $data = mysqli_fetch_assoc($result);
                 $_password = $data['password'];
                 $_id = $data['id'];
                 if(password_verify($password,$_password)){
                     $_SESSION['id'] = $_id;
                     header("Location: words.php");
                     die();
                 }
                 else{
                     $status = 4;
                 }
             }
             else{
                 $status = 5;
             }
         }
         else{
             $status = 2;    
         }
         header("Location: index.php?status={$status}");
     }
     else if("addword" == $action){
        $word = $_POST['word']??'';
        $meaning = $_POST['meaning']??'';
        $user_id = $_SESSION['id']??0;
        // echo $word."<br/>";
        // echo $meaning."<br/>";
        // echo $user_id."<br/>";
        // die();
        if($word && $meaning && $user_id){
            $query = "INSERT INTO words(user_id,word,meaning) VALUES ('{$user_id}','{$word}','{$meaning}')";
            mysqli_query($connection, $query);
        }
        header("Location: words.php");
     }

}



?>