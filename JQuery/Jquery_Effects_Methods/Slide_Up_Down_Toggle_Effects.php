
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
        #card-head{
            width: 40%;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 5px;
            text-align: center;
            border: 3px solid lightblue;
            cursor: pointer;
        }
        #panel,#panel-up,#panel-toggle{
            margin: 0px auto;
            text-align: center;
        }

        #panel1,#panel3,#panel5{
            width:300px;
            height:50px;
            border: 2px solid cadetblue;
            background-color: aquamarine;
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        #panel2,#panel6{
            width:300px;
            height: 300px;
            background-color: aquamarine;
            border: 2px solid cadetblue;
            display: none;
        }
        #panel4{
            width:300px;
            height: 300px;
            background-color: aquamarine;
            border: 2px solid cadetblue;
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
                    <div id="card-head">Card Up & Down</div>
                    <div class="card" id="card-id">
                        <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_1280.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div> <br/> 
                    <div id="panel">
                        <div id="panel1">Panel 1 To Slide Down</div>
                        <div id="panel2">Slide Down Content</div>
                    </div> <br/><br/>
                    <div id="panel-toggle">
                        <div id="panel5">Panel 3 To Slide Toggle</div>
                        <div id="panel6">Slide Toggle Content</div>
                    </div> <br/><br/>
                    <div id="panel-up">
                        <div id="panel3">Panel 2 To Slide Up</div>
                        <div id="panel4">Slide Up Content</div>
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
        $("#panel1").click(function(){
            $("#panel2").slideDown(700,function(){
                alert("Slide Down Properly");
            });
        });
        $("#panel3").click(function(){
            $("#panel4").slideUp(700,function(){
                alert("Slide Up Properly");
            });
        });
        $("#panel5").click(function(){
            $("#panel6").slideToggle(700,function(){
                alert("Slide Toggle Properly");
            });
        });
        $("#card-head").click(function(){
            $("#card-id").slideToggle(300);
        });
    });
</script>

</html>