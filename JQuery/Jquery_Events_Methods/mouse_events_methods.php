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
        @import url(https://fonts.googleapis.com/css?family=Oswald|Roboto|Slabo+27px);
        @import 'bourbon';

        body {
            text-align: center;
            background: #ececec;
        }

        .content {
            margin: 0 auto;
        }

        .blog-wrapper {
            padding: 15px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;

            .blog-card {
                @include transition(.3s);
                max-width: 300px;
                margin: 15px;
                background: #fff;
                border: 1px solid #CB6074;
                text-align: center;
                cursor: pointer;

                &:hover {
                    box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .1);

                    .card-img {
                        img {
                            opacity: 0.8;
                        }
                    }
                }

                .card-img {
                    position: relative;
                    text-align: center;
                    background: #CB6074;

                    img {
                        @include transition(.3s);
                        max-height: 180px;
                        width: 100%;
                        border-bottom: 4px solid #CB6074;
                    }

                    &:before {
                        content: '';
                        position: absolute;
                        bottom: -8px;
                        left: 50%;
                        margin-left: -10px;
                        width: 0;
                        height: 0;
                        border-top: solid 10px #CB6074;
                        border-left: solid 10px transparent;
                        border-right: solid 10px transparent;
                    }

                    h1 {
                        position: absolute;
                        margin: 0;
                        font-size: 42px;
                        bottom: 15px;
                        width: 100%;
                        color: #fff;
                        font-family: 'Slabo 27px', serif;
                    }
                }

                .card-details {
                    margin-top: 30px;
                    font-family: 'Roboto', sans-serif;
                    color: #3C3C3C;

                    span {
                        padding: 0 30px;

                        i {
                            margin-right: 5px;
                        }

                    }
                }

                .card-text {
                    padding: 30px 15px;
                    font-family: 'Roboto', sans-serif;
                    line-height: 22px;
                }

                .read-more {
                    @include transition(.3s);
                    display: inline-block;
                    width: auto;
                    text-align: center;
                    text-transform: uppercase;
                    background: #CB6074;
                    color: #fff;
                    padding: 15px;
                    margin-bottom: 30px;
                    font-family: 'Oswald', sans-serif;

                    &:hover {
                        background: darken(#CB6074, 20%);
                    }
                }
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content mt-2">
            <div class="inputBtn">
                <button class="btn btn-primary ml-2" id="btn1" >MouseEnter</button>
                <button class="btn btn-warning ml-2" id="btn2" >Mouseleave</button>
                <button class="btn btn-info ml-2" id="btn3" >Mouseleave</button>
                
            </div>
            <div class="blog-wrapper">
                <div id="card1" class="blog-card">
                    <div class="card-img"><img height="100%" width="100%" src="https://images.unsplash.com/photo-1518235506717-e1ed3306a89b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
                        <h1>New York</h1>
                    </div>
                    <div class="card-details"><span><i class="fa fa-calendar"></i>AUG 4</span><span><i class="fa fa-heart"></i>102</span></div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
                    </div>
                    <div class="read-more">Read More</div>
                </div>
                <div id="card2" class="blog-card">
                    <div class="card-img"><img height="100%" width="100%" src="https://images.unsplash.com/photo-1445368794737-0cf251429ca0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80">
                        <h1>San Francisco</h1>
                    </div>
                    <div class="card-details"><span><i class="fa fa-calendar"></i>AUG 1</span><span><i class="fa fa-heart"></i>265</span></div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
                    </div>
                    <div class="read-more">Read More</div>
                </div>
                <div id="card3" class="blog-card">
                    <div class="card-img"><img height="100%" width="100%" src="https://images.unsplash.com/photo-1445368794737-0cf251429ca0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80">
                        <h1>San Francisco</h1>
                    </div>
                    <div class="card-details"><span><i class="fa fa-calendar"></i>AUG 1</span><span><i class="fa fa-heart"></i>265</span></div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
                    </div>
                    <div class="read-more">Read More</div>
                </div>

                <div id="card4" class="blog-card">
                    <div class="card-img"><img height="100%" width="100%" src="https://images.unsplash.com/photo-1445368794737-0cf251429ca0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80">
                        <h1>San Francisco</h1>
                    </div>
                    <div class="card-details"><span><i class="fa fa-calendar"></i>AUG 1</span><span><i class="fa fa-heart"></i>265</span></div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
                    </div>
                    <div class="read-more">Read More</div>
                </div>
                <div id="card5" class="blog-card">
                    <div class="card-img"><img height="100%" width="100%" src="https://images.unsplash.com/photo-1445368794737-0cf251429ca0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80">
                        <h1>San Francisco</h1>
                    </div>
                    <div class="card-details"><span><i class="fa fa-calendar"></i>AUG 1</span><span><i class="fa fa-heart"></i>265</span></div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
                    </div>
                    <div class="read-more">Read More</div>
                </div>
                <div id="card6" class="blog-card">
                    <div class="card-img"><img height="100%" width="100%" src="https://images.unsplash.com/photo-1445368794737-0cf251429ca0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80">
                        <h1>San Francisco</h1>
                    </div>
                    <div class="card-details"><span><i class="fa fa-calendar"></i>AUG 1</span><span><i class="fa fa-heart"></i>265</span></div>
                    <div class="card-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p>
                    </div>
                    <div class="read-more">Read More</div>
                </div>
            </div>

            <button class="btn btn-dark ml-2" id="btn4" >MouseUp</button>
            <button class="btn btn-secondary ml-2" id="btn5" >MouseDown</button>
            <button class="btn btn-success ml-2" id="btn6" >MouseOver</button>
            <button class="btn btn-danger ml-2" id="btn7" >MouseOut</button>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#btn1").mouseenter(function(){
                $("#card1").addClass("bg-dark text-light").css("color","white");
            });
            $("#btn2").mouseleave(function(){
                $("#card2").addClass("bg-warning text-light");
            });

            $("#btn3").hover(function(){
                $("#card3").addClass("bg-info text-light").css({
                    transform: "translateY(\"20%\")",
                    transition: "1s"
                });
            },function(){
                $("#card3").addClass("bg-danger text-light").css({
                    transform: "translateY(\"-20%\")",
                    transition: "1s"
                });
            });

            $("#btn4").mouseup(function(){
                $("#card4").addClass("bg-success text-light").css({
                    fontSize: "1.1rem" 
                });
            });

            $("#btn5").mouseout(function(){
                $("#card5").addClass("bg-secondary text-light").css({
                    fontSize: "1.1rem",
                    transform: "rotate(360deg)",
                    transition: "1s"
                });
            });

            // $("#btn6").mouseover({
            //     $("#card6").addClass("bg-danger text-light");
            // });
        });
    </script>
</body>
</html>