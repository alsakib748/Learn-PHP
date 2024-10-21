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
                        <br/><br/><br/>
                        <form action="" method="GET">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" value="Al Sakib" /><br/>
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control" value="Ayon" /> <br/><br/>
                            <input type="submit" id="submitBtn" class="btn btn-info" value="submit" />
                        </form>
                    </div>
                    <div id="output">
                        
                    </div>
                    <script>
                        $(document).ready(function(){
                            $("#submitBtn").click(function(){
                                let str = $("form").serialize();
                                alert(str);
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