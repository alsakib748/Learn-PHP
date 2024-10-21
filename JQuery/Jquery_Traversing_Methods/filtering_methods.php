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
        body {
            background-color: #e1e1e182;
        }

        .container {
            /* margin: 0 auto; */
        }

        h4,
        div {
            background-color: lightgreen;
            width: 400px;
            height: 60px;
            padding: 5px;
            text-align: center;
            margin: 10px;
            /* margin: 0 auto; */
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <section class="container">
        <br /><br />
        <!-- <div class="content mt-2"> -->
        <!-- <div class="input"> -->
        <h4 class="h41">This is a Heading 2 Content</h4>
        <div>
            <label for="label">This is label 1 content</label>
        </div>
        <div>
            <p id="p1">This is p1 content</p>
        </div>
        <h4 class="h42">This is a Heading 2 Content</h4>
        <div>
            <label for="label">This is label 3 content</label>
        </div>
        <h4 class="h43">This is a Heading 2 Content</h4>
        <div>
            <p id="p2">This is p2 content</p>
        </div>
        <div>
            <label for="label">This is label 5 content</label>
        </div>
        <br />
        <button class="btn btn-primary" id="btn1">First Content</button>
        <button class="btn btn-info" id="btn2">Last Content</button>
        <button class="btn btn-secondary" id="btn3">Eq Content</button>
        <button class="btn btn-dark" id="btn4">Filter Content</button>
        <button class="btn btn-warning" id="btn5">Not Content</button>
        <!-- </div> -->
        <!-- 
            <div id="output">
                
            </div> -->
        <!-- </div> -->
    </section>
    <script>
        $(document).ready(function () {
            $("#btn1").hover(function () {
                $("div").first().css({
                    backgroundColor: "lightcoral",
                    color: "white",
                    transform: "scale(1.1)",
                    transition: "1s"
                });
            });
            // $("#btn1").click(function(){
            //     $("label").first().css({
            //         backgroundColor: "lightblue",
            //         color: "white"
            //     });
            // });
            // $("#btn2").click(function(){
            //     $("div").last().css({
            //         backgroundColor: "lightblue",
            //         color: "white",
            //         fontWeight: "bold",
            //         transform: "translateX(10px)",
            //         transition: "1s"
            //     });
            // });
            $("#btn2").mouseenter(function(){
                $("h4").last().css({
                    backgroundColor: "cyan",
                    color: "white"
                });
            });
            // $("#btn3").mouseleave(function(){
            //     $("div").eq(-2).css({
            //         backgroundColor: "blue",
            //         color: "white"
            //     });
            // });
            $("#btn3").mouseup(function(){
                $("h4").eq(-1).css({
                    backgroundColor: "red",
                    color: "white"
                });;
            });
            // $("#btn4").mousedown(function(){
            //     $("p").filter("#p1").css({
            //         backgroundColor: "yellow",
            //         color: "blue"
            //     });;;
            // });
            $("#btn4").mouseover(function(){
                $("h4").filter(".h42").css({
                    backgroundColor: "orange",
                    color: "white"
                });;
            });
            // $("#btn5").click(function(){
            //     $("h4").not(".h43").css({
            //         backgroundColor: "violet",
            //         color: "white"
            //     });;
            // });

            $("#btn5").click(function(){
                $("h4").not(".h42").css({
                    backgroundColor: "green",
                    color: "white"
                });;
            });
        });
    </script>
</body>

</html>