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
        .content{
            background-color: lightcoral;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="allContent mt-2">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h5>Remove elements Using Remove() function on Jquery</h5><br />
                    <div class="html-content">
                        <input type="text" id="getText" class="form-control" placeholder="Write Something" /> <br />
                        <button id="textId" class="btn btn-primary">Wrap Content</button> 
                        <button id="unwrapId" class="btn btn-info">Unwrap Content</button><br /><br />
                        
                            <p id="">This is a p first content </p>
                            <p id="">This is a second content</p>
                        
                            <h1>This is a heading1 tag</h1>
                            <h2>This is a heading2 tag</h2>
                            <h3>This is a heading3 tag</h3>

                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        // $("#textId").click(function(){
        //     $("p").wrap("<div class='content'></div>");
        // });

        // $("#textId").click(function(){
        //     $("h1,h2,h3").wrap("<div class='content'></div>");
        // });

        $("#textId").click(function(){
            // $("p").wrapInner("<em></em>");
            // $("h1,h2,h3").wrapInner("<em></em>");
            $("p").wrapAll("<div class='content'></div>");
        });

        $("#unwrapId").click(function(){
            $("p").unwrap();
        });
    });    
</script>
</html>