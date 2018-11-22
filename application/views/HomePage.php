<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>MiBooks - Home Page</title>

	<!-- CSS  -->
	<link href="<?php echo asset_url() . 'css/materialIcon.css'?>" rel="stylesheet">
	<link href="<?php echo asset_url() . 'css/materialize.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo asset_url() . 'css/style.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
	<?php include 'navbar.php';?>

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
		<div class="parallax"><img src=<?php echo asset_url() . 'images/image15.png' ?> alt="Unsplashed background img 1"></div>
	</div>

<h4 class="home_heading"> Books at BOOKED-UP! </h4>
	<div class="container">
		<div class="section">
			<h5> Shop By Category </h5>
			<div class="row">
			<?php foreach($categories as $category){ ?>
				<div class="col s12 m4">
				
				<a href="<?php echo base_url() . 'CategoryBooks/viewCategory/' . $category->id;?>">
					<div class="card small card-1">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo asset_url() . 'images/Category/'. $category->id . '.jpg' ?>">
						</div>
						<div class="card-content">
							<span class="card-title category-name activator grey-text text-darken-4"><?php echo $category->cat_name;?></span>
							<p><a href="#">Browse</a></p>
						</div>
					</div>
				</a> 
				</div>
				<?php } ?>
			</div>
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
		<div class="parallax"><img src=<?php echo asset_url() . 'images/image7.jpg' ?> alt="Unsplashed background img 2"></div>
	</div>

	<div class="container">
		<div class="section">

			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>
					<h4>Most Viewed Books</h4>
					<div class="carousel">
						<?php foreach ($mostViewed as $mViewedBook) {

    ?>
						<!-- <div class="horizonatal-scroll"> -->
						<a class="carousel-item" href="<?php echo base_url().'/BookController/viewBook/'.$mViewedBook->id;?>">
						<div class="card medium custom-height card-1">
							<div class="card-image">
								<img class="activator resize" src="<?php echo asset_url() . 'images/books/'. $mViewedBook->id .'.jpg' ?>">
							</div>
							<div class="card-content ">
								<span class="card-title bname card-text">
									<?php echo $mViewedBook->book_name; ?></span>
								<span class="card-content card-text">
									<?php echo $mViewedBook->author_name; ?></span>

								<hr>
								<span class="card-text"><i>Rs. </i><?php echo $mViewedBook->price; ?> </span>
							</div>
						</div> </a>
						<!-- </div> -->
						<?php }?>
					</div>
				</div>
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
		<div class="parallax"><img src="<?php echo asset_url() . 'images/artsy.jpg' ?>" alt="Unsplashed background img 3"></div>
	</div>


	<div class="container">
		<div class="section">

			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>
					<h4>Newly Added Books</h4>
					<div class="horizontal-scroll">
						<?php foreach ($newlyAdded as $nAddedBook) {

    ?>
						<!-- <div class="horizonatal-scroll"> -->
						<a href="<?php echo base_url().'/BookController/viewBook/'.$nAddedBook->id;?>">
						<div class="card medium custom-height card-1">
							<div class="card-image">
								<img class="activator resize" src="<?php echo asset_url() . 'images/books/'. $nAddedBook->id .'.jpg' ?>">
							</div>
							<div class="card-content ">
								<span class="card-title bname card-text">
									<?php echo $nAddedBook->book_name; ?></span>
								<span class="card-content card-text">
									<?php echo $nAddedBook->author_name; ?></span>

								<hr>
								<span class="card-text"><i >Rs. </i><?php echo $nAddedBook->price; ?> </span>
							</div>
						</div> </a>
						<!-- </div> -->
						<?php }?>
					</div>
				</div>
			</div>

		</div>
	</div>


<?php include('footer.php');  ?>

	<!--  Scripts-->
	

</body>
	<script src="<?php echo asset_url() . 'js/jquery-2.2.1.min.js' ?>"></script>
	<script src="<?php echo asset_url() . 'js/velocity.min.js' ?>"></script>
	<script src="<?php echo asset_url() . 'js/materialize.js' ?>"></script>
	<script src="<?php echo asset_url() . 'js/init.js' ?>"></script>
	<script src="<?php echo asset_url() . 'js/custom.js' ?>"></script>
	<script src="<?php echo asset_url() . 'js/homepage.js' ?>"></script>
</html>
