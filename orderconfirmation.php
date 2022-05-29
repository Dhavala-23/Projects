<?php
session_start();
include('header.php');
$totalprice = $_GET['totalprice'];
if (!isset($_SESSION['email'])) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="images/logo.jpg" />
  <title>FoodOnline</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body><br>
  <div class="row1">
    <div class="col-75">
      <div class="container1">
        <h3><b>Order Summary</b></h3>
        <h4>Total:Rs.<?php echo $totalprice;
                      echo '.00' ?></h4>
      </div><br>
      <div class="container1">
        <form action="orderconfirmation_script.php" method="POST">
          <div class="row">
            <div class="col-50">
              <h3><b>Billing Address</b></h3>

              <label for="fname"></label>
              Name:
              <input type="text" id="fname" name="firstname" placeholder="Name" required><br><br>
              <label for="email"></label>
              Email:
              <input type="text" id="email" name="email" placeholder="Email" required><br><br>
              <label for="adr"></label>
              Address:
              <input type="text" id="addr" name="addr" placeholder="Address" required><br><br>
              <label for="city"></label>
              City:
              <input type="text" id="city" name="city" placeholder="City" required><br><br>
              <div class="row">
                <div class="col-50">
                  <label for="states"></label>
                  State:
                  <input type="text" id="states" name="states" placeholder="State" required>
                </div><br>
                <div class="col-50">
                  <label for="zip"></label>
                  Pincode:
                  <input type="text" id="zip" name="zip" placeholder="Pincode" required>
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
                <i class="fa fa-cc-rupay" style="color:orange;"></i>
              </div>
              Card Holder Name:
              <input type="text" id="cname" name="cardname" placeholder="Card Holder Name" required><br>
              Card Number:
              <input type="text" id="ccnum" onkeypress='return formats(this,event)' onkeyup="return numberValidation(event)" name="cardnumber" placeholder="Card Number:xxxx-xxxx-xxxx-xxxx " required><br>
              Expiry Month:
              <input type="text" id="expmonth" name="expmonth" placeholder="Expiry Month: mm" required><br>
              <div class="row">
                <div class="col-50">
                  Expiry Year:
                  <input type="text" id="expyear" name="expyear" placeholder="Expiry Year: yyyy" required>
                </div><br>
                <div class="col-50">
                  Cvv:
                  <input type="password" id="cvv" name="cvv" placeholder="CVV" pattern="[0-9]{3}" title="Must contain only three digit number" required>
                </div>
              </div>
              Total Amount:
              <input type="text" id="totalprice" name="totalprice" value="<?php echo $totalprice ?>.00" readonly><br><Br>
            </div>
          </div>
      </div>
      <input class="btn btn-primary" type="submit" value="Pay now" class="btn" name="submit">
      </form>
    </div>
  </div>
  <br><br><br><br>
  <?php include('footer.php'); ?>
</body>

</html>
<script>
  function formats(ele, e) {
    if (ele.value.length < 19) {
      ele.value = ele.value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
      return true;
    } else {
      return false;
    }
  }

  function numberValidation(e) {
    e.target.value = e.target.value.replace(/[^\d ]/g, '');
    return false;
  }
</script>