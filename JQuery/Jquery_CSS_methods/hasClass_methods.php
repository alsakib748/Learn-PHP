

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
        .common{
            width:100%;
            height: 50px;
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
        }
        .red{
            background-color: red;
            color: white;
        }
        .green{
            background-color: green;
            color: white;
        }
        .blue{
            background-color: blue;
            color: white;
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
                        <!-- <button class="btn btn-primary" id="btn1">AddClass To Made Design</button><br/><br/> 
                        <div id="div1"><br/><br/>This is a first Div</div><br/>
                        <button class="btn btn-danger" id="btn2">AddClass To Made Design</button><br/><br/>
                        <div id="div2"><br/><br/>This is a second Div</div> -->
                        <div id="red" class="red common">Red Color</div>
                        <div id="green" class="green common">Green Color</div>
                        <div id="blue" class="blue common">Blue Color</div>

                        <button class="btn btn-danger ml-2" id="redBtn">Red Button</button>
                        <button class="btn btn-success ml-2" id="greenBtn">Green Button</button>
                        <button class="btn btn-info ml-2" id="blueBtn">Blue Button</button>
                    </div>
                    <div id="output">
                        
                    </div>
                    <script>
                        // $(document).ready(function(){
                        //     $("#btn1").click(function(){
                        //         $("#div1").addClass("div11 div12 div13");
                        //         let str = $("#div1").hasClass("div11");
                        //         alert(str);
                        //     });
                        //     $("#btn2").click(function(){
                        //         $("#div2").addClass("div21 div22 div23 div24");
                        //         let str2 = $("#div2").hasClass("div22");
                        //         alert(str2);
                        //     });
                        // });
                        $(document).ready(function(){
                            $("#redBtn").click(function(){
                                let redVal = $("#red").hasClass("red");
                                if(redVal){
                                    $(".red").fadeTo("slow",0.0).fadeTo("slow",1.0);
                                }
                            });
                            $("#greenBtn").click(function(){
                                let greenVal = $("#green").hasClass("green");
                                if(greenVal){
                                    $(".green").fadeTo("slow",0.0).fadeTo("slow",1.0);
                                }
                            });
                            $("#blueBtn").click(function(){
                                let blueVal = $("#blue").hasClass("blue");
                                if(blueVal){
                                    $(".blue").fadeTo("slow",0.0).fadeTo("slow",1.0);
                                }
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