

<?php
include_once "scrambler_function.php";
$task = 'encode';
if(isset($_GET['task']) && $_GET['task'] != ''){
    $task = $_GET['task'];
} 
$original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if('key' == $task){
    $key_original = str_split($key);
    shuffle($key_original); 
    $key = join(' ',$key_original);
}
else if(isset($_POST['key']) && $_POST['key'] != ''){
   $key = $_POST['key'];
}

$scrambledData = ''; 
if('encode' == $task){
    $data = $_POST['data']??'';
    if($data != ''){
        $scrambledData = scrambleData($data,$key);
    }
}

if('decode' == $task){
    $data = $_POST['data']??'';
    if($data != ''){
        $scrambledData = decodeData($data,$key);
    } 
}

?>

<!Doctype html>
<html>
 
<head>
     <title>Scrambler</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>

<div class="container mt-1">
   <div class="row">
       <div class="col-md-3"> </div>
       <div class="col-md-6"> 
           <h2>Data Scrambler</h2>
           <p>Use this application to scramble your data</p>
           <div class="">
              <a href="/scrambler.php?task=encode" >Encode | </a>
              <a href="/scrambler.php?task=decode" >Decode | </a>
              <a href="/scrambler.php?task=key" >Generate key</a>
           </div>
           <br/>
          <form method="POST" action="scrambler.php<?php if('decode' == $task){ echo "?task=decode";} ?>">
              <div class="">
                  <label for="key"><b>Key</b></label>
                  <input type="text" class="form-control" name="key" id="key" placeholder="key" <?php displaykey($key); ?> />
              </div>
              <br/>
              <div class="">
                 <label for="Data"><b>Data</b></label>
                 <textarea class="form-control" style="height:150px;">
                    <?php 
                        if(isset($_POST['data'])){
                            echo $_POST['data']; 
                        }
                    ?>
                 </textarea>
              </div>
              <br/>
              <div class="">
                 <label for="Data"><b>Result</b></label>
                 <textarea class="form-control" style="height:150px;"> 
                    <?php 
                        echo $scrambledData;
                    ?>
                 </textarea>
              </div>
              <br/>
              <button type="submit" class="btn btn-success">Do It For Me</button>
          </form> 

       </div>
       <div class="col-md-3"> </div>
   </div>
</div>    

</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>