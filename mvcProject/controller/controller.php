<?php 

date_default_timezone_set("Asia/Dhaka");

// require_once(__DIR__."../model/model.php");

require_once(__DIR__."../model/model.php");

session_start();

class MyController extends Model{
    function __construct(){
        parent::__construct();
        if(isset($_SERVER['PATH_INFO'])){

            switch($_SERVER['PATH_INFO']){
                case '/index':
                    include "views/index.php";
                break;    
                case '/register':
                    include ("views/header.php");
                    include ("views/register.php");
                    include ("views/footer.php");
                    if(isset($_POST['regist'])){
                        $path = 'uploads/';
                        $extention = pathinfo($_FILES['profile']['name'],
                        PATHINFO_EXTENSION);
                        $file_name = $_POST['fname'].'_'.date('YmdHis').'.'.$extention;
                        $profile = (file_exists($_FILES['profile']['tmp_name'])) ? 
                        $file_name : null;
                    }
                    $insert_data = [
                        'fname' => $_POST['fname'],
                        'lname' => $_POST['lname'],
                        'email' => $_POST['email'],
                        'pass' => $_POST['password'],
                        'contact' => $_POST['mobile'],
                        'gender' => $_POST['gender'],
                        'address' => $_POST['address'],
                        'state' => $_POST['state'],
                        'profile' => $profile,
                        'hobbies' => implode(',',$_POST['hobbies'])
                    ];

                    $insertEx = $this->InsertData('users',$insert_data);
                    exit;
                break;
                case '/login':

                break;
                default: 

                break;
            }
        }
        else{
?>
            <script type="text/javascript">
                window.location.href='index';
            </script>
<?php
        }
    }
}

$obj = new MyController();

?>