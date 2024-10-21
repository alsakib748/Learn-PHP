<?php
     header('X-XSS-Protection:0');
?>
<?php
     $allowedType = array(
        'image/png',
        'image/jpg',
        'image/jpeg'
     );
?>
<?php
      if(isset($_FILES['photo'])){
         $totalFiles = count($_FILES['photo']['name']);
         for($i = 0;$i < $totalFiles;$i++){
            if(in_array($_FILES['photo']['type'][$i], $allowedType) != false && $_FILES['photo']['size'][$i] < 5 * 1024 * 1024){ 
                move_uploaded_file($_FILES['photo']['tmp_name'][$i],"files/".$_FILES['photo']['name'][$i]);
            }  
         }
      }
?>
<!Doctypoe html>
    <html>

    <head>
        <title>Upload Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>

    <body>

        <div class="container"></div>
        <div class="row"></div>
        <br/>
        <div class="col-md-4"></div>
        <div class="col-md-4 m-auto">    
        <h1>Form Action</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus mollitia ut repellat aliquid officiis magnam laborum qui saepe possimus facere, vero deleniti quaerat et cupiditate ducimus harum libero itaque. Ex, porro eveniet similique eius et magnam voluptatibus error modi. Distinctio exercitationem minus odio! Delectus soluta rem eius asperiores, quo aspernatur.</p>    
             <br/>
     
        <pre>
            <p>
                <?php 
                   print_r($_POST);
                   print_r($_FILES);
                ?>
            </p>
        </pre>

        <form  action="upload.php" method="POST" enctype="multipart/form-data">
             
            <label for="First_Name" class="form-label"><b>First Name</b></label>
            <input type="text" name="fname" id ="fname" class="form-control" placeholder="First Name" /><br/>
            
            <label for="Last_Name" class="form-label"><b>Last Name</b></label>
            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" /><br/>

            <label for="Photo" name="form-label"><b>Photo</b></label>
            <input type="file" name="photo[]" id="photo" class="form-control" />
            <input type="file" name="photo[]" id="photo" class="form-control" />
            <input type="file" name="photo[]" id="photo" class="form-control" />
                    <br/>
            <button type="submit" class="btn btn-primary"><b>Submit</b></button>
        </form>
      
        </div>
        
        <div class="col-md-4"></div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>

    </html>