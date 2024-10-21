
<?php

class Model{
    protected $connection = '';
    protected $servername = "localhost";
    protected $username = "sakib";
    protected $password = "sakib1234";
    protected $db = "mvc";

    function __construct(){
        mysqli_report(MYSQLI_REPORT_STRICT);
        try{
            $this->connection = new mysqli($this->servername,$this->username,$this->password,$this->db);
        } catch(Exception $ex){
            echo "Connection Failed : ".$ex->getMessage();
            exit;
        }
    }

    function InsertData($tbl,$data){
        $clms = implode(',',array_keys($data));
        $vals = implode("','",$data);
        $sql = "insert into $tbl ($clms) values ('$vals')";
        echo $sql;
    }

}

?>