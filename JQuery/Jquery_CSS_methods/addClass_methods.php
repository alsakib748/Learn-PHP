

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
            text-align: center;
        }
        .div11{
            width: 200px;
            height: 150px;
            background-color: coral;
        }
        .div12{
            border-radius: 50px;
            padding: 10px;
        }
        .div13{
            color: white;
            margin: 0px auto;
        }

        .div21{
            width: 200px;
            height: 180px;
            background-color: cornflowerblue;
        }
        .div22{
            margin: 0px auto;
            padding: 5px;
        }
        .div23{
            color: white;
            border-radius: 30px;
        }
        .div24{
            transform: translateX(100%);
            transition: 1s;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content mt-2">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="input" id="input">
                        <button class="btn btn-primary" id="btn1">AddClass To Made Design</button><br/><br/> 
                        <div id="div1"><br/><br/>This is a first Div</div><br/>
                        <button class="btn btn-danger" id="btn2">AddClass To Made Design</button><br/><br/>
                        <div id="div2"><br/><br/>This is a second Div</div>
                    </div>
                    <div id="output">
                        
                    </div>
                    <script>
                        $(document).ready(function(){
                            $("#btn1").click(function(){
                                $("#div1").addClass("div11 div12 div13");
                            });

                            $("#btn2").click(function(){
                                $("#div2").addClass("div21 div22 div23 div24");
                            });
                        });
                    </script>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
</html>