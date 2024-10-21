
<!Doctype html>

<html lang="en">

<head>
    <title>HTML Webpage connected to PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" />
    <script type="javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="heading"> Showing the form data </h3>
                <p>
                    <?php if( isset($_REQUEST['fname']) && !empty($_REQUEST['fname']) ): ?>
                       First Name :   <?php $firstName  = $_REQUEST['fname']; echo $firstName;  ?>
                    <?php endif; ?>
                </p>

                <p>
                   <?php if( isset($_REQUEST['lname']) && !empty($_REQUEST['lname']) ): ?>
                       Last Name : <?php   $lastName = $_REQUEST['lname']; echo $lastName;  ?>
                   <?php endif; ?>
                </p>
            </div>
        </div>
    </div>

</body>

</html>