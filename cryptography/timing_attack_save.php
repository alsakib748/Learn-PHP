<?php 

$password = "Sakib@12349876";

$hash_password = hash("sha1",$password);

// echo $hash_password;

$userInputHash = hash("sha1",$_POST["password"]);

/// Possible to  Timing Attack 
if($hash_password == $userInputHash){
    echo "Password Matches";
}

/// Not Possible to Timing Attack
if(hash_equals($hash_password,$userInputHash)){
    echo "Password Matches";
}

/// hash_equals() ... hash_equals().... hash_equals();

?>