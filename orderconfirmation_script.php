<?php
session_start();
require 'connection.php';
?>
<?php
if (isset($_POST['submit'])) {

  $username = $_POST['firstname'];
  $username = mysqli_real_escape_string($con, $username);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $address = $_POST['addr'];
  $address = mysqli_real_escape_string($con, $address);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $state = $_POST['states'];
  $state = mysqli_real_escape_string($con, $state);

  $zip = $_POST['zip'];
  $zip = mysqli_real_escape_string($con, $zip);

  $cardname = $_POST['cardname'];
  $cardname = mysqli_real_escape_string($con, $cardname);

  $cardnumber = $_POST['cardnumber'];
  $cardnumber = mysqli_real_escape_string($con, $cardnumber);

  $expmonth = $_POST['expmonth'];
  $expmonth = mysqli_real_escape_string($con, $expmonth);

  $expyear = $_POST['expyear'];
  $expyear = mysqli_real_escape_string($con, $expyear);

  $cvv = $_POST['cvv'];
  $cvv = mysqli_real_escape_string($con, $cvv);
  $dcvv = md5(md5($cvv));

  $totalprice = $_POST['totalprice'];
  $totalprice = mysqli_real_escape_string($con, $totalprice);
  if ($_POST['billaddr']) {
    $billaddr = $_POST['billaddr'];
    $billaddr = mysqli_real_escape_string($con, $billaddr);
  } else {
    $billaddr = $address;
    echo $address;
  }
  $query = "INSERT INTO `store`.`orders` (`firstname`, `email`, `address`, `city`, `state`, `zip`, `totalprice`,`cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`)
   VALUES ('$username', '$email', '$address', '$city', '$state', '$zip', '$totalprice','$cardname', '$cardnumber', '$expmonth', '$expyear', '$dcvv');";
  mysqli_query($con, $query) or die(mysqli_error($con));
  echo "Please wait untill your payment gets completed....";
  header("Location: paymentsuccess.php");
}
?>