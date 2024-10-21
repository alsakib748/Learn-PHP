<?php 
session_start();
if(isset($_SESSION["logout"])){
   session_destroy();
   unset($_SESSION["loggedin"]);
}



?>

<!Doctype html>
<html>

<head>
    <title>Cookiejer according to cookie</title>
<style>
.container{
    width:300px;
    height:360px;
    margin: 0px auto;
    margin-top:50px;
}

.form-design{
    border: 2px solid cornflowerblue;
    padding: 10px;
    background-color:aliceblue;
}

.form-design form label{
    font-size:0.9rem;
    color:darkslateblue;
    display: block;
    padding-bottom: 10px;
}

.form-design form input{
    padding: 10px 80px 10px 10px;
    color:cornflowerblue;
    border-color: cornflowerblue;
}

.form-design form button{
    padding: 10px 20px 10px 10px;
    margin-top: 10px;
    font-size: 0.9rem;
    background-color: cadetblue;
    color:white;
}

.form-design form button:hover{
    background-color: cornflowerblue;
    color: white;
    font-size: 1rem;
}

</style>
</head>

<body>
    
   <div class="container">
<?php if(!isset($_SESSION['loggedin'])){ ?>    
       <div class="form-design">
           <form action="" method="POST">
               <label for="username">Username </label>
               <input type="text" name="username" placeholder="username" /><br/><br/>
               <label for="password">Password </label>
               <input type="password" name="password" placeholder="Password" />
               <center><button type="submit" name="submit" > Submit </button></center>
           </form>
       </div> 
   </div>     
  <?php }else{  ?>

   Hello John You are logged in <br/>

  <?php } ?>
      
<?php 

   if(isset($_POST["submit"])){
      if($_POST["username"] == "john" && $_POST["password"] == "qwerty"){
          $_SESSION["loggedin"] = 1;
          echo "successful";
      }
   }

?>

</body>


</html>