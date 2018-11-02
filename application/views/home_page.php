<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Parallax Template - Materialize</title>

	<!-- CSS  -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous"> -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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


	<div class="container">
		<div class="section">

			<!--   Icon Section   -->
			<!-- <div class="row">
        <div class="col s12 m1">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h6 class="center">Arts and Photography</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div> -->
			<h5> Shop By Category </h5>
			<div class="row">
				<div class="col s12 m4">
				<a href="<?php echo base_url() . 'index.php/Category_books/view_category/1'; ?>">
					<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo asset_url() . 'images/arts.jpg' ?>">
						</div>
						<div class="card-content">
							<span class="card-title category-name activator grey-text text-darken-4">Arts and Photography</span>
							<p><a href="#">Browse</a></p>
						</div>
					</div>
					</a>
				</div>


				<div class="col s12 m4">
					<a href="<?php echo base_url() . 'index.php/Category_books/view_category/2'; ?>">
						<div class="card small">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="<?php echo asset_url() . 'images/bio.jpg' ?>">
							</div>
							<div class="card-content">
								<span class="card-title category-name activator grey-text text-darken-4">Biographies & Memoirs</span>
								<p><a href="#">Browse</a></p>
							</div>
						</div>
						</a>
				</div>
				

				<div class="col s12 m4">
				<a href="<?php echo base_url() . 'index.php/Category_books/view_category/3'; ?>">
					<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo asset_url() . 'images/cook.jpg' ?>">
						</div>
						<div class="card-content">
							<span class="card-title category-name activator grey-text text-darken-4">Cookbooks, Food and Wine</span>
							<p><a href="#">Browse</a></p>
						</div>
					</div>
					</a>
				</div>
				

				<div class="col s12 m4">
				<a href="<?php echo base_url() . 'index.php/Category_books/view_category/4'; ?>">
					<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo asset_url() . 'images/children.jpg' ?>">
						</div>
						<div class="card-content">
							<span class="card-title category-name activator grey-text text-darken-4">Children's Books</span>
							<p><a href="#">Browse</a></p>
						</div>
					</div>
					</a>
				</div>

				<div class="col s12 m4">
				<a href="<?php echo base_url() . 'index.php/Category_books/view_category/5'; ?>">
					<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo asset_url() . 'images/romance.jpg' ?>">
						</div>
						<div class="card-content">
							<span class="card-title category-name activator grey-text text-darken-4">Romace</span>
							<p><a href="#">Browse</a></p>
						</div>
					</div>
					</a>
				</div>

				<div class="col s12 m4">
				<a href="<?php echo base_url() . 'index.php/Category_books/view_category/6'; ?>">
					<div class="card small">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="<?php echo asset_url() . 'images/fantasy.jpg' ?>">
						</div>
						<div class="card-content">
							<span class="card-title category-name activator grey-text text-darken-4">Sci-Fi and Fantasy</span>
							<p><a href="#">Browse</a></p>
						</div>
					</div>
					</a>
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
		<div class="parallax"><img src=<?php echo asset_url() . 'images/image7.jpg' ?> alt="Unsplashed background img 2"></div>
	</div>

	<div class="container">
		<div class="section">

			<div class="row">
				<div class="col s12 center">
					<h3><i class="mdi-content-send brown-text"></i></h3>
					<h4>Most Viewed Books</h4>
					<!-- <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id
            nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies
            eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et
            pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed.
            Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam
            eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae;</p> -->
					<div class="horizontal-scroll">
						<?php foreach ($most_viewed as $m_viewed_book) {

    ?>
						<!-- <div class="horizonatal-scroll"> -->
						<div class="card medium custom-height hover-reveal">
							<div class="card-image">
								<img class="activator resize" src="<?php echo asset_url() . 'images/books/history.jpg' ?>">
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

	<footer class="page-footer teal">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Company Bio</h5>
					<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our
						full time job. Any amount would help support and continue development on this project and is greatly
						appreciated.</p>


				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Settings</h5>
					<ul>
						<li><a class="white-text" href="#!">Link 1</a></li>
						<li><a class="white-text" href="#!">Link 2</a></li>
						<li><a class="white-text" href="#!">Link 3</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Connect</h5>
					<ul>
						<li><a class="white-text" href="#!">Link 1</a></li>
						<li><a class="white-text" href="#!">Link 2</a></li>
						<li><a class="white-text" href="#!">Link 3</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
			</div>
		</div>
	</footer>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
	<script src="<?php echo asset_url() . 'js/materialize.js' ?>"></script>
	<script src="<?php echo asset_url() . 'js/init.js' ?>"></script>
	<script src="<?php echo asset_url() . 'js/custom.js' ?>"></script>

</body>

</html>
