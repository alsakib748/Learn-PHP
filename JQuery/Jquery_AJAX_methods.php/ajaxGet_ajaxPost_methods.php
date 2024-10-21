
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Slide Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <style>
        body {
            background-color: #e1e1e182;
        }
        .input{
            width: 100%;
            height: 100%;
            margin: 0px auto;
            text-align: center;
        }
        #response{
            text-align:center;
            margin: 0px auto;
        }
    </style>
</head>

<body>
    <br/> 
    <section class="container">
        <div class="input">
            <button class="btn btn-primary ml-2" id="btn1">Ajax GET</button>
            <button class="btn btn-info ml-2" id="btn2">Ajax GET2</button>
            <button class="btn btn-danger ml-2" id="btn3">Ajax POST</button>
            <button class="btn btn-warning ml-2" id="btn4">Ajax POST2</button>
            <button class="btn btn-secondary ml-2" id="btn5">Ajax POST3</button>
            <!-- <button class="btn btn-dark ml-2" id="btn6">Ajax Error(demo)</button> -->
        </div> <br/>
        <div class="output mt-2">
            <div id="response"></div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $.get("trail.php",function(data,status){
                    alert("Data : "+data+"\n Status : "+status);
                });
            });
            $("#btn2").click(function(){
                $.get("demo.php",function(data,status){
                    alert("Data : "+data+"\nStatus : "+status);
                });
            });
            $("#btn3").click(function(){
                $.post("demo.php",function(data,status){
                    alert("Data : "+data+"\nStatus : "+status);
                });
            });
            $("#btn4").click(function(){
                $.post("trail.php",{
                    firstName: "Al Sakib",
                    lastName: "Ayon"
                    },function(data,status){
                        alert("Data : "+data+"\nStatus : "+status);
                });
            });
            $("#btn5").click(function(){
                $.post("trail.php",{
                    name: "Al Sakib Ayon",
                    email: "ayon2465@gmail.com"
                },function(data,status){
                    alert("Data : "+data+"\nStatus : "+status);
                });
            });
        });
    </script>
</body>

</html>