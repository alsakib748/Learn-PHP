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

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 250px;
            height: 300px;
            border-radius: 5px;
            border: 3px solid lightblue;
            position: relative;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        #div1 {
            width: 200px;
            height: 200px;
            background-color: lightcoral;
            margin: 0px auto;
            color: blueviolet;
        }

        #div2 {
            width: 100px;
            height: 100px;
            background-color: lightskyblue;
            margin: 0px auto;
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content mt-2">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- <div class="card" id="card-id">
                        <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_1280.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <span>CSE Engineer</span>
                        </div>
                    </div> <br/>  -->
                    <div class="input" id="input">
                        <div id="div1"><br /><br />This is a Div1 Tag</div><br />
                        <button class="btn btn-primary" id="btn1">CSS Effects</button> <br /> <br />
                        <div id="div2"><br /><br />This is a Div2 Tag</div><br />
                        <button class="btn btn-danger" id="btn2">CSS Effects</button>
                    </div>
                    <div id="output">

                    </div>
                    <script>
                        $(document).ready(function() {
                            // $("#btn1").click(function(){
                            //     let str = $("#div1").css("color");
                            //     alert(str);
                            // });

                            // $("#btn2").click(function(){
                            //     let str2 = $("#div2").css("color");
                            //     alert(str2);
                            // });

                            $("#btn1").click(function() {
                                // $("#div1").css("border-radius","50px");
                                $("#div1").css({
                                    "border-radius": "50px",
                                    "height": "150px",
                                    "width": "150px",
                                    "transform": "translateX(50%)",
                                    "transition": "0.3s"
                                });
                            });

                            $("#btn2").click(function() {
                                $("#div2").css({
                                    "border-radius": "100px",
                                    "height": "200px",
                                    "width": "200px",
                                    "transform": "translateX(50%)",
                                    "transition": "0.3s"
                                });
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