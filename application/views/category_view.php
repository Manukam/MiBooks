<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $category_name[0]->cat_name; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
	<!-- <script src="main.js"></script> -->
	<link href="<?php echo asset_url() . 'css/materialIcon.css'?>" rel="stylesheet">
	<link href="<?php echo asset_url() . 'css/materialize.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo asset_url() . 'css/style.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css"/> -->
	</head>

<body>
	<?php include 'navbar.php';
?>
	<div class="container">
		<div class="section">
			<p class="category-heading  "> <?php echo $category_name[0]->cat_name; ?> </p>
			<p class="category-description">Find your new favorite book in <?php echo $category_name[0]->cat_name; ?>. Plus, see our picks for the best <?php echo $category_name[0]->cat_name; ?> books of the month. </p>
		</div>
	</div>

	<div id="index-banner" class="parallax-container">
		<div class="section no-pad-bot">
			<div class="container">
				<br><br>
				<!-- <h1 class="header center teal-text text-lighten-2">Parallax Template</h1> -->
				<div class="row center">
					<!-- <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5> -->
				</div>
				<div class="row center">
				</div>
				<br><br>

			</div>
		</div>
		<div class="parallax"><img src="<?php echo asset_url() . 'images/category/'. $category_name[0]->cat_name; ?>.jpg" alt="Unsplashed background
			img
			1"></div>
	</div>

	<div class="container">
		<div class="section">
			<h5> Shop By Category </h5>

			<div class="row">
				<?php foreach($sub_categories as $sub){ ?>
				<div class="col s12 m3">
					<a href="<?php echo base_url(). '/Category_books/view_category_books/'. $sub->main_category .'/'. $sub->sub_category?>">
						<div class="card small card-1 image-resize">
							<div class="card-image category-card">
								<img class="activator category" src="<?php echo asset_url() . 'images/books/'. $images_sub_cat[$sub->sub_category] .'.jpg' ?>">
							</div>
							<div class="card-content">
								<span class="card-title category-name activator grey-text text-darken-4 wrap-text">
									<?php echo $sub->sub_cat_name;?></span>
								<p><a href="#">Browse</a></p>
							</div>
						</div>
					</a>
				</div>
				<?php }?>
			</div>
		</div>
	</div>



	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<!-- <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5> -->
				</div>
			</div>
		</div>
		<div class="parallax"><img src="<?php echo asset_url() . 'images/category/'. $category_name[0]->cat_name; ?>2.jpg" alt="Unsplashed background img 3"></div>
	</div>



	<div class="container">
		<div class="section">


			<h5> Most viewed  <?php echo $category_name[0]->cat_name; ?> Books </h5>
			<div class="horizontal-scroll">
				<?php foreach ($category_books as $m_viewed_book) {

    ?>          <a href="<?php echo base_url().'/Book_controller/view_book/'.$m_viewed_book->id;?>">
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
						<i class="bname">Rs. <?php echo $m_viewed_book->price; ?> </i>
						<!-- <p class="card-text"><a href="#">Add to Cart</a></p> -->
					</div>
					
				</div>
				</a>
				<?php }?>
				</div>
			</div>
		</div>
		<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<!-- <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5> -->
				</div>
			</div>
		</div>
		<div class="parallax"><img src="<?php echo asset_url() . 'images/image4.jpg' ?>" alt="Unsplashed background img 3"></div>
	</div>

		<?php include('footer.php');  ?>
</body>
<script src="<?php echo asset_url() . 'js/jquery-2.2.1.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/velocity.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/materialize.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/init.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/custom.js' ?>"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script> -->

</html>
