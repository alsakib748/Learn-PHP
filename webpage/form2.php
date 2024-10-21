<?php
header('X-XSS-Protection:0');
include_once "form2_function.php";
$language = ["html","css","javascript","php","python","java"];
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
        <div class="col-md-4"></div>
        <center>
        <div class="col-md-4">    
        <h1>Form Action</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus mollitia ut repellat aliquid officiis magnam laborum qui saepe possimus facere, vero deleniti quaerat et cupiditate ducimus harum libero itaque. Ex, porro eveniet similique eius et magnam voluptatibus error modi. Distinctio exercitationem minus odio! Delectus soluta rem eius asperiores, quo aspernatur.</p>    
             <br/>
        <p>
            <?php 
              
                //$selectLanguage = isset($_POST['language']) ? $_POST['language'] : array('') ; //filter_input(INPUT_POST,'language',FILTER_SANITIZE_STRING);
                //$selectLanguage = $_POST['language'] ?? array('') ;
                $selectLanguage = filter_input(INPUT_POST,'language',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                if($selectLanguage != NULL){
                    if(count($selectLanguage) > 0){
                        echo "You have selected : ".join(", ",$selectLanguage); 
                     }  
                }
        
            ?>
        </p>
     
        <form action="form2.php" method="POST">
            <select name="language[]" class="form-select p-2 mt-2 br-1 text-bold " aria-label="Default select example" multiple>
                <option class="bg-secondary" disabled selected>Open this select menu</option>
                <?php displayOptions($language,$selectLanguage); ?>
            </select>
                    <br/></br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </center>
        <div class="col-md-4"></div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>

    </html>