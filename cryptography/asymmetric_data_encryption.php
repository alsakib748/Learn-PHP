<?php 

//     $publicFilePath = __DIR__."/keys/public.pem";

//     $publicKey = openssl_get_publickey(file_get_contents($publicFilePath));
//     $message = "This is a secret message";
//     openssl_public_encrypt($message,$encryptedMessage,$publicKey);

//     echo bin2hex($encryptedMessage).PHP_EOL;

//     $privateKey = openssl_get_privatekey(file_get_contents(__DIR__."/keys/private.pem"),"sakib");

//     openssl_private_decrypt($encryptedMessage,$decryptedMessage,$privateKey);

//     echo $decryptedMessage.PHP_EOL.PHP_EOL;

// /// ========================= Different way but not secure way =====================

//     openssl_private_encrypt($message,$enc2Text,$privateKey);

//     echo bin2hex($enc2Text).PHP_EOL;

//     openssl_public_decrypt($enc2Text,$enc2decrypt,$publicKey);

//     echo $enc2decrypt;
///****************************************************************************************** */
//     $publicKeyPath = __DIR__ . '/keys/public.pem';

//     echo $publicKeyPath.PHP_EOL;

// if (file_exists($publicKeyPath)) {
//     $contents = file_get_contents($publicKeyPath);
//     echo $contents;
// } else {
//     echo "The public key file does not exist.";
// }

    $publicKey = openssl_get_publickey(file_get_contents(__DIR__."/keys/public.pem"));
    $privateKey = openssl_get_privatekey(file_get_contents(__DIR__."/keys/private.pem"),"sakib");

    $message = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    openssl_public_encrypt($message,$encryptedMessage,$publicKey);

    echo "Encrypted Code = ".bin2hex($encryptedMessage).PHP_EOL;

    openssl_private_decrypt($encryptedMessage,$decryptedMessage,$privateKey);

    echo "Decrypted Message = ".$decryptedMessage;

    /// Different way but this way is not secure or correct way;
    echo "Different Way".PHP_EOL.PHP_EOL;

    openssl_private_encrypt($message,$privateEncryptedData,$privateKey);

    echo "Encrypted Code using Private Key = ".PHP_EOL.bin2hex($privateEncryptedData).PHP_EOL.PHP_EOL;

    openssl_public_decrypt($privateEncryptedData,$publicDecryptMessage,$publicKey);

    echo "Decrypt message using public key = ".PHP_EOL.$publicDecryptMessage;

?>