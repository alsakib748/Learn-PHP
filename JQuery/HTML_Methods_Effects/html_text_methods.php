
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
        .html-content button:hover,button:active{
            color:red;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="content mt-2">
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">

                    <div class="card" id="card-id">
                        <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_1280.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <p>Computer Science & Engineering</p>
                        </div>
                    </div> <br/> 
                    
                    <div class="html-content">
                        <button id="html-effects" class="btn btn-primary">Show HTML Content</button> <br/><br/>
                        <p></p>
                        <p id="p-content">This is a first p tag</p>
                        <p>This is a second p tag</p>
                        <p>This is a last p tag</p>
                        <div id="show">

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
        // $("#html-effects").click(function(){
        //     let store = $("p:first").text();
        //     $("p:last").html(store);
        // });
        $("#html-effects").click(function(){
            $("p:first").text("This is a Al Sakib Ayon");
        });
    });
</script>

</html>