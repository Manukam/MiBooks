<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shopping Cart</title>
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
		<h2 class="sub-heading">Free shipping from Rs. 2500!</h2>

		<section class="shopping-cart">
			<ol class="ui-list shopping-cart--list" id="shopping-cart--list">

				<!-- <script id="shopping-cart--list-item-template" type="text/template"> -->
				<?php if($shoppingItems === NULL) {
						echo "<p> Shopping Cärt Empty";
						// var_dump($shopping_items);die();
				}else{
					foreach($shoppingItems as $items){ 
						// var_dump($shopping_items);die();
					foreach($items as $item) {?>
				<li class="grid shopping-cart--list-item">
					<div class="_column product-image">
						<img class="product-image" src="<?php echo asset_url(). 'images/books/' . $item->id .'.jpg' ?>" alt="Item image" />
					</div>
					<div class="_column product-info">
						<h4 class="product-name">
							<?php echo $item->book_name?>
						</h4>
						<p class="product-desc">
							<?php echo $item->author_name;?>
						</p>
						<!-- <div class="price product-single-price">1234</div> -->
					</div>
					<div class="_column product-modifiers">
						<div class="grid">
							<button class="_btn _column product-subtract" id='<?php echo $item->id;?>' onClick="removeOne(this.id)">&minus;</button>
							<div class="_column product-qty" id="product-quantity">
								<?php echo  $item->quantity;?>
							</div>
							<button class="_btn _column product-plus" id='<?php echo $item->id;?>' onClick="addOne(this.id)">&plus;</button>
						</div>
						<button class="_btn entypo-trash product-remove" id='<?php echo $item->id;?>' onClick="removeItem(this.id)">Remove</button>
						<div class="price product-total-price" id="total_price">Rs. <?php echo $item->total_price;?></div>
					</div>
				</li>
				<?php }}} ?>
				<!-- </script> -->

			</ol>

			<footer class="grid cart-totals">
				<div class="_column subtotal" id="subtotalCtr">
					<div class="cart-totals-key">Subtotal</div>
					<div class="cart-totals-value">Rs. <?php echo $subTotal;?></div>
				</div>
				<div class="_column shipping" id="shippingCtr">
					<div class="cart-totals-key">Shipping</div>
					<div class="cart-totals-value">Rs. 250</div>
				</div>
				<div class="_column taxes" id="taxesCtr">
					<div class="cart-totals-key">Taxes (5%)</div>
					<div class="cart-totals-value">Rs. <?php echo $tax; ?></div>
				</div>
				<div class="_column total" id="totalCtr">
					<div class="cart-totals-key">Total</div>
					<div class="cart-totals-value">Rs. <?php echo $totalMoney;?></div>
				</div>
				<div class="_column checkout">
					<button class="_btn checkout-_btn entypo-forward">Checkout</button>
				</div>
			</footer>

		</section>
	</div>

	<?php include("footer.php");?>
</body>
<script src="<?php echo asset_url() . 'js/jquery-2.2.1.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/velocity.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/sweetalert.min.js' ?>"></script>	
<script src="<?php echo asset_url() . 'js/materialize.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/init.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/custom.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/shopping_cart.js' ?>"></script>
</html>
