<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo asset_url() . 'css/materialize.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo asset_url() . 'css/style.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo asset_url() . 'css/shopping_cart.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />

</head>

<body>
    <?php echo include('navbar.php');?>
	<div class="main">
		<h1>Shopping cart</h1>
		<h2 class="sub-heading">Free shipping from $100!</h2>

		<section class="shopping-cart">
			<ol class="ui-list shopping-cart--list" id="shopping-cart--list">

				<!-- <script id="shopping-cart--list-item-template" type="text/template"> -->
					<li class="_grid shopping-cart--list-item">
          <div class="_column product-image">
            <img class="product-image" src="<?php echo asset_url(). 'images/books/fear.jpg' ?>" alt="Item image" />
          </div>
          <div class="_column product-info">
            <h4 class="product-name">Book name</h4>
            <p class="product-desc">lala</p>
            <div class="price product-single-price">1234</div>
          </div>
          <div class="_column product-modifiers">
            <div class="_grid">
              <button class="_btn _column product-subtract">&minus;</button>
              <div class="_column product-qty">0</div>
              <button class="_btn _column product-plus">&plus;</button>
            </div>
            <button class="_btn entypo-trash product-remove">Remove</button>
            <div class="price product-total-price">$0.00</div>
          </div>
        </li>
      <!-- </script> -->

			</ol>

			<footer class="_grid cart-totals">
				<div class="_column subtotal" id="subtotalCtr">
					<div class="cart-totals-key">Subtotal</div>
					<div class="cart-totals-value">$0.00</div>
				</div>
				<div class="_column shipping" id="shippingCtr">
					<div class="cart-totals-key">Shipping</div>
					<div class="cart-totals-value">$0.00</div>
				</div>
				<div class="_column taxes" id="taxesCtr">
					<div class="cart-totals-key">Taxes (6%)</div>
					<div class="cart-totals-value">$0.00</div>
				</div>
				<div class="_column total" id="totalCtr">
					<div class="cart-totals-key">Total</div>
					<div class="cart-totals-value">$0.00</div>
				</div>
				<div class="_column checkout">
					<button class="_btn checkout-btn entypo-forward">Checkout</button>
				</div>
			</footer>

		</section>
	</div>
</body>

</html>