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
							<!-- <a href="#t5">
								<li class="" id="cinco"></li>
							</a> -->
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
											<div class="card medium custom-height hover-reveal card-1">
												<div class="card-image">
													<img class="activator resize" src="<?php echo asset_url() . 'images/books/'. $m_viewed_book->id .'.jpg' ?>">
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
										<p> Halo halo </p>

						</div>




						<!-- <div class="page" id="p3">
							<section class="icon fa fa-rocket"><span class="title">Rocket</span></section>
						</div> -->




						<!-- <div class="page" id="p4">
							<section class="icon fa fa-dribbble">
								<span class="title">Dribbble</span>
								<p class="hint">
									<a href="https://dribbble.com/albertohartzet" target="_blank">Im ready to play, <span class="hint line-trough">invite
											me </span> find me</a>
								</p>
								<p class="hint">Already invited by <a href="http://www.dribbble.com/mrpeters" target="_blank">Stan Peters</a></p>
							</section>
						</div> -->



						<!-- <div class="page" id="p5">
							<section class="icon fa fa-plus-circle">
								<span class="title">More</span>
								<p class="hint">
									<span>You love one page & CSS only stuff? </span><br />
									<a href="https://codepen.io/hrtzt/details/pgXMYb/" target="_blank">check this pen "Pure CSS One page vertical
										navigation"</a>
								</p>
							</section>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script>
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: ["Biographies & Memoirs", "Romance", "Children's Books", "Sci-Fi & Fantasy", "Arts & Photography",
				"Cookbooks"
			],
			datasets: [{
				label: '# of Votes',
				data: [12, 19, 3, 5, 2, 3],
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
						beginAtZero: true
					}
				}]
			}
		}
	});

</script>

</html>
