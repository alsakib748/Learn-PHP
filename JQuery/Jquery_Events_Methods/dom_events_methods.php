<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Slide Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        body {
            background: #ececec;
        }

        .content {
            /* margin: 0 auto; */
        }
        .input{
            /* margin: 0px auto; */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content mt-2">

            <div class="input">
                <iframe id="frame" src="https://www.learnvern.com/" width="100%" height="400px" ></iframe>
            </div>

            <div id="output">
                
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            // $("#frame").on('load',function(){
            //     alert("loaded...");
            // });
            $("#frame").on("unloadS",function(){
                alert("unloaded...");
            });
        });
    </script>
</body>

</html>