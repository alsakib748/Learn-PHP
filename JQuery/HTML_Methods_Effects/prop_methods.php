
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
        body{
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
                    
                    <div class="input" id="input">
                        <!-- <input type="checkbox" id="chek" checked="checked"/>
                        <p></p> <br/><br/> -->
                        <input type="checkbox" id="check" checked="checked" />
                        <p></p>
                    </div>
                    <div  id="output">
                        
                    </div>
                    <script>
                        $(document).ready(function(){
                            // $("input").change(function(){
                            //     let $input = $(this);
                            //     $("p").html(".attr(\"checked\"): "+$input.attr("checked")+"<br/><br/>"
                            //     +".prop(\"checked\"): "+$input.prop("checked")+"<br/><br/>"
                            //     +".is(\"checked\"): "+$input.is("checked"));
                            // });

                            $("#check").change(function(){
                                let inputVal = $(this);
                                // console.log(inputVal);
                                $("p").html("Checked attr : "+inputVal.attr("checked")+"<br/><br/>"+"checked prop : "+inputVal.prop("checked")+"<br/><br/>"
                                +"Checked is : "+inputVal.is("checked"));
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