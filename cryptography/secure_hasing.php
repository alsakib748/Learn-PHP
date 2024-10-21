<?php 
/// Secure Hash
/// MAC = Message Authentication Code

    $secret_password = "secret";

    $message = "This is message for you";

    $MAC_Hash = mhash(MHASH_SHA512,$message,$secret_password);

    echo bin2hex($MAC_Hash).PHP_EOL.PHP_EOL;

    $token = "confidential";

    $message2 = "Who killed the men?";

    $Secure_hash = mhash(MHASH_SHA384,$token,$message2);

    echo bin2hex($Secure_hash);

?>