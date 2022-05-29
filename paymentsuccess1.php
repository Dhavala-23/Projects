<?php
session_start();
include('header.php');
if (!isset($_SESSION['email'])) {
  header('location: login.php');
}
$totalprice = $_GET['totalprice'];
?>
<!DOCTYPE html>
<html lang="en">

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
  <div class="success" style="height:435px;font-weight:bolder;font-size:20px;">
    <div class="alert alert-success col-md-5 col-md-offset-4 " style="position:relative;top:50px;" role="alert">
      <h4 class="alert-heading">Success! <span class="glyphicon glyphicon-thumbs-up"></h4>
      <p>Aww yeah, your order has been placed successfully.
        <br>Total Amount:<?php echo $totalprice ?>.00
        <br>Your bill number : <?php echo (rand(10000, 100000)); ?>.
        <br>Collect your order using the bill number.
        <br> Your order will be delivered to the given address soon.
      </p>
      <hr>
      <p class="mb-0">Thank you! <a href="products.php">Click here</a> to order more products.</p>
    </div>
  </div>
  <center><a href="feedback.php" class="btn btn-primary">Give Feedback</a></center>
  <?php include('footer.php'); ?>
</body>

</html>