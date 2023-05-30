
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/products.css?v=1" />
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
<title>Product Page</title>

</head>
<body>
        <button id="sidebarToggleBtn"><i class="fa fa-shopping-basket"></i></button>
            <div id="sidebar" class="sidebar">
            </div>


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

            <li class="liButtons"><i class="fa fa-shopping-basket" aria-hidden="true" style="font-size:3rem"></i></li>
				<li class="liButtons"><i class="fa fa-user" aria-hidden="true" style="font-size:3rem"></i></li> 
				<li>
				<div class="orderButton">
				<a href="orderPage.php">
				<i class="fa fa-shopping-cart" style="font-size:2rem"></i>
				Order
				</a>
				</div>
				<li>Contact</li>
				<li>About</li>
				<li>Products</li>
				<a href="homePage.php"><li>Home</li></a>
				<img id="logoNav" src="logoLong.png">
			</ul>
		</div>
	</div>
        <div class="searchArea">
            <script>
                $(document).ready(function() {
                    $(".searchBar input").on("keyup", function() {
                        var searchText = $(this).val().toLowerCase();

                        $(".productCard").each(function() {
                            var productTitle = $(this).find(".productTextArea h1").text().toLowerCase();

                            if (productTitle.indexOf(searchText) === -1) {
                                $(this).fadeOut("slow");
                            } else {
                                $(this).fadeIn("slow");
                            }
                        });
                    });
                });
    </script>
            <div class="searchBar">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <div class="searchButton">
                <button type="button" value=""><i class="fa fa-search"></i></button>
            </div>
        </div>

            <div class="filterSearch">
            <label id="foodLabel"for="food">FOOD</label>
                <input type="checkbox" id="food" name="food" class="filter-checkbox">
                <label id="foodLabel"for="drinks">DRINKS</label>
                <input type="checkbox" id="drinks" name="drinks" class="filter-checkbox">
            </div>


    <div class="productHeader">
        <h1>CHOOSE YOUR PRODUCTS</h1>
    </div>


    <div class="productsWrapper">
            <script>
        $(document).ready(function() {
            $('button[type="submit"]').click(function(e) {
            e.preventDefault();
            var productName = $(this).data('product-name');
            $('#product1').text(productName);
            $('#product2').text(productName);
            $('#product3').text(productName);
            $('#product4').text(productName);
            $('#product5').text(productName);
            });
        });
        </script>

    <div class="productCard food">
        <img src="assets/imgs/pic13.jpg" alt="Product">
        <div class="productTextArea">
            <h1>Ebi Tempura</h1>
            <h3>Delicious, crispy, Japanese-style battered and deep-fried seafood or vegetables.</h3>
        </div>
        <div class="priceArea">
            <h2>Price<span class="priceSpan" style="float:right;">₱170</span></h2>
        </div>
        <div class="addToCartBtn">
            <input type="hidden" name="quantity1">
            <input type="hidden" name="productName1" value="Ebi Tempura">
            <input type="hidden" name="price1" value="170">
            <button type="submit" data-product-name="Ebi Tempura"><i class="fa fa-plus-circle" aria-hidden="true"></i>ADD TO CART</button>
        </div>
    </div>

    <div class="productCard food">
        <img src="assets/imgs/pic12.jpg" alt="Product">
        <div class="productTextArea">
            <h1>Beef Misono</h1>
            <h3>Tender slices of beef cooked with a flavorful sauce, served with vegetables for a satisfying and savory meal.</h3>
        </div>
        <div class="priceArea">
            <h2>Price<span class="priceSpan" style="float:right;">₱170</span></h2>
        </div>
        <div class="addToCartBtn">
            <input type="hidden" name="quantity2">
            <input type="hidden" name="productName2" value="Beef Misono">
            <input type="hidden" name="price2" value="170">
            <button type="submit" data-product-name="Beef Misono"><i class="fa fa-plus-circle" aria-hidden="true"></i>ADD TO CART</button>
        </div>
    </div>
    <div class="productCard food">
        <img src="assets/imgs/pic15.jpg" alt="Product">
        <div class="productTextArea">
            <h1>Korean Chicken</h1>
            <h3>Spicy and succulent chicken marinated in Korean spices, delivering a fiery kick and delightful taste.</h3>
        </div>
        <div class="priceArea">
            <h2>Price<span class="priceSpan" style="float:right;">₱170</span></h2>
        </div>
        <div class="addToCartBtn">
            <input type="hidden" name="quantity3">
            <input type="hidden" name="productName3" value="Korean Chicken">
            <input type="hidden" name="price3" value="170">
            <button type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i>ADD TO CART</button>
        </div>
    </div>
    <div class="productCard food">
        <img src="assets/imgs/pic16.jpg" alt="Product">
        <div class="productTextArea">
            <h1>Soygarlic Chicken</h1>
            <h3>Juicy chicken pieces marinated in a delectable blend of soy sauce and garlic, resulting in a mouthwatering combination of flavors.</h3>
        </div>
        <div class="priceArea">
            <h2>Price<span class="priceSpan" style="float:right;">₱170</span></h2>
        </div>
        <div class="addToCartBtn">
            <input type="hidden" name="quantity4">
            <input type="hidden" name="productName4" value="Soygarlic Chicken">
            <input type="hidden" name="price4" value="170">
        <button type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i>ADD TO CART</button>
        </div>
    </div>
    <div class="productCard drinks">
        <img src="assets/imgs/pic4.jpg" alt="Product">
        <div class="productTextArea">
            <h1>Wintermelon Milktea</h1>
            <h3>A refreshing and creamy beverage combining the subtle sweetness of wintermelon with creamy milk, delivering a delightful and satisfying drink.</h3>
        </div>
        <div class="priceArea">
            <h2>Price<span class="priceSpan" style="float:right;">₱170</span></h2>
        </div>
        <div class="addToCartBtn">
            <input type="hidden" name="quantity5">
            <input type="hidden" name="productName5" value="Wintermelon Milktea">
            <input type="hidden" name="price5" value="170">
            <button type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i>ADD TO CART</button>
        </div>
    </div>
    <div class="productCard drinks">
        <img src="assets/imgs/pic5.jpg" alt="Product">
        <div class="productTextArea">
            <h1>Taro Milktea</h1>
            <h3>A creamy and luscious beverage that combines the earthy sweetness of taro with velvety milk, creating a delightful and satisfying drink.</h3>
        </div>
        <div class="priceArea">
            <h2>Price<span class="priceSpan" style="float:right;">₱170</span></h2>
        </div>
        <div class="addToCartBtn">
            <input type="hidden" name="quantity6">
            <input type="hidden" name="productName6" value="Taro Milktea">
            <input type="hidden" name="price6" value="170">
            <button type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i>ADD TO CART</button>
        </div>
    </div>
    <div class="productCard drinks">
        <img src="assets/imgs/pic7.jpg" alt="Product">
        <div class="productTextArea">
            <h1>Okinawa Milktea</h1>
            <h3>Embark on a flavorful journey with Okinawa Milk Tea, a delightful blend of rich black tea and brown sugar syrup, capturing the essence of Okinawa.</h3>
        </div>
        <div class="priceArea">
            <h2>Price<span class="priceSpan" style="float:right;">₱170</span></h2>
        </div>
        <div class="addToCartBtn">
            <input type="hidden" name="quantity7">
            <input type="hidden" name="productName7" value="Okinawa Milktea">
            <input type="hidden" name="price7" value="170">
            <button type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i>ADD TO CART</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".filter-checkbox").on("change", function() {
                var category = $(this).attr("id");

                if ($(this).is(":checked")) {
                    $(".productCard." + category).show();
                } else {
                    $(".productCard." + category).hide();
                }
            });
        });
    </script>
    
    <script>
