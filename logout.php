<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="images/logo.jpg" />
        <title>FoodOnline</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container" style="position:relative;top:100px;">
                <div class="row">
                    <div class="col-xs-6" style="position:relative;left:250px;">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body"style="font-weight:bolder;font-size:20px;">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include ('footer.php'); ?>
        </div>
    </body>
</html>
