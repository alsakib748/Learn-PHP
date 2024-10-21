
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
        #innerDiv1{
            background-color: cyan;
            width: 400px;
            height: 300px;

        } 
        #innerDiv2{
            background-color: bisque;
            width: 400px;
            height: 300px;

        }
        #div1 {
            width: 300px;
            height: 100px;
            background-color: lightcoral;
            margin: 0px auto;
            color: blueviolet;

        }
        #div2 {
            width: 300px;
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
                        <button class="btn btn-primary" id="btn1">Offset Click</button> <br/> <br/>
                        <div id="innerDiv1"><div id="div1"><br/><br/>This is a first Div</div></div><br/>
                        <button class="btn btn-danger" id="btn2">Offset Click</button><br/><br/>
                        <div id="innerDiv2"><div id="div2"><br/><br/>This is a second Div</div></div>
                    </div>
                    <div id="output">

                    </div>
                    <script>
                        $(document).ready(function(){
                            $("#btn1").click(function(){
                                // let str = $("#div1").position();
                                // alert("Left : "+str.left+"\n"+"Top : "+str.top+"\nRight : "+str.right);
                                $("#div1").position({left:350,top:350});
                            });

                            $("#btn2").click(function(){
                                $("#div2").position({left:300,top:300});
                                // let str = $("#div2").position();
                                // alert("Top : "+str.top+"\n"+"Left : "+str.left+"\nBottom : "+str.bottom);
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