<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
      <div class="content mt-4">  
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h5 class="text-info">Trigger Button and Show the Json Data</h5>
                <br/>
                <input type="submit" class="btn btn-info" name="submit" id="submit" />
                <div class="show-data mt-3">
                    <p id="display"></p>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
      </div>  
    </div>
</body>

<script>

    <?php 
        $data = array(
            "user name"=>"Al Sakib Ayon",
            "email"=>"ayon2465@gmail.com",
            "phone number"=>"01608566928",
            "education"=>"B.sc in CSE (Running)",
            "cgpa"=>"3.72"
        );
    ?>

    let info = <?php echo json_encode($data); ?>;

    document.getElementById("submit").addEventListener("click",function(){
        // alert(info.name);
        document.getElementById("display").innerHTML = "Name : "+info["user name"]+"<br/> Email : "+info.email+"<br/> Phone : "+info["phone number"]+"<br/> Education : "+info.education+"<br/> CGPA : "+info.cgpa;
        console.log(info);
    });

</script>

</html>