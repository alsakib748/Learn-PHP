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
            background: #ececec;
        }

        .content {
            margin: 0 auto;
        }

        .input {
            width: 250px;
            font-family: 'Times New Roman', Times, serif;
            margin: 0px auto;
        }

        #output {
            text-align: center;
        }

        .input select {
            height: 140px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content mt-2">

            <div class="input">
                <select class="form-select" multiple id="choice">
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>JS</option>
                    <option>PHP</option>
                    <option>SQL</option>
                    <option>PYTHON</option>
                    <option>JAVA</option>
                </select> <br /><br />

                <form action="Javascript:alert('Message sent successfully')">
                    <input type="text" name="firstname" class="form-control" id="fname" /> <br />
                    <button class="btn btn-info" id="btn1">Submit</button>
                </form>
            </div>
            <br /><br />
            <div id="output">
                <!-- <p>You have Selected : <span></span></p> -->
                <p></p>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {

            $("#choice").change(function() {
                $("#output p span").text($("#choice").val());
            });

            // $("#fname").change(function() {
            //     $("#output p").text($("#fname").val());
            // });
            $("form").submit(function(event){
                if($("#fname").val() == "sakib"){
                    $("#output p").text("Secret message is correct").show().fadeOut(3000);
                }else{
                    $("#output p").text("Secret message invalid").show().fadeOut(3000);
                    event.preventDefault();
                }
            });
        });
    </script>
</body>

</html>