<?php 
session_start([
    'cookie_lifetime'=>120
]);

$error = false;

if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == 'admin' && sha1($_POST['password']) == '6d0ebbbdce32474db8141d23d2c01bd9628d6e5f'){
        $_SESSION['loggedin'] = true; 
    }else{
        $error = true;
        $_SESSION['loggedin'] = false;
    }
} 

if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false;
    session_destroy();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<div class="container pt-2">
<h4 class="text-secondary text-center"><b>Simple Authentication Example</b></h4> 
   <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
      
      <div class="text-info"><b>
         <?php 
           
          if(isset($_POST['username']) && isset($_POST['password'])){
            if(true == $_SESSION['loggedin']){
                echo "Hello Admin, Welcome!";
            }else{
                echo "Hello Stranger, Login Below";
            }
            if($error){
                echo "<blockquote class='text-danger'>!!!Username and Password didn't match :(</blockquote>";
            }
          } 
         ?>  

      </b></div><br/><br/>  

         <div class="form-design border border-rounded bg-light shadow p-3 mb-5 bg-body rounded">
            <?php 
                //echo md5("rabbit");
                //echo sha1("rabbit");
                echo sha1("rabbit");
                if($_SESSION['loggedin'] == false){ 
            ?>  
            <form action="" method="POST">
                <label for="username" class="text-warning"><b>Username</b></label>
                <input type="text" class="form-control" name="username" placeholder="Username" /> <br/>
                <label for="password" class="text-warning"><b>Password</b></label>
                <input type="password" class="form-control" name="password" placeholder="Password" /> <br/>
                <button type="submit" class="btn btn-warning text-center text-light">Submit</button>
             </form>
             <?php
                }
                 else{
             ?>
                <form action="auth.php" method="POST">
                    <input type="hidden" name="logout" value="1" />  
                    <button type="submit" class="btn btn-warning" name="submit">Log Out</button>
                </form>
            <?php 
                 }
                 
            ?>    
         </div>

      </div>
      <div class="col-md-4"></div>
   </div>
</div>

</body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>