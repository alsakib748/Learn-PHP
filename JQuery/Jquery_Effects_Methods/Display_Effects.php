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
        .sub-content p{
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
                        <p id="p-msg">This is just p tag</p>
                        <button class="btn btn-lg btn-warning" id="pId">Show</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" id="card-id">
                        <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_1280.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Architect & Engineer</p>
                        </div>
                    </div> <br/>
                    <div class="baton">
                        <button class="btn btn-info" id="hidden">Hide Card</button>
                        <button class="btn btn-primary" id="Showed">Show Card</button>
                        <button class="btn btn-danger" id="hidden-showed">Hide & Show</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sub-content3">
                        <p id="toggle-msg">This is Showed Toggle message</p>
                        <button id="toogle-btn" class="btn btn-lg- btn-secondary">Hide & Show</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script>
        // $(document).ready(function(){
        //     $("#hidden").click(function(){
        //         $("#card-id").hide();
        //     });
        // });
        $(document).ready(function(){
            $("#hidden").click(function(){
                $("#card-id").hide(500,function(){
                    alert("Hide work properly");
                });
            });
            $("#Showed").click(function(){
                $("#card-id").show(500);
            });
            $("#pId").click(function(){
                $("#p-msg").show(1000);
            });
            $("#toogle-btn").click(function(){
                $("#toggle-msg").toggle(1000);
            });
            $("#hidden-showed").click(function(){
                $("#card-id").toggle(1000,function(){
                    alert("Toggle Work Successfully");
                });
            });
        });
    </script>
</html>