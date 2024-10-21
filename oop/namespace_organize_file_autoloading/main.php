<?php 
  namespace CloudStorage;

  include_once("autoloader.php"); 

//    $obj = new \CloudStorage\mail\Mailer();

use \CloudStorage\mail\Mailer as Mailer;
use \CloudStorage\filesystem\Scanner as Scanner;
use \CloudStorage\filesystem\files\Images\Jpeg as Jpeg;

class Main{
    function __construct(){
        // (new mail\Mailer())->sendMail();
        $obj = new Mailer();
        $obj->sendMail();
        $obj3 = new Scanner();
        $obj3->scan();

        $jpeg = new Jpeg();
        echo $jpeg->getDimension();
    }
}

new Main();

?>