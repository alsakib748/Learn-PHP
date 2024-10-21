<?php 
    session_start(); 
    $_user_id = $_SESSION['id']??0;
    if($_user_id){
        header("Location: words.php");
        die();
    }  
    include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Vocabulary Builder</title>
    <style>

    </style>
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-3"></div>
            <div class="col-md-6">
                <span class=""><i class="fa-duotone fa-s"></i></span> <span class=""></span>
                <br/><br/>
                <div class="mt-2 mb-3">
                    <h1 class="text-center text-violet display-4"><b>My Vocabularies</b></h1>
                </div>
                     <br/><br/><br/> 
                <div class="h4 text-center ">
                    <a href="#" class="text-decoration-none" id="login">Login</a> |
                    <a href="#" class="text-decoration-none" id="register">Register Account</a>
                </div>
                      <br/>   
                <div class="p-4 shadow-lg p-3 mb-5 bg-white rounded">
                   <form action="tasks.php" method="POST" id="registerFormId">
                      <h1 class="text-center text-violet text-bold">Login</h1>  
                        <fieldset>
                            <label for="nameField" class="text-violet">Email</label>
                            <input type="text" placeholder="Email" name="mail" id="nameField"><br/><br/>
                            <label for="passField" class="text-violet">Password</label>
                            <input type="password" placeholder="Password" name="password" id="nameField"><br/><br/>

                            <div class="">
                                <p class="text-danger h5"><b>
                                    <?php
                                         $status = $_GET['status']??'';
                                         if($status){
                                            echo getStatusMessage($status);
                                         }
                                    ?>
                                </b></p>
                            </div>

                            <center><input class="button-primary" name="action" id="action" type="submit" value="register"></center>
                        </fieldset>
                    </form>
                </div>

            </div>
            <div class="col-md-3"></div>

        </div>

    </div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/js/script.js" type="text/javascript"></script>
</html>