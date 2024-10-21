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
	font-family: 'Open Sans', arial, sans-serif;
	color: #333;
	font-size: 14px;
}
.projcard-container {
	margin: 50px 0;
}

/* Actual Code: */
.projcard-container,
.projcard-container * {
	box-sizing: border-box;
}
.projcard-container {
	margin-left: auto;
	margin-right: auto;
	width: 1000px;
}
.projcard {
	position: relative;
	width: 100%;
	height: 300px;
	margin-bottom: 40px;
	border-radius: 10px;
	background-color: #fff;
	border: 2px solid #ddd;
	font-size: 18px;
	overflow: hidden;
	cursor: pointer;
	box-shadow: 0 4px 21px -12px rgba(0, 0, 0, .66);
	transition: box-shadow 0.2s ease, transform 0.2s ease;
}
.projcard:hover {
	box-shadow: 0 34px 32px -33px rgba(0, 0, 0, .18);
	transform: translate(0px, -3px);
}
.projcard::before {
	content: "";
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-image: linear-gradient(-70deg, #424242, transparent 50%);
	opacity: 0.07;
}
.projcard:nth-child(2n)::before {
	background-image: linear-gradient(-250deg, #424242, transparent 50%);
}
.projcard-innerbox {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
}
.projcard-img {
	position: absolute;
	height: 300px;
	width: 400px;
	top: 0;
	left: 0;
	transition: transform 0.2s ease;
}
.projcard:nth-child(2n) .projcard-img {
	left: initial;
	right: 0;
}
.projcard:hover .projcard-img {
	transform: scale(1.05) rotate(1deg);
}
.projcard:hover .projcard-bar {
	width: 70px;
}
.projcard-textbox {
	position: absolute;
	top: 7%;
	bottom: 7%;
	left: 430px;
	width: calc(100% - 470px);
	font-size: 17px;
}
.projcard:nth-child(2n) .projcard-textbox {
	left: initial;
	right: 430px;
}
.projcard-textbox::before,
.projcard-textbox::after {
	content: "";
	position: absolute;
	display: block;
	background: #ff0000bb;
	background: #fff;
	top: -20%;
	left: -55px;
	height: 140%;
	width: 60px;
	transform: rotate(8deg);
}
.projcard:nth-child(2n) .projcard-textbox::before {
	display: none;
}
.projcard-textbox::after {
	display: none;
	left: initial;
	right: -55px;
}
.projcard:nth-child(2n) .projcard-textbox::after {
	display: block;
}
.projcard-textbox * {
	position: relative;
}
.projcard-title {
	font-family: 'Voces', 'Open Sans', arial, sans-serif;
	font-size: 24px;
}
.projcard-subtitle {
	font-family: 'Voces', 'Open Sans', arial, sans-serif;
	color: #888;
}
.projcard-bar {
	left: -2px;
	width: 50px;
	height: 5px;
	margin: 10px 0;
	border-radius: 5px;
	background-color: #424242;
	transition: width 0.2s ease;
}
.projcard-blue .projcard-bar { background-color: #0088FF; }
.projcard-blue::before { background-image: linear-gradient(-70deg, #0088FF, transparent 50%); }
.projcard-blue:nth-child(2n)::before { background-image: linear-gradient(-250deg, #0088FF, transparent 50%); }
.projcard-red .projcard-bar { background-color: #D62F1F; }
.projcard-red::before { background-image: linear-gradient(-70deg, #D62F1F, transparent 50%); }
.projcard-red:nth-child(2n)::before { background-image: linear-gradient(-250deg, #D62F1F, transparent 50%); }
.projcard-green .projcard-bar { background-color: #40BD00; }
.projcard-green::before { background-image: linear-gradient(-70deg, #40BD00, transparent 50%); }
.projcard-green:nth-child(2n)::before { background-image: linear-gradient(-250deg, #40BD00, transparent 50%); }
.projcard-yellow .projcard-bar { background-color: #F5AF41; }
.projcard-yellow::before { background-image: linear-gradient(-70deg, #F5AF41, transparent 50%); }
.projcard-yellow:nth-child(2n)::before { background-image: linear-gradient(-250deg, #F5AF41, transparent 50%); }
.projcard-orange .projcard-bar { background-color: #FF5722; }
.projcard-orange::before { background-image: linear-gradient(-70deg, #FF5722, transparent 50%); }
.projcard-orange:nth-child(2n)::before { background-image: linear-gradient(-250deg, #FF5722, transparent 50%); }
.projcard-brown .projcard-bar { background-color: #C49863; }
.projcard-brown::before { background-image: linear-gradient(-70deg, #C49863, transparent 50%); }
.projcard-brown:nth-child(2n)::before { background-image: linear-gradient(-250deg, #C49863, transparent 50%); }
.projcard-grey .projcard-bar { background-color: #424242; }
.projcard-grey::before { background-image: linear-gradient(-70deg, #424242, transparent 50%); }
.projcard-grey:nth-child(2n)::before { background-image: linear-gradient(-250deg, #424242, transparent 50%); }
.projcard-customcolor .projcard-bar { background-color: var(--projcard-color); }
.projcard-customcolor::before { background-image: linear-gradient(-70deg, var(--projcard-color), transparent 50%); }
.projcard-customcolor:nth-child(2n)::before { background-image: linear-gradient(-250deg, var(--projcard-color), transparent 50%); }
.projcard-description {
	z-index: 10;
	font-size: 15px;
	color: #424242;
	height: 125px;
	overflow: hidden;
	text-overflow: ellipsis;
}
.projcard-tagbox {
	position: absolute;
	bottom: 3%;
	font-size: 14px;
	cursor: default;
	user-select: none;
	pointer-events: none;
}
.projcard-tag {
	display: inline-block;
	background: #E0E0E0;
	color: #777;
	border-radius: 3px 0 0 3px;
	line-height: 26px;
	padding: 0 10px 0 23px;
	position: relative;
	margin-right: 20px;
	cursor: default;
	user-select: none;
	transition: color 0.2s;
}
.projcard-tag::before {
	content: '';
	position: absolute;
	background: #fff;
	border-radius: 10px;
	box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
	height: 6px;
	left: 10px;
	width: 6px;
	top: 10px;
}
.projcard-tag::after {
	content: '';
	position: absolute;
	border-bottom: 13px solid transparent;
	border-left: 10px solid #E0E0E0;
	border-top: 13px solid transparent;
	right: -10px;
	top: 0;
}

        .content {
            /* margin: 0 auto; */
        }
        .input{
            width: 400px;
            margin: 0px auto;
            text-align: center;
        }
        p{
            background-color: lightcoral;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content mt-2">

            <div class="input">
                <p>This is Al Sakib Ayon</p> <br/><br/>
                <input type="text" class="form-control" id="input1" />
                <br/><br/>
                <button class="btn btn-lg btn-primary" id="btn1">Delegate function</button>
            </div>

            <div id="output">
                <div class="projcard-container">
		
	<div class="projcard projcard-blue" id="card1" style="display:none">
		<div class="projcard-innerbox">
			<img class="projcard-img" src="https://picsum.photos/800/600?image=1041" />
			<div class="projcard-textbox">
				<div class="projcard-title">Card Title</div>
				<div class="projcard-subtitle">This explains the card in more detail</div>
				<div class="projcard-bar"></div>
				<div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				<div class="projcard-tagbox">
					<span class="projcard-tag">HTML</span>
					<span class="projcard-tag">CSS</span>
				</div>
			</div>
		</div>
	</div>
	
	<!-- <div class="projcard projcard-red">
		<div class="projcard-innerbox">
			<img class="projcard-img" src="https://picsum.photos/800/600?image=1080" />
			<div class="projcard-textbox">
				<div class="projcard-title">That's Another Card</div>
				<div class="projcard-subtitle">I don't really think that I need to explain anything here</div>
				<div class="projcard-bar"></div>
				<div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
				<div class="projcard-tagbox">
					<span class="projcard-tag">PHP</span>
					<span class="projcard-tag">SQL</span>
					<span class="projcard-tag">Database</span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="projcard projcard-green">
		<div class="projcard-innerbox">
			<img class="projcard-img" src="https://picsum.photos/800/600?image=1039" />
			<div class="projcard-textbox">
				<div class="projcard-title">And a Third Card</div>
				<div class="projcard-subtitle">You know what this is by now</div>
				<div class="projcard-bar"></div>
				<div class="projcard-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
				<div class="projcard-tagbox">
					<span class="projcard-tag">Excel</span>
					<span class="projcard-tag">VBA</span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="projcard projcard-customcolor" style="--projcard-color: #F5AF41;">
		<div class="projcard-innerbox">
			<img class="projcard-img" src="https://picsum.photos/800/600?image=943" />
			<div class="projcard-textbox">
				<div class="projcard-title">Last Card</div>
				<div class="projcard-subtitle">That's the last one. Have a nice day!</div>
				<div class="projcard-bar"></div>
				<div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
				<div class="projcard-tagbox">
					<span class="projcard-tag">iOS</span>
					<span class="projcard-tag">Android</span>
					<span class="projcard-tag">Cordova</span>
				</div>
			</div>
		</div>
	</div>
	 -->
</div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("body").delegate("p","click",function(){
                $(this).after("<p>I am become software developer</p>");
            });

            $("body").delegate("#input1","keyup",function(){
                $("#input1").after("<br/><p>This is a input box</p>");
            });

            $("body").delegate("#btn1","click",function(){
                $("#card1").slideDown(1000).toggle("#card1");
            })
        });


    </script>
</body>

</html>