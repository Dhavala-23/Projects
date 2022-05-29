<?php
require 'connection.php';
session_start();
require 'header.php';
$user_id = $_SESSION['userid'];
$item_id = $_SESSION['id'];
$price=$_GET['price'];
echo $price;
$quantity=$_GET['quantity'];
echo $quantity;
$totalprice= $price * $quantity;
echo $totalprice;
$sql="update `users_items` set `users_items`.`quantity`='$quantity',`users_items`.`totalprice`='$totalprice' where `user_id`='$user_id' and `item_id`='$item_id'";
$edit =mysqli_query($con, $sql) or die(mysqli_error($con)); 
header('location:cart.php');
?>
