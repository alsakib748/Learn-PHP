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
        
        p {
            background-color: lightcoral;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content mt-2">

            <div class="input">
                
            </div>

            <div id="output">
                
            </div>
            <br /><br />
            <p id="w"></p>
            <p id="h"></p>
        </div>
    </div>
    <script>
        $(document).ready(function () {

            // $("#card1").resize(function(){
            //     $("#output").html("<p>Card Width : </p>"+$("#card1").width()+"<p>Card Height : </p>"+$("#card1").height());
            // });

            // $(window).resize(function () {
            //     $("#w").html("<span>Body Width : </span>" + $(window).width());
            //     $("#h").html("<span>Body Height : </span>" + $(window).height());
            // });

            $(window).resize(function(){
                // $("#output").html("<p>Window Width : </p>"+$(window).width()+"<br><br/>"+"<p>Window Height : </p>"+$(window).height());
                $("#w").html("<span>Window Width : </span>" + $(window).width());
                $("#h").html("<span>Window Height : </span>" + $(window).height());
            });
        });
    </script>
</body>

</html>