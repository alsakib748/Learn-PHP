<?php
session_start();

// Rest of your code...

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" type="javascript"></script> 

<div style="">

<div class="pt-2 pb-3">

  <span class="float-left">  
    <a href="../crud/index.php?task=report" class="bg-info p-2 text-light text-decoration-none hover-overlay ripple shadow-1-strong rounded"><b>All Students</b></a>
<?php  if(hasPrivilege()): ?>
    | <a href="../crud/index.php?task=add" class="bg-warning p-2 text-light text-decoration-none hover-overlay ripple shadow-1-strong rounded">
        <b>Add New Student</b>
    </a>
<?php endif; ?>
<?php if(isAdmin()): ?>
      | <a href="../crud/index.php?task=seed" class="bg-secondary p-2 text-light text-decoration-none hover-overlay ripple shadow-1-strong rounded">
             <b>Seed</b>
        </a>
<?php endif; ?> 
  </span>

  <span class="float-right">
<?php 
    if(!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']):
?>
        ||||| <a class="bg-success p-2 text-light text-decoration-none hover-overlay ripple shadow-1-strong rounded" href="auth.php">Log in</a> 
<?php 
    else: 
?>
        ||||| <a class="bg-danger p-2 text-light text-decoration-none hover-overlay ripple shadow-1-strong rounded" href="auth.php?logout=true">
            Log Out (<?php echo $_SESSION['role']; ?>) 
        </a>
<?php 
    endif;
?>   
         
  </span>   

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
