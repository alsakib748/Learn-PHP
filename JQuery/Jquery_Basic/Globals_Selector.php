<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Basic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            /// universal selector 
            $("*").css("background-color","orange");
            /// tag selector
            $("p").css("background-color","cyan").css("padding","5px").css("color","grey");
            /// id selector
            $("#third").css("background-color","yellow");
            /// class selector
            $(".four").css("background-color","lightblue");
            /// multiple selector  
            $("h1,h2,h3").css("background-color","red");
            
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="content mt-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1>This is Heading 1</h1>
                    <h2>This is Heading 2</h2>
                    <h3>This is Heading 3</h3>
                    <p>This is first P tag</p>
                    <p>This is second P tag </p>
                    <p id="third">This is third P tag</p>
                    <p class="four">This is four P tag</p>

                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</body>

</html>