
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
        html{
            /* scroll-behavior: smooth; */
            scroll-behavior: smooth;
        }
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
        .head-2{
            position: fixed;
            top: 5px;
            left: 5px;
        }
        #Btn4{
            position: fixed;
            right: 10px;
            bottom: 10px;
        }
        #Btn2{
            position: fixed;
            right: 150px;
            bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content mt-2">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card" id="card-id">
                        <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_1280.jpg" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>John Doe</b></h4>
                            <span>CSE Engineer</span>
                        </div>
                    </div> <br/> 
                    
                    <div class="input" id="input">
                        <h2 class="text-muted text-bold head-2">Scroll Top to the Content</h2>
                        <p>This is p tag to check clone method</p>
                        <p>This is another p tag to check clone method</p>
                        <h2 class="text-primary">Md.Al Sakib Ayon</h2>
                        <button class="btn btn-info text-muted text-bold ml-2" id="Btn1">Clone Content</button>
                        <button class="btn btn-warning text-muted text-bold ml-2" id="Btn2">Move Card</button>
                        <button class="btn btn-danger text-light text-bold ml-2" id="Btn3">Clone Heading</button>
                            
                        <button class="btn btn-secondary text-light text-bold ml-2" id="Btn4">Scroll Top</button>
                    </div>
                    <div id="output">
                        
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $("#Btn1").click(function(){
            // $("p").clone().appendTo("body");
            $("p").clone().appendTo("#output");
        });
        $("#Btn2").click(function(){
            $("#card-id").css("display","block").clone().appendTo("#output");
        });
        // $("#Btn2").click(function(){
        //     $(".card").animate({left:"+=300"},1000);
        // });
        $("#Btn3").click(function(){
            $("h2").clone().appendTo("#output");
        });
        $("#Btn4").click(function(){
            // let position = $("html").scrollTop();
            // alert("Scroll Top position is "+position+" px");
            $("html").scrollTop(0);
            // $("html").scrollLeft(0);
        });
    });
</script>
</html>