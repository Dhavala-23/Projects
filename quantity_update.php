<?php
require 'connection.php';
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
require 'header.php';
$user_id = $_SESSION['userid'];
$item_id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <form id="updatequantity" action="cart_update.php">
        <?php
        $fetch = "select `name`,`image`,`price` from `items` where `id`='$item_id'";
        $fetch_result = mysqli_query($con, $fetch) or die(mysqli_error($con));
        $no_of_rows_result = mysqli_num_rows($fetch_result);
        while ($row = mysqli_fetch_array($fetch_result)) { ?>
            <img src='<?php echo $row["image"]; ?>' width="300" height="300" style="border:solid;position:relative;left:50px;top:65px;" />
            <?php
            ?>
            <h3>
                <div style="position:relative;left:500px;bottom:200px; font-weight:bolder;">
                    Product id:<input style="border:0;" type="text" name='item_id' value="<?php echo $item_id ?>" readonly><br><br>
                    Product Name:<input style="border:0;" type="text" name='name' value="<?php echo $row['name'] ?>" readonly><br><br>
                    Price:Rs.<input style="border:0;" type="text" name="price" readonly value="<?php echo $row['price']; ?>">
                    <br><br>
                    Quantity:<input type="number" name="quantity" min="1" max="15" value="1"><br><br>
                    <input type="button" class="btn btn-primary" onclick="myFunction()" value="Select Quantity">
                </div>
                <h3>
    </form>
<?php }
?>
</body>
<?php require 'footer.php'; ?>

</html>
<script>
    function myFunction() {
        document.getElementById("updatequantity").submit();
    }
</script>