<?php 

// session_name('myName');

session_start([
    'cookie_lifetime' => 60 
]);

// $_SESSION['name'] = "Al Sakib Ayon";
// echo $_SESSION['name'];
// $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
// $_SESSION['counter']++;
// echo $_SESSION['counter'];
$_SESSION['name'] = "Ayon";
echo $_SESSION['name'];
// session_destroy();
// session_destroy();

?>