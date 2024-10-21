<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <title>Form Submit Using Ajax</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <style>
        /* Import Google font - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgb(130, 106, 251);
        }

        .container {
            position: relative;
            max-width: 700px;
            width: 100%;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .container header {
            font-size: 1.5rem;
            color: #333;
            font-weight: 500;
            text-align: center;
        }

        .container .form {
            margin-top: 30px;
        }

        .form .input-box {
            width: 100%;
            margin-top: 20px;
        }

        .input-box label {
            color: #333;
        }

        .form :where(.input-box input, .select-box) {
            position: relative;
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 15px;
        }

        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .form .column {
            display: flex;
            column-gap: 15px;
        }

        .form .gender-box {
            margin-top: 20px;
        }

        .gender-box h3 {
            color: #333;
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .form :where(.gender-option, .gender) {
            display: flex;
            align-items: center;
            column-gap: 50px;
            flex-wrap: wrap;
        }

        .form .gender {
            column-gap: 5px;
        }

        .gender input {
            accent-color: rgb(130, 106, 251);
        }

        .form :where(.gender input, .gender label) {
            cursor: pointer;
        }

        .gender label {
            color: #707070;
        }

        .address :where(input, .select-box) {
            margin-top: 15px;
        }

        .select-box select {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
        }

        .form button {
            height: 55px;
            width: 100%;
            color: #fff;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background: rgb(130, 106, 251);
        }

        .form button:hover {
            background: rgb(88, 56, 250);
        }

        /*Responsive*/
        @media screen and (max-width: 500px) {
            .form .column {
                flex-wrap: wrap;
            }

            .form :where(.gender-option, .gender) {
                row-gap: 15px;
            }
        }
    </style>
</head>

<body>
    <section class="container">
        <header>Registration Form</header>
        <form action="" class="form" method="POST">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" id="fname" placeholder="Enter full name" />
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="text" id="email" placeholder="Enter email address" />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" id="number" placeholder="Enter phone number" />
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input type="date" id="bdate" placeholder="Enter birth date" />
                </div>
            </div>
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="gender" value="male" name="gender" />
                        <label for="check-male">male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="gender" value="female" name="gender" />
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="gender" value="Other" name="gender" />
                        <label for="check-other">prefer not to say</label>
                    </div>
                </div>
            </div>
            <div class="input-box address">
                <label>Address</label>
                <input type="text" id="address" placeholder="Enter street address" />
                <input type="text" id="address2" placeholder="Enter street address line 2" />
                <div class="column">
                    <div class="select-box">
                        <select id="country">
                            <option hidden>Country</option>
                            <option value="america">America</option>
                            <option value="japan">Japan</option>
                            <option value="india">India</option>
                            <option value="bangladesh">Bangladesh</option>
                        </select>
                    </div>
                    <input type="text" id="city" placeholder="Enter your city" />
                </div>
                <div class="column">
                    <input type="text" id="region" placeholder="Enter your region" />
                    <input type="number" id="pcode" placeholder="Enter postal code" />
                </div>
            </div>
            <button type="submit" id="send">Submit</button>
            <div class="show-data">
                <pre id="display"></pre>
            </div>
        </form>

    </section>

</body>

<script>
    // (function($){
    //     $(document).ready(function(){
    //         $("#send").on("click",function(e){
    //             let data = {
    //                 "fname":$("#fname").val(),
    //                 "email":document.getElementById("email").value,
    //                 "number":$("#number").val(),
    //                 "address":document.getElementById("address").value,
    //                 "address2":$("#address2").val(),
    //                 "country":document.getElementById("country").value,
    //                 "pcode":$("#pcode").val(),
    //                 "city":document.getElementById("city").value,
    //                 "region":$("#region").val(),
    //                 "bdate":document.getElementById("bdate").value,
    //                 "gender":$('input[type="radio"]:checked').val()

    //             }

    //             // $.ajax({
    //             //     "method":"POST",
    //             //     "url":"submitForm_using_ajax_process.php",
    //             //     "data":data
    //             // }).done(function(message){
    //             //     console.log(message);
    //             // });

    //             return false;
    //         });
    //     });
    // })(jQuery);


    function processData() {
        let data = {
            "fname": $("#fname").val(),
            "email": document.getElementById("email").value,
            "number": $("#number").val(),
            "address": document.getElementById("address").value,
            "address2": $("#address2").val(),
            "country": document.getElementById("country").value,
            "pcode": $("#pcode").val(),
            "city": document.getElementById("city").value,
            "region": $("#region").val(),
            "bdate": document.getElementById("bdate").value,
            "gender": $('input[type="radio"]:checked').val()

        }
        let allData = formatData(data);

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "submitForm_using_ajax_process.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("display").innerHTML = this.responseText;

                var getResponse = JSON.parse(this.responseText);
                console.log(getResponse.message);
            }
        }
        xhr.send(allData);
    }

    function formatData(data) {
        return new URLSearchParams(data).toString();
    }

    document.getElementById("send").addEventListener("click", function() {
        processData();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>