
<?php
	session_start();
  if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
  $firstName = $_SESSION['first_name'];
  $lastName = $_SESSION['last_name'];

?>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>
<script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/orderDetails.css?v=1" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>Mellow Brews</title>

</head>
<body>
    <div class="navBar">
		  <div class="smallLogo">
			  <img src>
		  </div>
		<div class="navButtons">
			<ul>
				  <li class="liButtons"><i class="fa fa-user" aria-hidden="true" style="font-size:3rem"></i></li> 
				  <li>
		        <div class="orderButton">
				        <a href="products.php">
				        <i class="fa fa-shopping-cart" style="font-size:2rem"></i>
				        Order
				  </a>
			</div>
				  <li>Contact</li>
				  <li>About</li>
				<a href="homePage.php"><li>Home</li></a>
				<img id="logoNav" src="logoLong.png">
			</ul>
		</div>
	</div>
    </div>
    <div class="orderDetails">
      <form action="receipt.php" method="POST">
      <input type="hidden" name="firstName" value="<?php echo $firstName; ?>">
      <input type="hidden" name="lastName" value="<?php echo $lastName; ?>">
      
      <h1>Order Details</h1>
      <h2>Name:</h2>
      <h3><?php echo ucfirst($firstName) . ' ' . ucfirst($lastName)?></h3>
      <label for="addressLine">Delivery Address:</label>
      <input type="text" name="addressline" placeholder="Address">
      </br>
      <label for="contactNumber">Contact Number:</label>
      <input type="tel" id="contactNumber" name="contactnumber" placeholder="Contact Number" class="custom-input">
      <script>
        var input = document.querySelector("#contactNumber");
        window.intlTelInput(input, {
          initialCountry:"ph",
          separateDialCode: true
        });
      </script>
    </br>
      <label for="email" name="email">Email:</label></br>
      <input type="text" name="email" placeholder="Email Address">
      </br>

      <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $productNames = $_POST['productName'];
  $quantities = $_POST['quantity'];
  $prices = $_POST['price'];

  echo '<h1>Order Details</h1>';

  if (!empty($productNames)) {
    echo '<div class="orderTable">';
    echo '<table>';
    echo '<tr><th>Product Name</th><th>Quantity</th><th>Price</th><th>Total</th></tr>';

    $totalAmount = 0;

    for ($i = 0; $i < count($productNames); $i++) {
      $productName = $productNames[$i];
      $quantity = intval($quantities[$i]); 
      $price = floatval($prices[$i]); 
      $totalPrice = $quantity * $price;


      echo '<tr>';
      echo '<td>' . $productName . '</td>';
      echo '<td>' . $quantity . '</td>';
      echo '<td>₱' . $price . '</td>';
      echo '<td>₱' . $totalPrice . '</td>';
      echo '</tr>';

      $totalAmount += $totalPrice;
    }

    echo '<tr><td colspan="3" style="text-align:right;">Total Amount:</td>';
    echo '<td>₱' . $totalAmount . '</td></tr>';
    echo '</table>';
    echo '</div>';
  } else {
    echo '<p>No products added to the order.</p>';
  }
}
?>


<input type="submit" name="submit" value="Check Out">
<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($productNames as $index => $productName) {
      echo '<input type="hidden" name="productName[]" value="' . $productName . '">';
      echo '<input type="hidden" name="quantity[]" value="' . $quantities[$index] . '">';
      echo '<input type="hidden" name="price[]" value="' . $prices[$index] . '">';
    }
    echo '<input type="hidden" name="totalAmount" value="' . $totalAmount . '">';
  }
  ?>
    </form>

    <div class="noticeArea">
    <div class="notificationText">
        <h>Order placed!</h>
      </div>
      <img src="logo@4x.png" alt="">

      <h1>You are one step away!</h1>
      <h2>Fill out some information.</h2>
    </div>
    </div>

</body>

  
</html>

