<?php
	session_start();
  $firstName = $_SESSION['first_name'];
  $lastName = $_SESSION['last_name'];
	if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Welcome, <?php echo ucfirst($firstName) . ' ' . ucfirst($lastName); ?>!</h1>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the submitted form data
  $productNames = $_POST['productName'];
  $quantities = $_POST['quantity'];
  $prices = $_POST['price'];

  // Display the order details
  echo '<h1>Order Details</h1>';

  if (!empty($productNames)) {
    echo '<table>';
    echo '<tr><th>Product Name</th><th>Quantity</th><th>Price</th><th>Total</th></tr>';

    $totalAmount = 0;

    // Loop through each product
    for ($i = 0; $i < count($productNames); $i++) {
      $productName = $productNames[$i];
      $quantity = intval($quantities[$i]); // Convert to integer
      $price = floatval($prices[$i]); // Convert to float
      $totalPrice = $quantity * $price;

      // Display the product details in a table row
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
  } else {
    echo '<p>No products added to the order.</p>';
  }
}
?>

</body>
</html>

