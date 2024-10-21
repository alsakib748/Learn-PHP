
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
        body{
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
        #div1{
            width: 200px;
            height: 200px;
            background-color: lightcoral;
            margin: 0px auto;
        }
        #div2{
            width: 200px;
            height: 200px;
            background-color: lightskyblue;
            margin: 0px auto;
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
                        <div id="div1"></div> <br/>
                        <div id="div2" title="Set/Get Attribute"></div> <br/>
                        <button class="btn btn-info text-white ml-3" id="btn1">Get Attribute</button> 
                        <button class="btn btn-danger text-white ml-3" id="btn2">Set Attribute</button> 
                    </div>
                    <div  id="output">
                        
                    </div>
                    <script>
                        $(document).ready(function(){
                            $("#btn1").click(function(){
                                $("#div1").attr("style","background-color:red;border-radius:50px;");
                                alert($("#div1").attr("style"));
                            });

                            $("#btn2").click(function(){
                                $("#div2").attr("style","background-color:lightgreen;border-radius:100px;position:relative:left:100px;");
                                let str = $("#div2").attr("style");
                                alert("Div2 Attribute data is : "+str);
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