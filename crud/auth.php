<?php
session_start([
    'cookie_lifetime' => 300
]);

$error = false;

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$fp = fopen('data/users.txt', 'r');

if ($username && $password) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    while ($data = fgetcsv($fp)) {
        if ($data[0] == $username && $data[1] == sha1($password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $data[2];
            header("location: index.php");
            exit; // Add an exit to stop script execution after the redirect
        }
    }
    if (!$_SESSION['loggedin']) {
        $error = true;
    }
}

if (isset($_GET['logout'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    session_destroy();
    header("location: index.php");
    exit; // Add an exit to stop script execution after the redirect
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<div class="container pt-2">
    <h4 class="text-secondary text-center"><b>Simple Authentication Example</b></h4>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <div class="text-info"><b>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "Hello " . ($_SESSION['loggedin'] ? "Admin" : "Stranger") . ", Welcome!";
                    } else {
                        echo "Hello Stranger, Login Below";
                    }
                    if ($error) {
                        echo "<blockquote class='text-danger'>!!!Username and Password didn't match :(</blockquote>";
                    }
                    ?>
                </b></div><br/><br/>

            <div class="form-design border border-rounded bg-light shadow p-3 mb-5 bg-body rounded">
                <?php
                if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
                    ?>
                    <form action="" method="POST">
                        <label for="username" class="text-warning"><b>Username</b></label>
                        <input type="text" class="form-control" name="username" placeholder="Username"/> <br/>
                        <label for="password" class="text-warning"><b>Password</b></label>
                        <input type="password" class="form-control" name="password" placeholder="Password"/> <br/>
                        <button type="submit" class="btn btn-warning text-center text-light">Submit</button>
                    </form>
                    <?php
                } else {
                    ?>
                    <form action="auth.php" method="POST">
                        <input type="hidden" name="logout" value="1"/>
                        <button type="submit" class="btn btn-warning" name="submit">Log Out</button>
                    </form>
                    <?php
                }
                ?>
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</html>
