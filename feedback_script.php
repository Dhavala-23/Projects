<?php
require 'connection.php';
session_start();
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$contact = $_POST['contact'];
$message = mysqli_real_escape_string($con, $_POST['message']);
$user_registration_query = "insert into feedback(name,email,contact,message) values ('$name','$email','$contact','$message')";
$user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "Feedback submitted. Redirecting you to home page......";
?>
<meta http-equiv="refresh" content="1;url=index.php" />