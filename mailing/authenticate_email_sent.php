<?php

require_once("PHPMailer/Exception.php");
require_once("PHPMailer/PHPMailer.php");
require_once("PHPMailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;

$mail = new PHPMailer(true);

try{

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->SMTPDebug = 2;
    $mail->isSMTP(true);

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "ayon2465@gmail.com";
    $mail->Password = "uqysdylgwxkgbqzq";

    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom("ayon2465@gmail.com");
    $mail->addAddress("greenbirds97@gmail.com");

    $mail->isHTML(true);
    $mail->Subject = "Here is the invoice";
    $mail->Body = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, doloremque porro? A aspernatur quidem nam, ullam illum ex aliquam aut itaque dolores quia, nesciunt iste consequuntur totam voluptate vero laudantium.";
    $mail->AltBody = "Here is the lorem text from ayon2464";

    $mail->addAttachment("C:\\xampp\htdocs\\web\\mailing\\complex v.pdf");
    $mail->send();

    echo "Message has been sent successfully";
}
catch(Exception $e){
    echo "Failed ".$mail->ErrorInfo;
}

?>


