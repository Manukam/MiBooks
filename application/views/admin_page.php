<!DOCTYPE html>
<html>

<head>
	<!-- <meta charset="utf-8" /> -->
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<title>Page Title</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
	 crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo asset_url() . 'css/admin_page.css' ?>" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo asset_url() . 'css/materialize.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo asset_url() . 'css/style.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>

<body>

	<div class="navbar-fixed">
		<nav class="white">
			<div class="nav-wrapper">
				<div class="foo">
					<a href="<?php echo base_url() . 'index.php/Home_Controller/home_page' ?>">
						<span class="letter" data-letter="M">M</span>
						<span class="letter" data-letter="i">i</span>
						<span class="letter" data-letter="B">B</span>
						<span class="letter" data-letter="O">O</span>
						<span class="letter" data-letter="O">O</span>
						<span class="letter" data-letter="K">K</span>
						<span class="letter" data-letter="S">S</span> </a>
					<ul class="right hide-on-med-and-down">
						<li><i class="icon far fa-user"></i></li>
					</ul>
				</div>
			</div>
		</nav>

	</div>






	<div class="ct" id="t1">
		<div class="ct" id="t2">
			<div class="ct" id="t3">
				<div class="ct" id="t4">
					<div class="ct" id="t5">
						<ul id="menu">

							<a href="#t1">
								<li class="icon fa fa-chart-bar" id="uno"></li>
							</a>
							<!-- <a href="#t2">
								<li class="icon fa fa-keyboard" id="dos"></li>
							</a> -->
							<!-- <a href="#t3">
								<li class="icon fa fa-rocket" id="tres"></li>
							</a> -->
							<a href="#t2">
								<li class="icon fa fa-plus-circle" id="dos"></li>
							</a>
							<a href="#t5">
								<i class="icon fas fa-search"></i>
							</a>
						</ul>

						<div class="page" id="p1">
							<!-- <div class="section">
								<div class="row">

								</div>
							</div> -->

							<!-- <div class="section">
								<div class="row">


								</div>
							</div> -->
							<div class="section" id="stats">
								<div class="row">
									<div class="col s12 m3">
										<div class="card-custom card-1">
											<p>Total Visits</p>
											<i class="fas fa fa-chart-line left admin-icons-1"></i>
											<span id="stat-number" class="step color-1">1</span>
										</div>
									</div>
									<div class="col s12 m3">
										<div class="card-custom card-1 left">
											<p>Total Page Views </p>
											<i class="fas fa fa-chart-line left admin-icons-2"></i>
											<span id="stat-number" class="step color-2">1</span>
										</div>
									</div>
									<div class="col s12 m3">
										<div class="card-custom card-1 left">
											<p>Unique Visitors</p>
											<i class="fas fa fa-chart-line left admin-icons-3"></i>
											<span id="stat-number" class="step color-3">1</span>
										</div>

									</div>

								</div>
							</div>

							<!-- <div class="section">
								<div class="row">
									<p>Most Viewed</p>
								</div>
							</div> -->

							<div class="section">
								<div class="row">

									<div class="col s12 center">
										<!-- <h3><i class="mdi-content-send brown-text"></i></h3> -->

										<div class="horizontal-scroll-admin">
											<p class="admin-heading">Most Viewed Books</p>
											<!-- <div id="rightArrow"></div> -->
											<?php foreach ($most_viewed as $m_viewed_book) {

    ?>
											<!-- <div class="horizonatal-scroll"> -->
											<div class="card medium custom-height card-1">
												<div class="card-image">
													<img class="activator resize" src="<?php echo asset_url() . 'images/books/' . $m_viewed_book->id . '.jpg' ?>">
												</div>
												<div class="card-content">
													<span class="card-title bname">
														<?php echo $m_viewed_book->book_name; ?></span>
													<span class="card-content ">
														<?php echo $m_viewed_book->author_name; ?></span>

													<hr>
													<!-- <i class="material-icons">attach_money</i> -->
													<!-- <?php echo $m_viewed_book->price; ?> -->
													<!-- <p><a href="#">Add to Cart</a></p> -->
												</div>

											</div>
											<!-- </div> -->
											<?php }?>

										</div>

									</div>
								</div>
							</div>

							<div class="section">
								<div class="row">

									<div class="chart-view">
										<p class="admin-heading"> Most Viewed Catagories </p>
										<div class="card-chart card-1">
											<canvas id="myChart"></canvas> </div>
									</div>
								</div>
							</div>
						</div>






						<div class="page" id="p2">
							<div class="card large form-card-custom card-1">
								<main>

									<input id="tab1" type="radio" name="tabs" checked>
									<label id="book_form" for="tab1">Add a Book</label>

									<input id="tab2" type="radio" name="tabs">
									<label id="category_form" for="tab2">Add a Category</label>

									<!-- <input id="tab3" type="radio" name="tabs">
									<label for="tab3">Stack Overflow</label>

									<input id="tab4" type="radio" name="tabs">
									<label for="tab4">Bitbucket</label> -->

									<section id="content1">
										<div class="row">
											<div class="input-field col s12 m3">
												<div class="wrapper">
													<div class="box">
														<div class="js--image-preview"></div>
														<div class="upload-options">
															<label>
																<input type="file" class="image-upload" accept="image/*" />
															</label>
														</div>
													</div>
												</div>
											</div>

											<form class="col s12 m7">
												<div class="row">
													<div class="input-field col s12">
														<input placeholder="Book Name" id="first_name" type="text" class="validate custom_form">
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12 m7">
														<select class="js-example-basic-single" >
															<option value="" disabled selected>Choose Author</option>
															<option value="1">J.K Rowling</option>
															<option value="2">Stephen King</option>
															<option value="3">Stephen Hawking</option>
														</select>
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12 m7">
														<select class="js-example-basic-single" >
															<option value="" disabled selected>Book Category</option>
															<option value="1">Romance</option>
															<option value="2">Biography</option>
															<option value="3">Sci-Fi & Fantasy</option>
														</select>
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
											</form>
										</div>





									</section>

									<section id="content2">
										<p>
											Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin.
										</p>
										<p>
											Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket
											beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef
											kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket
											shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
										</p>
									</section>

								</main>
							</div>
						</div>



						<div class="page" id="p5">
							<section class="icon fa fa-plus-circle">
								<span class="title">More</span>
								<p class="hint">
									<span>You love one page & CSS only stuff? </span><br />
									<a href="https://codepen.io/hrtzt/details/pgXMYb/" target="_blank">check this pen "Pure CSS One page vertical
										navigation"</a>
								</p>
							</section>
						</div>
					</div>
				</div>
			</div>


		</div>

</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="<?php echo asset_url() . 'js/admin_page.js' ?>"></script>

<script>
	var ctx = document.getElementById("myChart");
	var data = new Array();
	<?php foreach($most_viewed_categories as $key => $val){ ?>
	data.push('<?php echo $val; ?>');
	<?php } ?>
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: ["Arts & Photography", "Biographies & Memoirs", "Cookbooks $ Wine", "Children's Books", "Romance",
				"Sci-Fi & Fantasy"
			],
			datasets: [{
				label: '# of Votes',
				data: data,
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						display: false
					},
					gridLines: {
						display: false
					}
				}],
				xAxes: [{
					gridLines: {
						display: false
					},
					ticks: {
						display: false
					}
				}]
			}
		}
	});

	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}
</script>

</html>
