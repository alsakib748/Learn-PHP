<?php  

require_once "inc/functions.php"; 
$filename = "C:\\xampp\\htdocs\\web\\crud\\data\\db.txt";
$info = '';
$fname = '';
$lname = '';
$id = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? 0;

if('edit' == $task){
   if(!hasPrivilege()){
      header("location: index.php?task=report");
   }
}

if($task == 'delete'){
    if(!isAdmin()){
       header("location: index.php?task=report");
      //  die();
      return;
    }
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
    if($id > 0){
       deleteStudent($id,$filename); 
       header("location: index.php?task=report");
    }
}
if('seed' == $task){
   if(!isAdmin()){
      header("location: index.php?task=report");
      // die();
      return;
   } 
    seed($filename);
    $info = "<p class='text-success'>Seeding is complete</p>";
}

if(isset($_POST['submit'])){
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['id'])){
      $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
      $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
      $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_STRING);

      if($fname != '' && $lname != '' && $id != ''){
         $result = addStudent($fname,$lname,$id,$filename);
         if($result){
            header("location: index.php?task=report");
         }else{
            //header("location: index.php?error=1");
            $error = 1;
         }   
      }else{
           header("location: index.php?task=add");
      }
   }
}    
?>

<!Doctype html>
<html>
<head> 
      <title>CRUD Project</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" type="javascript"></script> 
</head>
<body>

    <div class="container pt-1">
      <div class="row">  
        <div class="col-md-3"></div>
        <div class="col-md-6 bg-light shadow p-3 mb-5 bg-body rounded">
            <h2 class="text-center" class="text-muted">Project 2 - CRUD</h2>
            <p class="text-center" class="text-muted">A sample project to perform CRUD operations using plain files and PHP</p>
             <?php 
                 include_once('inc/templates/nav.php');
             ?> 

             <?php 
                if($info != ''){
                    echo "<p>{$info}</p>"; 
                } 
             ?>
        
            <div class="show-duplicate-report">
                <?php 
                   if(isset($error) && $error == 1){
                       //echo "<blockquote class='text-danger text-center'>!!Found a duplicate value :(</blockquote>";
                ?>
                    <blockquote class="text-danger text-center border border-rounded box-lg-shadow">!!Found a duplicate value</blockquote>

                <?php
                   }
                ?>
            </div> 

            <div class="show-report">
                <?php 
                   if($task == 'report'){
                     generateReport($filename);
                   }
                ?>
            </div>

            <div class="add-student">
              <?php
                 if($task == 'add'){
              ?>
                 <form action="index.php?task=add" method="POST">
                     <label for="firstname"><b class="text-muted" >Firstname</b></label>
                     <input type="text" class="form-control" name="fname" value="<?php if($fname){echo $fname;} ?>" /> <br/>
                     <label for="lastname" class="text-muted"><b>Lastname</b></label>
                     <input type="text" class="form-control" name="lname" value="<?php if($lname){echo $lname;} ?>" /> <br/>
                     <label for="id" class="text-muted"><b>Id</b></label>
                     <input type="number" name="id" class="form-control" value="<?php if($id){ echo $id; } ?>" /> <br/>
                     <center><button type="submit" class="btn btn-info" value="save" name="submit"><b class="text-light">SUBMIT YOUR INFORMATION</b></button></center>
                 </form>                    
              <?php
                 }    
              ?>
            </div>

        </div>
        <div class="col-md-3"></div>
      </div>   
    </div>      

<script type="text/javascript" src="assets/js/script.js"></script>    
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>