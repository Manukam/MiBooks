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
						<select>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>

					</div>

				</div>
				<div class="card-action " id="<?php  echo $book_details[0]->id;?>">
					<a class="waves-effect waves-light btn center" href="<?php echo base_url() .'index.php/Shopping_cart_controller/add_to_cart/'. $book_details[0]->id; ?>">Add to Cart</a>
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
				<div class="card medium custom-height hover-reveal">
					<div class="card-image">
						<img class="activator resize" src="<?php echo asset_url() . 'images/books/'.$m_viewed_book->id.'.jpg' ?>">
					</div>
					<div class="card-content">
						<span class="card-title bname">
							<?php echo $m_viewed_book->book_name; ?></span>
						<span class="card-content ">
							<?php echo $m_viewed_book->author_name; ?></span>

						<hr>
						<i class="material-icons">attach_money</i>35.00
						<p><a href="#">Add to Cart</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">
							<?php echo $m_viewed_book->book_name; ?><i class="material-icons right">close</i></span>
						<p>Here is some more information about this product that is only revealed once hover it.</p>
						<p>Lorem ipsum dolor sit amet, et ius nostro pertinacia, nihil congue temporibus vel cu. Senserit
							petentium cum te. Ullum inermis quaerendum ex ius, sed nisl insolens te. Eu dicit laoreet sea.
							summo epicuri dissentiunt ad vel. At eam malorum percipitur, ei debet aperiri indoctum cum, tantas
							omittam ad nam. Eu per erant putent, eu has suas sale.</p>
					</div>
				</div>
				<!-- </div> -->
				<?php }?>
			</div>
		</div>

</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script src="<?php echo asset_url() . 'js/materialize.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/init.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/custom.js' ?>"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

</html>
