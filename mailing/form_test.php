<?php 

$to = "alsakib748@gmail.com";
$from = "ayon2465@gmail.com";
$subject = "Email send test";
$body = "A quick brown fox jumps over the lazy dog";
$header = "From: {$from}\r\n";

if(mail($to,$subject,$body,$header)){
    echo "Successfully";
}
else{
    echo "Unseccessfully";
}

?>