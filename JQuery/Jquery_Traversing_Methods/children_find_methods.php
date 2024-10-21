<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Slide Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        body{
            background-color: #e1e1e182;
        }
        .content {
            margin: 0px auto;
            text-align: center;
        }
        .input{
            background-color: white;
        }
        .design * {
            border: 2px solid lightgreen;
            margin: 10px;
            padding: 20px;
            /* background-color: cornflowerblue; */
            text-align: center;
            color: darkblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <br />
        <div class="content mt-2">
            <div class="input">
                <div class="design">
                    <div>
                        This is a Div tag
                        <ul>
                            This is a Ul tag
                            <li>
                                This is a Li tag
                                <h2>
                                    This is a H2 tag
                                    <p>
                                        This is a P tag
                                    </p>
                                </h2>
                            </li>
                            <div>
                                This is a div tag
                                <h2>
                                    This is a H2 tag
                                    <p>
                                        This is a P tag
                                    </p>
                                </h2>
                            </div>
                        </ul>
                    </div>
                </div>
                <br />
                <button id="btn1" class="btn btn-lg btn-info text-light ml-2">Children Tag</button>
                <button id="btn2" class="btn btn-lg btn-warning text-light ml-2">Find Tag</button>
                <button id="btn3" class="btn btn-lg btn-danger text-light ml-2">ParentsUntil</button>
            </div>

            <div id="output">
                
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            // $("#btn1").click(function(){
            //     $(".input").children().css({
            //         border:"3px solid lightcoral"
            //     });
            // });

            $("#btn1").click(function(){
                $("ul").children("li").css("border","3px solid coral");
            });

            $("#btn2").click(function(){
                $(".design div").find("*").css("border","3px solid coral");
            });
        });
    </script>
</body>

</html>