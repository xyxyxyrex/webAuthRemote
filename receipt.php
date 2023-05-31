
<?php
	session_start();
  $firstName = $_SESSION['first_name'];
  $lastName = $_SESSION['last_name'];
	if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
    $address = $_POST['addressline'];
    $contactNumber = $_POST['contactnumber'];
    $email = $_POST['email'];

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
<link rel="stylesheet" href="styles/receipt.css?v=1" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
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

<script>
const sidebarToggleBtn = document.getElementById("sidebarToggleBtn");
const sidebar = document.getElementById("sidebar");
function toggleSidebar() {
sidebar.classList.toggle("show");
}
sidebarToggleBtn.addEventListener("click", toggleSidebar);
</script>
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


<div id="receipt" class="receiptWrapper">
    <div class="receiptHeader">
        <div class="headerText">
        <h1>Transaction Completed!</h1>
        <h2>Thank you for ordering!</h2>
<p style="font-size:15px;">RECEIPT ID:
<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$randomString = generateRandomString();
echo $randomString;
?>
</p>
        </div>
        <button id="downloadButton" onclick="download()" class="downloadButton"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>  Download Receipt</button>
    </div>
    <script type="text/javascript">
  function download() {
    html2canvas(document.getElementById('receipt')).then(function (canvas) {
      const canvasWrapper = document.getElementById('canvasWrapper');
      if (canvasWrapper.firstChild) {
        canvasWrapper.removeChild(canvasWrapper.firstChild);
      }
      canvasWrapper.appendChild(canvas);

      const image = canvas.toDataURL("image/png", 1.0);
      const link = document.createElement("a");
      link.download = "RECEIPT-<?php echo strtoupper($lastName); ?>.png";
      link.href = image;
      link.click();
    });
  }
</script>

</script>
<div class="receiptDetails">

<div class="name">
    <h3>Name</h3>
    </br>
    <p><?php echo ucfirst($firstName) . ' ' . ucfirst($lastName); ?><p>
</div>

<div class="address">
    <h3>Address</h3>
    </br>
    <p><?php echo $address?><p>
</div>
        
<div class="address">
    <h3>Email</h3>
    </br>
    <p><?php echo $email?><p>
</div>

<div class="contactNumber">
    <h3>Contact Number</h3>
    <?php
    $contactNumber = $_POST['contactnumber'];
    echo '<div id="contactNumber" class="iti__container">';
    echo '<input type="tel" id="phone" name="contactnumber" value="' . $contactNumber . '" readonly>';
    echo '</div>';
    ?>
    <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        initialCountry: "ph",
        separateDialCode: true,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        preferredCountries: ["ph", "us"],
        autoPlaceholder: "aggressive",
        utilsScript: "https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/utils.js",
    });
</script>
</div>

</div>
<div id="canvasWrapper" style="display:none;"></div>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['addressline'];
    $contactNumber = $_POST['contactnumber'];
    $email = $_POST['email'];
    $productNames = $_POST['productName'];
    $quantities = $_POST['quantity'];
    $prices = $_POST['price'];

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

        echo '<tr><td colspan="3" style="text-align:right; color:rgba(210, 105, 30, 0.753);">Total:</td>';
        echo '<td style="border-radius:50px;color:white; background-color:rgba(210, 105, 30, 0.753);">₱' . $totalAmount . '</td></tr>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<p>No products added to the order.</p>';
    }
}
?>




</body>
</html>
