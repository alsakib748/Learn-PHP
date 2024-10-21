
<?php
     include_once("f_select_functions.php");
     $proLanguage = ["c","C++","Php","python","java","javascript"];
?>

<!Doctype html>
<html lang="en">
<head>

    <title>HTML Webpage connected to PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
    <script type="javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 class="text-secondary text-center"><b>Select/Dropdowns</b></h3>
            <small class="text-muted text-justify"><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur beatae
                    consequuntur deserunt distinctio eligendi enim esse, exercitationem maiores natus necessitatibus
                    nulla numquam obcaecati omnis pariatur quasi repellendus suscipit temporibus vero voluptas voluptatum.
            </b></small> <br/><br/>
             <?php

//                   if(isset($_REQUEST["language"]) && count($_REQUEST['language']) > 0){
//                       $selectedLanguage = $_REQUEST["language"];
//                       $value = join(", ",$selectedLanguage);
//                       $valueCap = ucwords($value);
//                       //echo count($selectedLanguage);
//                       //if(count($selectedLanguage) > 0 ){
//                          echo "<p>You have Selected : ".$valueCap."</p>";
//                      // }
//                   }

                     // $selectedLanguage = isset($_REQUEST["language"]) && count($_REQUEST["language"]) > 0 ? $_REQUEST["language"]:array();
                     // $selectedLanguage = $_REQUEST["language"] ?? array();

                     $selectedLanguage = filter_input(INPUT_POST,"language",FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                     if(is_array($selectedLanguage)){
                        // printf(join(", ",$selectedLanguage)
                         $result = join(", ",$selectedLanguage);
                         echo "<p>You have selected : ".ucwords($result)."</p>";
                     }else{
                         $result = '';
                     }

                   //  echo "<p>You have selected : ".join(",", $selectedLanguage)."</p>";
                   // echo join(",",$selectedLanguage);

//                 if(count($selectedLanguage) > 0){
//                     echo "<p>You have selected : ".join(",",$selectedLanguage)."</p>";
//                 }

//               if( isset($_REQUEST["language"]) && $_REQUEST["language"] != '' ){
//                  echo "<p>You have selected : ".ucwords(filter_input(INPUT_POST,'language',FILTER_SANITIZE_STRING))."</p>";
//               }
            ?>
            <form action="form_select.php" method="POST">
                <select class="form-select" style="height:150px;" name="language[]" id="langu" multiple>
                    <option value="" disabled selected>Select your programming language</option>
                    <?php displayOptions($proLanguage,$selectedLanguage); ?>
                </select><br/>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
           </form>
        </div>
        <div class="col-md-3">
            <?php
              // echo count("language");
            ?>
        </div>
    </div>
</div>

</body>

</html>



