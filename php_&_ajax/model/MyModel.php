<?php 

class MyModel{

    

    function __construct(){
        try{
            $this->connection = new mysqli("localhost","sakib","sakib1234","earth2");
        }catch(Exception $e){
            $msg = $e->getMessage();
            $folderName = "DBErrorLog";
            if(!file_exists($folderName)){
                mkdir($folderName);
            }
            $FileName = $folderName."/ErrorLog_".data("d_M_Y").".txt";
            file_put_contents($FileName,PHP_EOL."Time:>> ".data('Y-m-d H:i A').PHP_EOL."ErrorMessage:>> ".$msg.PHP_EOL,FILE_APPEND);
            
        }
    }
}


?>