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
        #unorder-list li{
            list-style: none;
            margin: 0px auto;
            padding: 5px;
            border-radius: 10px;
            margin: 5px;
            background-color: cornflowerblue;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content mt-2">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h5>Remove elements Using Remove() function on Jquery</h5><br />
                    <div class="html-content">
                        <input type="text" id="getText" class="form-control" placeholder="Write Something" /> <br />
                        <button id="textId" class="btn btn-primary">Remove Content</button> <br /><br />
                        <div id="content">
                            <h3>This is a heading tag</h3>
                            <p id="">This is a p first content </p>
                            <p id="">This is a second content</p>
                        </div>
                        <div class="set-input">
                            <input type="text" id="getElement" class="form-control" placeholder="Write Something" /> <br />
                            <button id="add-element" class="btn btn-warning text-light">Add Element</button> 
                            <button id="removeElement" class="btn btn-danger text-light">Remove Element</button> <br /><br />
                        </div>
                        <div class="output">
                            <ul id="unorder-list">
                                <h3 class="text-center">Showing the name</h3>
                                <li>Multiple List is Here</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $("#content").click(function(){
            $("body").css("cursor","pointer").css("background","lightgreen");
        });

        $("#textId").click(function(){
            $("#content").empty();
        });
    });    
</script>
</html>