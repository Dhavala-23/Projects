<?php
require 'connection.php';
session_start();
require 'header.php';
$user_id = $_SESSION['userid'];
$item_id = $_GET['id'];
$add_to_cart_query = "insert into users_items(user_id,item_id,quantity,totalprice,status) values ('$user_id','$item_id','1',(select `price` from `items` where `id`='$item_id'),'Added to cart')";
$add_to_cart_result = mysqli_query($con, $add_to_cart_query) or die(mysqli_error($con));
$query="select id from items where id='$item_id'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
    
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['id']=$item_id;
    }
header('location:quantity_update.php');
?>