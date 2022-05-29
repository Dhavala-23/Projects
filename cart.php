<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
require 'header.php';
$user_id = $_SESSION['userid'];
if (isset($_SESSION['id'])) {
    $item_id = $_SESSION['id'];
} else {
}
$user_products_query = "select it.id,it.name,it.price,it.image,quantity,totalprice from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
$user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
$no_of_user_products = mysqli_num_rows($user_products_result);
$sum = 0;
if ($no_of_user_products == 0) {
?>
    <script>
        window.alert("No items in the cart!!");
    </script>
    <meta http-equiv="refresh" content="0;url=products.php" />
<?php
} else {
    while ($row = mysqli_fetch_array($user_products_result)) {
        $sum = $sum + $row['totalprice'];
    }
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
        <br>
        <div class="container">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>Image</th>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Edit Quantity</th>
                        <th>Remove Product</th>
                    </tr>
                    <?php
                    $user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
                    $no_of_user_products = mysqli_num_rows($user_products_result);
                    $counter = 1;

                    while ($row = mysqli_fetch_array($user_products_result)) {

                    ?>
                        <tr>
                            <th><img src='<?php echo $row["image"]; ?>' width="50" height="40" /></th>
                            <th><?php echo $counter ?></th>
                            <th><?php echo $row['name'] ?></th>
                            <th><?php echo $row['price'] ?></th>
                            <th><?php echo $row['quantity'] ?></th>
                            <th>Rs.<?php echo $row['totalprice']; ?></th>
        </div>
        <th><a href="quantity_update.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit">Edit</a></th>
        <th><a href="cart_remove.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-trash">Remove</span></a></th>
        </tr>
    <?php $counter = $counter + 1;
                    } ?>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>Total Amount</th>
        <th id="totalPrice">Rs <?php echo $sum ?>.00/-</th>
        <th><a href="success.php?totalprice=<?php echo $sum ?>" class="btn btn-primary">Confirm Order</a></th>
    </tr>
    </tbody>
    </table>
    </div>
    <?php

    ?>
    <br><br><br><br><br><br><br><br><br><br>
    <?php include('footer.php'); ?>
    </div>
</body>

</html>