<?php
session_start();
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
        <div id="bannerImage" style="background-image:url('images/bg.png');">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1><strong>Welcome to FoodOnline</strong></h1>
                        <p><strong>Enjoy the world of food.</strong></p>
                        <a href="products.php" class="btn btn-danger">Order Now</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <a href="products.php#soups">
                            <img src="images/s1.png" alt="soups" height="500px" width="400px">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Soups</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <a href="products.php#starters">
                            <img src="images/st1.png" alt="starters" height="500px" width="400px">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Starters</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <a href="products.php#juices">
                            <img src="images/j1.png" alt="juices" height="500px" width="400px">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Juices</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <a href="products.php#desserts">
                            <img src="images/d1.png" alt="desserts" height="500px" width="400px">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Desserts</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br> <br><br><br><br>
        <?php include('footer.php'); ?>
    </div>
</body>

</html>