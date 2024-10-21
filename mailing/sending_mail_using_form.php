<?php

$to = '';
$subject = '';
$body = '';
$file = '';
$sendMessage = '';

if(isset($_REQUEST["to"]) && isset($_REQUEST["subject"]) && isset($_REQUEST["body"])){
   if(!empty($_REQUEST["to"]) && !empty($_REQUEST["subject"]) && !empty($_REQUEST["body"])){
       $to = filter_input(INPUT_POST,"to",FILTER_SANITIZE_EMAIL);
       $subject = filter_input(INPUT_POST,"subject",FILTER_SANITIZE_STRING);
       $body = filter_input(INPUT_POST,"body",FILTER_SANITIZE_STRING);
   }else{
       echo "Field doesn't be empty!!!<br/>";
   }  
}

require_once("PHPMailer/PHPMailer.php");
require_once("PHPMailer/Exception.php");
require_once("PHPMailer/SMTP.php");

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;

$mail = new PHPMailer(true);

try{

   $mail->SMTPDebug = SMTP::DEBUG_SERVER;
   $mail->isSMTP();
   $mail->Host = "smtp.gmail.com";
   $mail->SMTPAuth = true;
   $mail->Username = "ayon2465@gmail.com";
   $mail->Password = "uqysdylgwxkgbqzq"; 

   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
   $mail->Port = 587;

   $mail->setFrom("ayon2465@gmail.com");
  
   if(isset($_REQUEST["cc"]) && !empty($_REQUEST["cc"])){
       $cc = htmlspecialchars($_REQUEST["cc"]);
       $splitCC = explode(";",$cc);
       for($i=0;$i<count($splitCC);$i++){
          $mail->addCC($splitCC[$i]);
       }
   } 

   $mail->addAddress($to);

   if(isset($_FILES['file'])){
      for($i=0;$i < count($_FILES["file"]["tmp_name"]);$i++){
         $mail->addAttachment($_FILES["file"]["tmp_name"][$i],$_FILES["file"]["name"][$i]);
      } 
   }

   $mail->addReplyTo("ayon2465@gmail.com","Information");

   $mail->isHTML(true);

   $mail->Subject = $subject;
   $mail->Body = $body;

   if(isset($subject) && isset($to) && isset($body)){
      $mail->send(); 
      $sendMessage = "Email Send Successfully";
   }else{
      echo "must be fill up the field";
   }

}
catch(Exception $e){
    echo "Failed ".$mail->ErrorInfo;
}

?>

<pre>
    <?php 

        // // // $mail = filter_input(INPUT_POST,"cc",FILTER_SANITIZE_EMAIL);

        // $mail = htmlspecialchars($_REQUEST["cc"]);
        // // // $mail = $_REQUEST["cc"];                  

        // print_r(explode(";",$mail));

   ?>
</pre>

<!Doctype html>
<html>
   <head>
        <title>Sending mail using form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
   </head>
   <body>
        
       <div class="container">
        <h2 class="text-center mb-2 text-muted">Send mail to used form</h2>   
         <div class="row">
            <div class="col-md-3"></div>  
            <div class="col-md-6">
                <form action="" method="POST" enctype="multipart/form-data">
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">To</span>
                        <input type="email" class="form-control" name="to" placeholder="To" aria-label="To" aria-describedby="basic-addon1">
                      </div>
                      
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">CC</span>
                        <input type="text" multiple="multiple" style="height:70px;" class="form-control" name="cc" placeholder="CC" aria-label="Cc" aria-describedby="basic-addon2">
                      </div>   

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Subject</span>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" aria-label="Subject" aria-describedby="basic-addon3">
                      </div>

                    <div class="input-group">
                        <span class="input-group-text">Body</span>
                        <textarea class="form-control" style="height:200px;opacity:0.7;" name="body" aria-label="With textarea">Here a write your content</textarea>
                    </div>
                                  <br/>
                    <div class="input-group mb-3">
                        <input type="file" name="file[]" multiple="multiple" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <center><button type="submit" class="mt-2 btn btn-lg btn-warning text-muted">Send Mail</button></center>
                </form> 
                <p class="text-success text-center">
                   <?php if(isset($sendMessage)){ echo $sendMessage; }?> 
                </p>
            </div>  
            <div class="col-md-3"></div>     
         </div>
       </div>

   </body> 
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>