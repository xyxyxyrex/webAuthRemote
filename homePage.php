<?php
	require 'sqlConn.php';
	session_start();
	
	if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/styles.css?v=1" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>
<body>
    
	<?php
		$id = $_SESSION['user'];
		$sql = $conn->prepare("SELECT * FROM `tbl_user` WHERE `user_id`='$id'");
		$sql->execute();
		$fetch = $sql->fetch();
	?>
    

	<div class="navBar">
		<div class="smallLogo">
			<img src>
		</div>

		<div class="navButtons">
			<ul>
				<li class="liButtons"><i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:2rem"></i></li>
				<li class="liButtons"><i class="fa fa-user" aria-hidden="true" style="font-size:2rem"></i></li> 
				<li>
				<div class="orderButton">
				<a href="orderPage.php">
				<i class="fa fa-shopping-cart" style="font-size:1rem"></i>
				Order
				</a>
				</div>
				<li>Contact</li>
				<li>About</li>
				<a href="products.php"> <li>Products</li> </a>
				<li>Home</li>
				<img id="logoNav" src="logoLong.png">
			</ul>
		</div>
	</div>
	<div class="welcomeUser">
		<h4>
			<?php echo "Welcome,  " . ucfirst($fetch['first_name'])." ".  ucfirst($fetch['last_name']) . " !"?>
		</h4>
		<?php 
		$_SESSION['first_name'] = $fetch['first_name'];
		$_SESSION['last_name'] = $fetch['last_name'];
		?>
    </div>
	<p class="middleTextHeader">CHOOSE YOUR BEVERAGE</p>
		<p class="middleTextBody">Indulge in the Creamy Bliss of our Milk Tea Delights!</p>

	<div class="parentWrapper">
		<div class="firstSection">
		<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
				<script>
					$('.carousel').carousel({
				interval: 1350
				})
				</script>
		<div class="carousel-inner">
					<div class="carousel-item active">
					<img class="d-block" src="assets/imgs/pic1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
					<img class="d-block" src="assets/imgs/pic2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
					<img class="d-block" src="assets/imgs/pic3.jpg" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			<div class="carouselTextWrapper">
					<p class="head1TextCarousel">Delightful Culinary Adventures</p>
					<p class="headTextCarousel">Discover our Flavors</p>
					<p class="bodyTextCarousel">Welcome to our food paradise, where culinary dreams come true! At Mellow Brews, we are passionate about food and dedicated to bringing you the most delightful gastronomic experiences. Whether you're a food enthusiast, a culinary explorer, or simply someone who appreciates good food, you've come to the right place.</p>
			</div>
		</div>
		<p class="middleTextHeader">CHOOSE YOUR BEVERAGE</p>

		<p class="middleTextBody">Indulge in the Creamy Bliss of our Milk Tea Delights!</p>
		
		<div class="secondSection">

			<div class="card">
				<div class="cardImgArea">
					<img src="assets/imgs/pic4.jpg" alt="Image 1">
				</div>

				<div class="cardTxtArea">

					<p class="headTextCard">Lorem ipsum</p>
					<p class="bodyTextCard">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quasi commodi exercitationem fugit asperiores delectus repudiandae praesentium ad architecto ut.</p>
				</div>
			</div>

			<div class="card">
				<div class="cardImgArea">
					<img src="assets/imgs/pic5.jpg" alt="Image 2">
				</div>

				<div class="cardTxtArea">
				<p class="headTextCard">Lorem ipsum</p>
				<p class="bodyTextCard">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quasi commodi exercitationem fugit asperiores delectus repudiandae praesentium ad architecto ut.</p>
				</div>

			</div>

			<div class="card">
				<div class="cardImgArea">
				<img src="assets/imgs/pic7.jpg" alt="Image 2">
				</div>

				<div class="cardTxtArea">
				<p class="headTextCard">Lorem ipsum</p>
					<p class="bodyTextCard">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quasi commodi exercitationem fugit asperiores delectus repudiandae praesentium ad architecto ut.</p>
				</div>

			</div>
			<div class="card">
				<div class="cardImgArea">
				<img src="assets/imgs/pic3.jpg" alt="Image 2">
				</div>
				<p class="headTextCard">Lorem ipsum</p>
				<p class="bodyTextCard">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quasi commodi exercitationem fugit asperiores delectus repudiandae praesentium ad architecto ut.</p>
				<div class="cardTxtArea">

				</div>
				

			</div>

			
		</div>
		<div class="thirdSection">

		</div>
	</div>


		<!-- <a href = "logOut.php">LOGOUT</a> -->
</body>
</html>