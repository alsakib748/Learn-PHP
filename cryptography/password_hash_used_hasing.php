<?php 

// $message = "Al Sakib Ayon";

// $password_hash = password_hash($message,PASSWORD_BCRYPT);

// echo $password_hash;

// $password = "alsakib@748";

// $hash = password_hash($password,PASSWORD_BCRYPT);

// echo $hash.PHP_EOL;

// $userInput = "alsakib@7481";

// if(password_verify($userInput,$hash)){
//     echo "Authenticated";
// }
// else{
//     echo "Access Denied";
// }

    $password = "sakib@123";

    $hash = password_hash($password,PASSWORD_ARGON2ID,['cost'=>20]);

    echo $hash.PHP_EOL;

    $userInput = "sakibs@123";

    if(password_verify($userInput,$hash)){
        echo "Authenticated";
    }
    else{
        echo "Access Denied";
    }

?>