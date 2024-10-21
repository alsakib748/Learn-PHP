

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
            border: 10px solid black;
            margin:20px;
            padding: 10px;
        }
        .div12{
            border-radius: 50px;
        }
        .div13{
            color: white;
            margin: 0px auto;
        }

        .div21{
            width: 200px;
            height: 180px;
            background-color: cornflowerblue;
            border: 10px solid black;
            margin:20px;
            padding: 20px;
        }
        .div22{
            margin: 0px auto;
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
                        <button class="btn btn-primary" id="btn1">Height & Width</button><br/><br/> 
                        <div id="div1" class="div11 div12 div13"><br/>This is a first Div</div><br/>
                        <button class="btn btn-danger" id="btn2">Height & Width</button><br/><br/>
                        <div id="div2" class="div21 div22 div23 div24"><br/>This is a second Div</div>
                    </div>
                    <div id="output">
                        
                    </div>
                    <script>
                        $(document).click(function(){
                            $("#btn1").click(function(){
                                var ih = $("#div1").innerHeight();
                                var oh = $("#div1").outerHeight();
                                var iw = $("#div1").innerWidth();
                                var ow = $("#div1").outerWidth();
                                $("#output").html("Inner Height : "+ih+"<br/>"+"Outer Height : "+oh+"<br/>"+"Inner Width : "+iw+"<br/>"+"Outer Width : "+ow+"<br/>");
                            });
                            $("#btn2").click(function(){
                                let ih = $("#div2").innerHeight();
                                let oh = $("#div2").outerHeight();
                                let iw = $("#div2").innerWidth();
                                let ow = $("#div2").outerWidth();
                                $("#output").html("Inner Height : "+ih+"<br/>"+"Outer Height : "+oh+"<br/>"+"Inner Width : "+iw+"<br/>"+"Outer Width : "+ow+"<br/>");
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