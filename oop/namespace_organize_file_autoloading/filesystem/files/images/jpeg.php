<?php 

namespace CloudStorage\filesystem\files\Images;

use \CloudStorage\filesystem\files\contracts\ImageContract;
use \CloudStorage\mail\Mailer;

class Jpeg implements ImageContract{
    function getDimension(){
        (new Mailer())->sendMail();
        return "100x100";
    }        
}

?>