
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
    
    </style>

</head>

<body>
    <div class="container">
        <div class="content mt-2">
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">
                    
                    <div class="html-content">
                        <select class="form-select" id="language" multiple>
                            <option> HTML </option>
                            <option> CSS </option>
                            <option> JS </option>
                            <option> PHP </option>
                            <option> SQL </option>
                        </select> <br/>
                        <input type="text" id="getText" class="form-control" placeholder="Write Something" /> <br/>
                        <button id="html-effects" class="btn btn-primary">Show HTML Content</button> <br/><br/>
                        <p></p>
                        
                        <!-- <p>This is a second p tag</p>
                        <p>This is a last p tag</p> -->
                        <div id="show">
                            <p id="p-content">You have a selected the language from option : <span></span></p>
                            <p id="show-output"></p>
                        </div>

                        <div class="set-input">
                            <input type="text" class="form-control" id="txt"  /> <br/>
                            <input type="password" class="form-control" id="psw" /> <br/>
                            <input type="number" class="form-control" id="num" /> <br/>
                            <button id="get-input" class="btn btn-warning" >Set the Text</button>
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
        $("#html-effects").click(function(){
            let value = $("#language").val();
            $("#p-content span").html(value+" ");
        });

        $("#getText").keypress(function(){
            $("#show-output").html($("#getText").val());
        });

        $("#get-input").click(function(){
            $("input:text,input:password").val("Al Sakib Ayon");
        });
    });
</script>

</html>