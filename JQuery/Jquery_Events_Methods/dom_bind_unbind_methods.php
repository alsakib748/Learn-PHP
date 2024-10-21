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
    <style>
        
    </style>
</head>

<body>
    <div class="container">
        <div class="content mt-2">

            <div class="input">
                <div id="para"><br/><br/>Hello This is Al Sakib Ayon</div> <br/>

                <!-- <input type="submit" class="btn btn-primary" id="btn" value="Button" /> -->
                <button class="btn btn-secondary" id="btn" >Submit</button>
            </div>

            <div id="output">

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            
            $("#para").bind("click",function(){
                $(this).css({
                    width: "200px",
                    height: "150px",
                    backgroundColor: "lightcoral",
                    color: "white",
                    borderRadius: "10px",
                    textAlign: "center",
                    transform: "rotateX(360deg)",
                    transition: "1s"
                });
                // $(this).css("background-color","lightcoral");
            });

            $("#btn").click(function(){
                    $("#para").unbind("click");
                    // alert("hello");
            });
        });
    </script>
</body>

</html>