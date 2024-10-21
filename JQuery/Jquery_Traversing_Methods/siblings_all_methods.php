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
            border: 5px solid lightgreen;
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
        <br/>
        <div class="content mt-2">
            <div class="input">
                <div class="design">
                    <div>
                        This is a Div tag
                        <ul id="ul1">
                            This is a Ul tag
                            <li id="li1">
                                    <p>
                                        This is a P tag
                                    </p>
                            </li>
                            <h3 id="h3">This is a heading3 tag</h3>
                            <li id="li2">
                                This is a div tag
                                <h2>
                                    This is a H2 tag
                                    <p>
                                        This is a P tag
                                    </p>
                                </h2>
                            </li>
                        </ul>
                        <ul id="ul2">
                            This is ul tag
                            <li>
                                This is li tag
                                <p>This is p tag</p>
                            </li>
                        </ul>
                        <h2 id="h2">This is heading tag</h2>
                        <ul id="ul3">
                            This is ul tag
                            <li>
                                This is li tag
                                <p>This is p tag</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <br />
                <button id="btn1" class="btn  btn-info text-light ml-2">Siblings Tag</button>
                <button id="btn2" class="btn btn-warning text-light ml-2">Next Tag</button>
                <button id="btn3" class="btn btn-danger text-light ml-2">NextAll Tag</button>
                <button id="btn4" class="btn btn-secondary text-light ml-2">NextUntil Tag</button>
                <button id="btn5" class="btn btn-primary text-light ml-2">Prev Tag</button>
                <button id="btn6" class="btn btn-dark text-light ml-2">prevAll Tag</button>
                <button id="btn7" class="btn btn-success text-light ml-2">prevUntil Tag</button>
            </div>

            <div id="output">
                
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $("#ul3").siblings().css("border","8px solid coral");
            });

            $("#btn2").click(function(){
                $("p").next().css("border","3px solid coral");
            });

            $("#btn3").click(function(){
                $("#ul3").nextAll().css("border","3px solid coral");
            });

            $("#btn4").click(function(){
                $("li").nextUntil().css("border","3px solid blue");
            });

            $("#btn5").click(function(){
                $("#h2").prev().css("border","5px solid blue");
            });

            $("#btn6").click(function(){
                $("#h3").prevAll().css("border","5px solid blue");
            });

            $("#btn7").click(function(){
                $("#h3").prevUntil().css("border","5px solid blue");
            });
        });
    </script>
</body>

</html>