<?php
session_start();
$_ACCESS = $_SESSION['id']??0;
if(!$_ACCESS){
    header("Location: index.php");
    die();
}
include_once("config.php");
include_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
<style>
.fa-language{
    font-size:50px;
    color:#557A95;
}    
</style>    
</head>
<body>
    <!-- Container div Start -->
    <div class="container">
        <!-- row class start  -->
        <div class="row">
            <!-- col-md-3 start -->
            <div class="col-md-3">
                <div class="sidenav">
                    <h1 class="text-info"><b>Menu</b></h1> <br/><br/>
                    <ol>
                        <li><a href="#" class="menu-item" data-target="words">All Words</a></li>
                        <li><a href="#" class="menu-item" data-target="wordform">Add new Words</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ol>
                </div>
            </div>
            <!-- col-md-3 end -->
            <!-- col-md-9 start -->
            <div class="col-md-9">
                <div class="mainContent">
                    <br/><br/>
                    <center>
                        <span><i class="fa-solid fa-language"></i></span>
                    </center>
                    <br /><br /><br />
                    <div class="heading text-center">
                        <h1 class="text-info"><b>My Vocabularies</b></h1>
                    </div>
                    <br/><br/><br/>
                    <div class="content bg-light shadow-lg p-3 mb-5 bg-body-tertiary rounded wordsc helement" id="words">
                        <div class="form-design clearfix p-2">
                            <div class="dropdown float-left" >
                              <div class="alphabets">  
                                <select id="alphabets" >
                                    <option value="All">All Words</option>
                                    <?php for($k='A';$k <= 'Z';$k++){ ?>  
                                        <option value="<?php echo $k ?>"> <?php echo $k."#"; ?> </option>
                                    <?php 
                                       if($k == 'Z')
                                       break; 
                                    } 
                                    ?>   
                                </select>
                              </div>
                            </div>
                            <div class="float-right">
                              <form action="words.php" method="POST">  
                                  <input type="text" name="search" id="search" placeholder="" /><br/><br/>
                                  <button class="btn btn-secondary" name="submit" >Search</button>
                              </form>  
                            </div>
                        </div>
                          <hr style="color:grey;" />
                        <div class="content-text">
                            <table class="table words">
                                <thead class="thead">
                                    <tr>
                                        <th>Word</th>
                                        <th>Definition</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                  <?php
                                    if(isset($_POST['submit'])){
                                        $searchText = $_POST['search'];
                                        $words = getWords($_ACCESS,$searchText);
                                    }else{
                                        $words = getwords($_ACCESS);
                                    }
                                     
                                    $length = count($words);
                                     if($length > 0){
                                       for($i = 0;$i < $length;$i++){ 
                                  ?>
                                    <tr>
                                        <td><?php echo $words[$i]['word']; ?></td>
                                        <td><?php echo $words[$i]['meaning']; ?></td>
                                    </tr> 
                                  <?php } } ?>   
                                </tbody>
                            </table>
                         </div>  
                    </div>
                  <div class="content bg-light shadow-lg p-3 mb-5 bg-body-tertiary rounded formc helement" id="wordform" style="display:none;">      
                           <form action="tasks.php" method="POST">
                              <h4 class="text-center text-info h2"><b>Add New Word</b></h4>
                              <fieldset>
                                  <label for="word" class="text-violet">Word</label>
                                  <input type="text" name="word" placeholder="Word" class="h5" id="word"><br/><br/>
                                  <label for="Meaning" class="text-violet">Meaning</label>
                                  <textarea placeholder="Meaning" name="meaning" id="Meaning" class="h5" rows="10"></textarea>  
                                  <input type="hidden" name="action" value="addword" />
                                  <input class="button-primary" type="submit" value="Add Word">
                              </fieldset>
                           </form> 
                  </div>

                </div>
            </div>
            <!-- col-md-9 end -->
        </div>
        <!-- row class end -->
    </div>
    <!-- Container div End -->

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/js/script.js" type="text/javascript"></script>

</html>