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

    </script>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
            border-radius: 5px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        img {
            border-radius: 5px 5px 0 0;
        }

        .sub-content p {
            display: none;
        }

        .baton {
            display: block;
        }

        div #div1,
        #div2,
        #div3,
        #div4,
        #div5,
        #div6,
        #div7,
        #div8,
        #div9,#div11,#div22,#div33 {
            width: 80px;
            height: 80px;
            margin: 10px;
        }
        #div1 {
            background-color: aquamarine;
            display: none;
        }
        #div2 {
            background-color: blueviolet;
            display: none;
        }
        #div3 {
            background-color: cadetblue;
            display: none;
        }
        #div4 {
            background-color: cornflowerblue;
        }
        #div5 {
            background-color: fuchsia;
        }
        #div6 {
            background-color: yellowgreen;
        }
        #div7 {
            background-color: blue;
            display: none;
        }
        #div8 {
            background-color: black;
            display: none;
        }
        #div9 {
            background-color: greenyellow;
            display: none;
        }
        #div11{
            background-color: brown;
    
        }
        #div22{
            background-color: chartreuse;

        }
        #div33{
            background-color: coral;

        }
        #img1 {
            opacity: 0.5;
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="sub-content">
                        <button id="img1-fade" class="btn btn-primary">Img Fade In</button> <br /> <br />
                        <img id="img1" src="https://images.unsplash.com/photo-1491466424936-e304919aada7?auto=format&fit=crop&q=80&w=1469&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="150px" width="100%" />
                        <br /><br />
                        <button id="img1-fade-out" class="btn btn-secondary">Img Fade Out</button> <br /> <br />
                        <img id="img2" src="https://images.unsplash.com/photo-1682686580036-b5e25932ce9a?auto=format&fit=crop&q=80&w=1375&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="150px" width="100%" />
                        <br />
                        <!-- <button id="img1-fade" class="btn btn-primary">Img Fade In</button> <br /> <br />
                        <img id="img1" src="https://images.unsplash.com/photo-1491466424936-e304919aada7?auto=format&fit=crop&q=80&w=1469&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="150px" width="100%" />
                        <br/> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <div class="card" id="card-id">
                        <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_1280.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div> <br/> -->
                    <div class="fade-in-div">
                        <button id="fade-in-btn" class="btn btn-secondary">Fade In</button>
                        <div class="baton">
                            <div id="div1"></div>
                            <div id="div2"></div>
                            <div id="div3"></div>
                        </div>
                    </div>
                    <div class="fade-out-div">
                        <br />
                        <button id="fade-out-btn" class="btn btn-warning">Fade Out</button>
                        <div class="baton">
                            <div id="div4"></div>
                            <div id="div5"></div>
                            <div id="div6"></div>
                        </div>
                    </div>
                    <div class="fade-toggle-div">
                        <br />
                        <button id="fade-toggle-btn" class="btn btn-danger">Fade Toggle</button>
                        <div class="baton">
                            <div id="div7"></div>
                            <div id="div8"></div>
                            <div id="div9"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sub-content3">
                        <button id="fade-to-btn" class="btn btn-success">Fade To</button>
                        <div class="baton">
                            <div id="div11"></div>
                            <div id="div22"></div>
                            <div id="div33"></div>
                        </div>
                        <br/><br/>
                        <button id="img1-fade-to" class="btn btn-danger">Img Fade To</button> <br /> <br />
                        <img id="img3" src="https://images.unsplash.com/photo-1503327431567-3ab5e6e79140?auto=format&fit=crop&q=80&w=1528&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="150px" width="100%" />
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        /// div fade in 
        $("#fade-in-btn").click(function() {
            $("#div1").fadeIn();
            $("#div2").fadeIn("slow");
            $("#div3").fadeIn(2000, function() {
                alert("Fade In effects done");
            });
        });
        /// img 1 fade in
        $("#img1-fade").click(function() {
            $("#img1").css("opacity", "1").fadeIn(1000);
        });
        /// fade out 
        $("#fade-out-btn").click(function() {
            $("#div4").fadeOut();
            $("#div5").fadeOut("slow");
            $("#div6").fadeOut(2000);
        });
        $("#img1-fade-out").click(function() {
            $("#img2").fadeOut(1000).css("opacity", 0.5);
        });
        /// fade Toggle
        $("#fade-toggle-btn").click(function() {
            $("#div7").fadeToggle();
            $("#div8").fadeToggle("slow");
            $("#div9").fadeToggle(2000);
        });
        /// fade To toggle 
        $("#fade-to-btn").click(function(){
            $("#div11").fadeTo(0.8);
            $("#div22").fadeTo("slow",0.6);
            $("#div33").fadeTo(2000,0.4);
        });
        $("#img1-fade-to").click(function(){
            $("#img3").css("opacity","1").fadeToggle(2000);
        });
    });
</script>

</html>