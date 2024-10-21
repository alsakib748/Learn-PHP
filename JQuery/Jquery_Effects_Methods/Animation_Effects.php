
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Slide Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

    </script>
    <style>
        body{
            text-align: center;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
            border-radius: 5px;
            border: 3px solid lightblue;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        #animated{
            width:100px;
            height: 100px;
            background-color: orange;
            position: relative;
            animation: myfirst 5s;
        }
        @keyframes myfirst{
            0%{
                background-color:blueviolet;
                left: 0px;
                top: 0px;
            }
            100%{
                background-color: yellow;
                left: 200px;
                top: 0px;
            }
        }
        #animation-div{
            width: 100px;
            height: 100px;
            background-color: cornflowerblue;
            border-radius: 10px;
            color: white;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            position: relative;
        }
        #animation-div2{
            width: 100px;
            height: 100px;
            background-color:hotpink;
            border-radius: 10px;
            color: white;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            position: absolute;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content mt-5">
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">
                    <!-- 
                    <div class="card" id="card-id">
                        <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_1280.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div> <br/>     -->
                    <div id="animated">

                    </div>
                    <br><br/>
                    <div class="animation-show">
                        <button id="animation-btn-id" class="btn btn-secondary">Animation</button> <br/><br/>
                        <div id="animation-div">
                            <br/>Animated
                        </div> <br/><br/>
                        <button id="animation-btn-id2" class="btn btn-primary">Animation</button> <br><br/>
                        <div id="animation-div2">
                            <br/>Animated Different Way
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $("#animation-btn-id").click(function(){
            $("#animation-div").animate({
                left: '230px',
                width: '150px',
                height: '150px',
                opacity: '0.5'
                },700);
        });
        $("#animation-btn-id2").click(function(){
            $("#animation-div2").animate({
                left: '+=100px',
                width: '+=20',
                height: '+=20',
                opacity: '0.8'
            },700).fadeToggle(700);
        });
    });
</script>

</html>
        