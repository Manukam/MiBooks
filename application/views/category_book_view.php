<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Category View</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo asset_url() . 'css/materialIcon.css'?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link href="<?php echo asset_url() . 'css/materialize.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo asset_url() . 'css/style.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />

</head>

<body>
	<?php include('navbar.php');?>
	<div class="container">
		<div class="section">
			<p class="category-heading "> <?php echo $sub_category_name[0]->sub_cat_name;?> </p>
			<p class="category-description">Find your new favorite book in<?php echo $sub_category_name[0]->sub_cat_name;?>. Plus, see our picks for the best <?php echo $sub_category_name[0]->sub_cat_name;?> books of the month. </p>
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
		<div class="parallax"><img src=<?php echo asset_url() . 'images/category/cat.jpg' ?> alt="Unsplashed background
			img
			1"></div>
	</div>

	<div class="container">
		<div class="section">


			<h5> Most viewed Biographies and Memoirs </h5>
			<div class="horizontal-scroll">
				<?php foreach ($category_books as $m_viewed_book) {

    ?>			<a href="<?php echo base_url().'/Book_controller/view_book/'.$m_viewed_book->id;?>">
				<div class="card medium custom-height card-1">
					<div class="card-image">
						<img class="activator resize" src="<?php echo asset_url() . 'images/books/'.$m_viewed_book->id.'.jpg' ?>">
					</div>
					<div class="card-content card-text">
						<span class="card-title bname">
							<?php echo $m_viewed_book->book_name; ?></span>
						<span class="card-content card-text">
							<?php echo $m_viewed_book->author_name; ?></span>

						<hr>
						<i class="bname">Rs. <?php echo $m_viewed_book->price; ?> </i>
						<!-- <p><a href="#">View Book</a></p> -->
					</div>
					
				</div>
				</a>
				<?php }?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="section">
				<h4> List of Books </h4>
				<table id="book_list" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th></th>
							<th>Book Name</th>
							<th>Author</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
					
					</tbody>
				</table>
			</div>
		</div>

		<?php include("footer.php"); ?>
</body>
<script src="<?php echo asset_url() . 'js/jquery-2.2.1.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/velocity.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/materialize.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/init.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/custom.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/category_view.js' ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo asset_url() . 'js/datatable.js' ?>"></script>

</html>
