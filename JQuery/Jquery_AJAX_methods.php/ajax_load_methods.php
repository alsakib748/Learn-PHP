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
            <button class="btn btn-primary ml-2" id="btn1">Ajax Load</button>
            <button class="btn btn-info ml-2" id="btn2">Ajax</button>
            <button class="btn btn-danger ml-2" id="btn3">Ajax Another Load</button>
            <button class="btn btn-warning ml-2" id="btn4">Load func: para:</button>
            <button class="btn btn-secondary ml-2" id="btn5">Load func: para:2</button>
        </div> <br/>
        <div class="output mt-2">
            <div id="response"></div>
        </div>
    </section>
    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $("#response").load("demo.php");
                // alert("hello");
            });

            $("#btn2").click(function(){
                jQuery.ajax({
                    url: "demo.php",
                    type: "GET",
                    success: function(data){
                        $("#response").html(data);
                    }
                });
            });

            $("#btn3").click(function(){
                $("#response").load("trail.php p");
            });

            $("#btn4").click(function(){
                $("#response").load("trail.php small",function(responseTxt,statusTxt,xhr){
                    if(statusTxt == "success"){
                        alert("PHP Page loaded successfully");
                    }
                    if(statusTxt == "error"){
                        alert("Error :"+xhr.status+" : "+xhr.statusText);
                    }
                });
            });

            $("#btn5").click(function(){
                $("#response").load("demo.php p",function(responseTxt,statusTxt,xhr){
                    if(statusTxt == "success"){
                        alert("Demo file loaded successfully");
                    }
                    if(statusTxt == "error"){
                        alert("Error : "+xhr.status+" : "+xhr.statusText);
                    }
                });
            });
        });
    </script>
</body>

</html>