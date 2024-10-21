<?php 

//   print_r(openssl_get_cipher_methods());

    // print_r(openssl_get_cipher_methods());

    // print_r(openssl_get_cipher_methods());

    // echo openssl_cipher_iv_length("aes-128-ccm").PHP_EOL;

    // echo openssl_cipher_iv_length("aes-128-cbc").PHP_EOL;
        
    // $iv_length = openssl_cipher_iv_length("aes-128-ccm");

    // $iv = openssl_random_pseudo_bytes($iv_length);

    // echo bin2hex($iv);

    // print_r(openssl_get_cipher_methods());

    // $iv_length = openssl_cipher_iv_length("aes-128-cbc");
    // // echo $iv_length.PHP_EOL;
    // $iv = openssl_random_pseudo_bytes($iv_length);
    // // echo bin2hex($iv);
    // $message = "This is a secret message";
    // $password = "secret password";

    // $encryptedMessage =  openssl_encrypt($message,"aes-128-cbc",$password,0,$iv);
    // echo $encryptedMessage.PHP_EOL;
    // echo openssl_decrypt($encryptedMessage,"aes-128-cbc",$password,0,$iv).PHP_EOL.PHP_EOL;


    // $method = "aes-128-ccm";
 
    // $iv_length2 = openssl_cipher_iv_length($method);

    // $iv2 = openssl_random_pseudo_bytes($iv_length2);

    // $text = "What the hell was that";
    // $key = "fuck youself";

    // $encryptedText = openssl_encrypt($text,$method,$key,0,$iv2,$tag);

    // echo $encryptedText.PHP_EOL;

    // echo openssl_decrypt($encryptedText,$method,$key,0,$iv2,$tag);

    $message = "Laravel Developer";
    $method = "aes-128-ccm";
    $key = "l@a#r9a%v%e&l";

    $iv_length = openssl_cipher_iv_length($method);
    $iv = openssl_random_pseudo_bytes($iv_length);

    $encryptedData = openssl_encrypt($message,$method,$key,0,$iv,$tag);
    echo $encryptedData.PHP_EOL;

    echo openssl_decrypt($encryptedData,$method,$key,0,$iv,$tag);

?>