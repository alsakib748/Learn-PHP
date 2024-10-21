<?php
     include_once("functions.php");
?>
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
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3 class="heading"> User Input Form </h3>
                <form action="form.php" method="POST">

                    <label for="First Name" class="form-label">First Name</label>
                    <input type="text" class="form-control form-control" name="fname" value="<?php if(isset($_REQUEST['fname'])): echo $_REQUEST['fname']; endif; ?>" />
                                      <br/>
                    <label for="Last Name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname" value="<?php if(isset($_REQUEST['fname'])): echo $_REQUEST['lname']; endif; ?>" />
                                      <br/>
                    <?php  $checked = ''; if(isset($_REQUEST['check']) && ($_REQUEST['check'] == 10)) { $checked = "checked"; }  ?>
                    <input type="checkbox" class="" name="check" value="10" <?php echo $checked; ?> />
                    <label for ="checkbox" class="form-label">Check Me</label><br/>

                    <h3 class="text-secondary">Select your language----</h3>

                    <input type="checkbox"  name="language[]" value="PHP" <?php  isLanChecked('PHP'); ?> /> <?php ///  //isChecked('PHP','language'); ?>
                    <label for="fruitss">PHP</label>
                                  <br/>
                    <input type="checkbox"  name="language[]" value="PYTHON" <?php isLanChecked('PYTHON'); ?> /> <?php  //isChecked('PYTHON','language') ?>
                    <label for="fruitss">PYTHON</label>
                                  <br/>
                    <input type="checkbox"  name="language[]" value="JAVA" <?php isLanChecked('JAVA'); ?> /> <?php //isChecked('JAVA','language') ?>
                    <label for="fruitss">JAVA</label>
                                  <br/>
                    <input type="checkbox"  name="language[]" value="JAVASCRIPT" <?php isLanChecked('JAVASCRIPT'); ?> /> <?php //isChecked('JAVASCRIPT','language'); ?>
                    <label for="fruitss">JAVASCRIPT</label>
                                 <br/><br/>
                    <button type="submit" class="submit btn btn-primary">Submit</button>

                </form>
                        <br/><br/>
                <div class="user_data">
                    <p>
                        <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])): ?>
                           <h3 class="text-muted"> User Data </h3>
                           <span class="text-primary"><b>First Name:<?php $firstName = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_FULL_SPECIAL_CHARS); echo $firstName; ?></b></span>
                        <?php endif; ?>
                    </p>
                    <p class="text-primary">
                        <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])): ?>
                            <b>Last Name : <?php $lastName = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_FULL_SPECIAL_CHARS); echo $lastName; ?></b>
                        <?php endif; ?>
                    </p>
                </div>

            </div>
            <div class="col-md-4">

                <?php  print_r($_REQUEST);  ?>

            </div>

        </div>

    </div>

</body>

</html>

