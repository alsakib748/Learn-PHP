<?php 
require_once("PHPMailer/PHPMailer.php");
require_once("PHPMailer/Exception.php");
require_once("PHPMailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\SMTP;

function mail_send(){
    $pm = new PHPMailer(true);

    try{
        $pm->SMTPDebug = SMTP::DEBUG_SERVER;
        $pm->isSMTP();
    
        $pm->Host = "smtp.gmail.com";
        $pm->SMTPAuth = true;
        $pm->Username = "alsakib748@gmail.com";
        $pm->Password = "buxawxsprhacixqq";
        // $pm->Password = "uqysdylgwxkgbqzq";
    
        $pm->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $pm->Port = 587;
    
        $pm->setFrom("alsakib748@gmail.com");
        $pm->addAddress("ayon2465@gmail.com");
        $pm->isHTML(true);
        $pm->Subject = "Check the email is sent or not";
        $pm->Body = "Hi, Here is the <strong>invoice</strong> from your last purchase";
        $pm->AltBody = "Here is the invoice from your last purchase";   
        
        // $pm->addAttachment("C:\\xampp\\htdocs\\web\\mailing\\complex v.pdf");
        $pm->send();
    
        echo "Message has been Sent Successfully";
        echo "<br/>Message sent successfully.Check your email now.";
    }catch (Exception $e){
        echo "Failed ".$pm->ErrorInfo;
        echo "Message doesn't sent successfully. Something found wrong";
    }
}

mail_send();

?>