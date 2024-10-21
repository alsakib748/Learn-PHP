<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Slide Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        body {
            background: #ececec;
        }
        .content {
            margin: 0 auto;
        }
        .input{
            width: 300px;
            margin: 0px auto;
            border: 2px solid lightblue;
            padding: 10px;
            background-color: white;
            border-radius: 10px;
        }
        #unameOutput{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content mt-2">
            
            <div class="input">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" id="fname" class="form-control" /><br/>
                <!-- <button class="btn btn-sm btn-primary" id="btn1">First Name Submit</button><br/><br/> -->
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control" /><br/>
                <!-- <button class="btn btn-sm btn-info" id="btn2">Last Name Submit</button><br/><br/> -->
                <label for="uname" class="form-label">User Name</label>
                <input type="text" name="uname" id="uname" class="form-control" /><br/>
                <!-- <button class="btn btn-sm btn-warning" id="btn2">User Name Submit</button><br/> -->
            </div>

            <div class="output">
                <p id="fnameOutput"></p>
                <p id="lnameOutput"></p>
                <p id="unameOutput"></p>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){

            $("#fname").blur(function(){
                $("#fname").css("border","3px solid red");
            });
            
            $("#lname").focus(function(){
                // $("#lname").css("background-color","blue");
                $("#lname").css("border","3px solid red");
            });

            // $("#uname").select(function(){
            //     $("#unameOutput").text("You entered the select content").show().fadeOut(3000);
            // });
            $("#uname").select(function(){
                $("#unameOutput").text("You are selected the input content").show().css({
                    color: "lightblue",
                    fontWeight: "bold"
                }).fadeOut(3000);
            });
        });
    </script>
</body>
</html>