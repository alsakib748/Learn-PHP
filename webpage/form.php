<?php 
   header('X-XSS-Protection:0');
   include_once "functions.php";
?>
<!Doctypoe html>
<html>
<head>
      <title>Form Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       
</head>

<body>

    <div class="container"></div>
        <div class="row"></div>
            <div class = "col-md-4"></div>
            <div class="col-md-4">
            <?php
                $firstName = '';
                $lastName = '';
                $checked = '';
                $checkData = '';
            ?>    
            <br/>
            <h2 class="text-primary text-center text-bold">Form Design</h2> 
            <?php if(isset($_POST['fname']) && isset($_POST['lname']) && !empty($_POST['fname']) && !empty($_POST['lname'])): ?>   
              <div class="show bg-light border p-2 mb-2 shadow-lg p-3 mb-5 bg-white rounded">
                <p><b>First Name : </b><span class="text-success">
                    <?php 
                       //$firstName = htmlspecialchars($_POST['fname']); echo $firstName; 
                       $firstName = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
                       echo $firstName;
                    ?></span></p>
                <p><b>Last Name : </b><span class="text-success">
                    <?php 
                       //$lastName = htmlspecialchars($_POST['lname']); echo $lastName; 
                       $lastName = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
                       echo $lastName;
                    ?></span></p>
              </div>
            <?php endif; ?>   
            <form action="form.php" method="POST">
               <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $firstName; ?>">
               </div>
               <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $lastName; ?>">
               </div>
               <?php 
                   if(isset($_POST['check']) && $_POST['check'] == 1):
                       $checked = "checked";
                   endif;
                   if(isset($_POST['ckdata'])):
                       $checkData = filter_input(INPUT_POST,"ckdata",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                   endif;
               ?>
               <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                       <input type="checkbox" name="check" value="1" aria-label="Checkbox for following text input" <?php echo $checked; ?> >
                       Checkbox
                     </div>
                 </div>
                 <input type="text" name="ckdata" class="form-control" aria-label="Text input with checkbox" value="<?php echo $checkData; ?>" >
               </div>
               <label class="bg-dark text-light p-2">Select Some Fruits -:- </label>
               <div class="p-2">
                  <input type="checkbox" name="fruit[]" value="Orange" <?php isChecked('fruit','Orange'); ?> >
                  <label for="oranges">Orange</label><br/>
                  <input type="checkbox" name="fruit[]" value="Apple" <?php isChecked('fruit','Apple'); ?>  >
                  <label for="oranges">Apple</label><br/>
                  <input type="checkbox" name="fruit[]" value="Strawberry" <?php isChecked('fruit','Strawberry'); ?> >
                  <label for="oranges">Strawberry</label><br/>
                  <input type="checkbox" name="fruit[]" value="Banana" <?php isChecked('fruit','Banana'); ?> >
                  <label for="oranges">Banana</label><br/>
                  <input type="checkbox" name="fruit[]" value="Mango" <?php isChecked('fruit','Mango'); ?> >
                  <label for="oranges">Mango</label><br/>
               </div>

              <?php //print_r($_REQUEST); ?> <br/> 

               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class = "col-md-4"></div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>