document.addEventListener('DOMContentLoaded', function() {
  // Create the form element
  const form = document.createElement('form');
  form.classList.add('productForm');

  // Get all the "Add to Cart" buttons
  const addToCartButtons = document.querySelectorAll('.addToCartBtn button[type="submit"]');

  // Add click event listener to each button
  addToCartButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
      event.preventDefault(); // Prevent the default form submission behavior

      // Get the product name and price from the clicked button's data attributes
      const productName = event.target.closest('.addToCartBtn').querySelector('[name^="productName"]').value;
      const price = parseFloat(event.target.closest('.addToCartBtn').querySelector('[name^="price"]').value);

      // Create the product container div
      const productDiv = document.createElement('div');
      productDiv.classList.add('productContainer');

      const productNameInput = document.createElement('input');
      productNameInput.type = 'hidden';
      productNameInput.name = 'productName[]';
      productNameInput.value = productName;
      productDiv.appendChild(productNameInput);

      const priceInput = document.createElement('input');
      priceInput.type = 'hidden';
      priceInput.name = 'price[]';
      priceInput.value = price;
      productDiv.appendChild(priceInput);

      // Create the product name label
      const nameLabel = document.createElement('h1');
      nameLabel.textContent = productName;
      productDiv.appendChild(nameLabel);

      // Create the quantity label and input
      const quantityLabel = document.createElement('h3');
      quantityLabel.textContent = 'Quantity: ';
      const quantityInput = document.createElement('input');
      quantityInput.type = 'number';
      quantityInput.name = 'quantity[]';
      quantityInput.addEventListener('input', updatePrice); // Add event listener to update price on input change
      productDiv.appendChild(document.createElement('br'));
      productDiv.appendChild(quantityLabel);
      productDiv.appendChild(quantityInput);

      // Create the price label
      const priceLabel = document.createElement('h3');
      priceLabel.textContent = 'Price: ₱' + price.toFixed(2);
      priceLabel.id = 'priceLabel';
      productDiv.appendChild(document.createElement('br'));
      productDiv.appendChild(priceLabel);

      // Create the remove button
      const removeButton = document.createElement('button');
      removeButton.textContent = 'X | Remove';
      removeButton.addEventListener('click', () => {
        productDiv.remove();
      });
      productDiv.appendChild(document.createElement('br'));
      productDiv.appendChild(removeButton);

      // Function to update the price based on the quantity entered
      function updatePrice() {
        const quantity = parseInt(quantityInput.value);
        const totalPrice = price * quantity;
        priceLabel.textContent = 'Price: ₱' + totalPrice.toFixed(2);
      }

      // Append the product container to the form
      form.appendChild(productDiv);
    });
  });

  // Create the "Place Order" button
  const placeOrderButton = document.createElement('button');
  placeOrderButton.textContent = 'Place Order';
  placeOrderButton.classList.add('placeOrderButton');
  placeOrderButton.type = 'submit';
  placeOrderButton.addEventListener('click', () => {
    form.action = 'orderDetails.php';
    form.method = 'POST';
    form.submit();
  });
  form.appendChild(document.createElement('br'));
  form.appendChild(placeOrderButton);

  // Append the form to the sidebar
  const sidebarDiv = document.querySelector('#sidebar');
  sidebarDiv.appendChild(form);
});
</script>
</body>
</html>