<?php

date_default_timezone_set("Asia/Dhaka");
require_once("../model/MyModel.php");
session_start();

class MyController extends MyModel{
    function __construct(){
        parent::__construct();
        if(isset($_SERVER['PATH_INFO'])){
            switch($_SERVER['PATH_INFO']){
                case '/index':
                    include 'views/index.php';
                break;  
                
                case '/getCountriesData':
                    $CountryData = $this->SelectData('countries');
                    echo "<pre>";
                    print_r($CountryData);
                break;    
            }
        }
        else{
?>
        <script type="text/javascript">
            window.location.href = "index";
        </script>
<?php
        }
    }
}

$obj = new MyController();

?>