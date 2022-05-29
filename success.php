<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} else {
    $user_id = $_SESSION['userid'];
    $totalprice = $_GET['totalprice'];
    $confirm_query = "update users_items set status='Confirmed' where user_id=$user_id";
    $confirm_query_result = mysqli_query($con, $confirm_query) or die(mysqli_error($con));
}
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
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading"></div>
                        <div class="panel-body" style="font-weight:bolder;font-size:20px;">
                            <p align="center"><span class="glyphicon glyphicon-thumbs-up"></span>Your order is confirmed.<br>
                            <ul>Select payment method.<br>
                                <a href="orderconfirmation.php?totalprice=<?php echo $totalprice ?>">Pay now.</a><br>
                                <a href="paymentsuccess1.php?totalprice=<?php echo $totalprice ?>">Pay on delivery.</a>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
</body>

</html>