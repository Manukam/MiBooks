<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $book_details[0]->book_name . ' - ' . $book_details[0]->author_name;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
	<!-- <script src="main.js"></script> -->
	<link href="<?php echo asset_url() . 'css/materialIcon.css'?>" rel="stylesheet">
	<link href="<?php echo asset_url() . 'css/materialize.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo asset_url() . 'css/style.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
	<?php include('navbar.php');?>
	<div class="row">
		<div class="col s12 m3">
			<img class="materialboxed" width="300" src="<?php echo asset_url() . 'images/books/'.$book_details[0]->id.'.jpg' ?>">
		</div>
		<div class="col s12 m6">
			<h5>
				<?php echo $book_details[0]->book_name; ?>
			</h5>
			<h6>
				<?php echo $book_details[0]->author_name;?>
			</h6>
			<hr>

			<p class="book-description"> The first book from the basketball superstar Kobe Bryant―a lavish, deep dive inside the
				mind of one of the most
				revered athletes of all time <br>

				In the wake of his retirement from professional basketball, Kobe “The Black Mamba” Bryant has decided to share his
				vast knowledge and understanding of the game to take readers on an unprecedented journey to the core of the
				legendary “Mamba mentality.” Citing an obligation and an opportunity to teach young players, hardcore fans, and
				devoted students of the game how to play it “the right way,” The Mamba Mentality takes us inside the mind of one of
				the most intelligent, analytical, and creative
			</p>
		</div>

		<div class="col s12 m3">
			<div class="card small price-card">
				<div class="card-content">
					<span class="card-title category-name activator grey-text text-darken-4">Buy New</span>
					<span class="right"> Rs. 2100.00 </span>
					<!-- <p><a href="#">Browse</a></p> -->
					<label>Qty</label>
					<div class="input-field col s12 left">
						<select id="book_quantity">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>

					</div>

				</div>
				<div class="card-action cart-btn" id="<?php  echo $book_details[0]->id;?>">
					<a class="waves-effect waves-light btn center">Add to Cart</a>
				</div>
			</div>
		</div>
	</div>
	<hr class="hr_line">

	<div class="container">
		<div class="section">


			<h5> Customers who viewed this also viewed </h5>
			<div class="horizontal-scroll">
				<?php foreach ($category_books as $m_viewed_book) {

    ?>
				<div class="card medium custom-height card-1">
					<div class="card-image">
						<img class="activator resize" src="<?php echo asset_url() . 'images/books/'.$m_viewed_book->id.'.jpg' ?>">
					</div>
					<div class="card-content">
						<span class="card-title bname card-text">
							<?php echo $m_viewed_book->book_name; ?></span>
						<span class="card-content card-text">
							<?php echo $m_viewed_book->author_name; ?></span>

						<hr>
						<i class="material-icons">attach_money</i>35.00
						<p><a href="#">Add to Cart</a></p>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
	<hr class="hr_line">

	<div class="container">
		<div class="section">


			<h5> Your recently viewed books </h5>
			<div class="horizontal-scroll">
				<?php foreach ($recent_books as $recent_viewed_book) {

    ?>
				<div class="card medium custom-height card-1">
					<div class="card-image">
						<img class="activator resize" src="<?php echo asset_url() . 'images/books/'.$recent_viewed_book->id.'.jpg' ?>">
					</div>
					<div class="card-content">
						<span class="card-title bname card-text">
							<?php echo $recent_viewed_book->book_name; ?></span>
						<span class="card-content card-text">
							<?php echo $recent_viewed_book->author_name; ?></span>

						<hr>
						<i class="material-icons">attach_money</i>35.00
						<p><a href="#">Add to Cart</a></p>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>

	<?php include("footer.php");?>

</body>
<script src="<?php echo asset_url() . 'js/jquery-2.2.1.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/velocity.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/sweetalert.min.js' ?>"></script>	
<script src="<?php echo asset_url() . 'js/materialize.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/init.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/custom.js' ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo asset_url() . 'js/datatable.js' ?>"></script>

</html>
