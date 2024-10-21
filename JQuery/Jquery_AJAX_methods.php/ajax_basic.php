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
        body {
            background-color: #e1e1e182;
        }
        .input{
            margin: 0px auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <section class="container">
        <div class="input">
            <br/><br/>
            <button class="btn btn-info text-light ml-2" id="btn">Ajax Request</button>
            <button class="btn btn-primary text-light ml-2" id="btn2">Ajax Async</button>
            <button class="btn btn-warning text-light ml-2" id="btn3">Ajax JS</button>
        </div> <br/>
        <div class="output mt-2">
            
        </div>
    </section>
    <script>
        $(document).ready(function(){
            $("#btn").click(function(){
                jQuery.ajax({
                    url: "test.php",
                    type: "GET",
                    success: function(data){
                        $(".output").html(data);
                    }
                });
            });

            $("#btn2").click(function(){
                jQuery.ajax({
                    url: "test2.php",
                    type: "GET",
                    async: false,
                    success: function(data){
                        $(".output").html(data);
                    }
                });
            });

            $("#btn3").click(function(){
                jQuery.ajax({
                    url: "main.js",
                    dataType: "script"
                });
            });
        });
    </script>
</body>

</html>