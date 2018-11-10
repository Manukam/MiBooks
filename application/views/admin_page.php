<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<title>Admin Dashboard</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link href="<?php echo asset_url() . 'css/select2.css' ?>" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo asset_url() . 'css/admin_page.css' ?>" />
	<link href="<?php echo asset_url() . 'css/materialIcon.css'?>" rel="stylesheet">
	<link href="<?php echo asset_url() . 'css/materialize.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo asset_url() . 'css/style.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="<?php echo asset_url() . 'css/tagify.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url() . 'css/datatable.css'?>">

</head>

<body>

	<div class="navbar-fixed">
		<nav class="white">
			<div class="nav-wrapper">
				<div class="foo">
					<a href="<?php echo base_url() . 'index.php/Home_Controller/home_page' ?>">
						<span class="letter" data-letter="B">B</span>
						<span class="letter" data-letter="O">O</span>
						<span class="letter" data-letter="O">O</span>
						<span class="letter" data-letter="K">K</span>
						<span class="letter" data-letter="E">E</span>
						<span class="letter" data-letter="D">D</span>
						<span class="letter" data-letter="-">-</span>

						<span class="letter" data-letter="U">U</span>
						<span class="letter" data-letter="P">P</span>
						<span class="letter" data-letter="!">!</span> </a>
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
							<a href="#t2">
								<li class="icon fa fa-plus-circle" id="dos"></li>
							</a>
							<a href="#t5">
								<i class="icon fas fa-search"></i>
							</a>
						</ul>

						<div class="page" id="p1">

							<div class="section" id="stats">
								<div class="row">
									<div class="col s12 m3">
										<div class="card-custom card-1">
											<p>Total Visitors</p>
											<!-- <i cl	ass="fas fa fa-chart-line left admin-icons-1"></i> -->
											<!-- <span id="stat-number" class="step color-1">
												<?php echo $total_visitors; ?></span> -->
											<canvas id="bar-chart-grouped" width="800" height="450" class="stats-graph"></canvas>
										</div>
									</div>
									<div class="col s12 m3">
										<div class="card-custom card-1 left">
											<p>Total Page Views </p>
											<!-- <i class="fas fa fa-chart-line left admin-icons-2"></i> -->
											<canvas id="bar-chart-grouped2" width="800" height="450" class="stats-graph"></canvas>
										</div>
									</div>
									<div class="col s12 m3">
										<div class="card-custom card-1 left">
											<p>Unique Visitors</p>
											<!-- <i class="fas fa fa-chart-line left admin-icons-3"></i> -->
											<canvas id="bar-chart-grouped3" width="800" height="450" class="stats-graph"></canvas>
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
													<i class="fas fa-eye"></i>
													<?php echo $m_viewed_book->NUM; ?>
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
										<p class="admin-heading chart-heading"> Most Viewed Catagories </p>
										<div class="card-chart card-1">
											<canvas id="myChart"></canvas> </div>
									</div>
								</div>
							</div>

							<div class="section">
								<div class="row">

									<div class="chart-view">
										<p class="admin-heading chart-heading"> Total Visits Per Day </p>
										<div class="card-chart card-1">
											<canvas id="line-user-chart"></canvas> </div>
									</div>
								</div>
							</div>
						</div>


						<div class="page" id="p2">
							<div class="card large form-card-custom card-1">
								<main>

									<input id="tab1" type="radio" name="tabs" checked>
									<label for="tab1">Add a Book</label>

									<input id="tab2" type="radio" name="tabs">
									<label for="tab2">Add a Category</label>


									<section id="content1">
										<div class="row">
											<div class="input-field col s12 m3">
												<div class="wrapper">
													<div class="box">
														<div class="js--image-preview"></div>
														<div class="upload-options">
															<form action="" id="form-image" enctype="multipart/form-data" method="post" accept-charset="utf-8">
																<!-- -->
																<label>
																	<input type="file" name="book_image" class="image-upload" />
																</label>
																<input type='submit' id="book_image_upload" />
															</form>
														</div>
													</div>
												</div>
											</div>

											<form class="col s12 m7">
												<div class="row">
													<div class="input-field col s12">
														<input placeholder="Book Name" id="book_name" type="text" class="custom_form" required>
														<!-- <label for="first_name">First Name</label> -->
													</div>
													<div id="validity" class="valid">
														This book already exists
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12 m7">
														<select class="author-select" id="author_select" required>
															<option value="" disabled selected>Choose Author</option>
															<?php foreach($authors as $author){ ?>
															<option value="<?php echo $author->id; ?>">
																<?php echo $author->author_name;?>
															</option>
															<?php } ?>
														</select>
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12 m7">
														<select class="js-example-basic-single book-cat-select" id="book-cat-select" required>
															<option value="" disabled selected>Book Category</option>
															<?php foreach($book_categories as $category){ ?>
															<option value="<?php echo $category->id; ?>">
																<?php echo $category->cat_name;?>
															</option>
															<?php } ?>
														</select>
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12 m7">
														<select disabled class="js-example-basic-single sub-book" id="sub-book" required>
															<option value="" disabled selected>Book Sub Category</option>

														</select>
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12 m7">
														<textarea placeholder="Book Description" class="custom_form" id="book_description"></textarea>
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12 m7">
														<input type="text" placeholder="Book Price" id="book_price" required>
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12 m7">
														<input type="submit" value="Add Book!" class="add-book-btn fancy-btn">
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
											</form>
										</div>





									</section>

									<section id="content2">
										<div class="row">
											<div class="input-field col s12 m3">
												<div class="wrapper">
													<div class="box">
														<div class="js--image-preview"></div>
														<div class="upload-options">
															<form action="" id="category-image" enctype="multipart/form-data" method="post" accept-charset="utf-8">
																<!-- -->
																<label>
																	<input type="file" name="category_image" class="image-upload" />
																</label>
																<input type='submit' id="category_image_upload" />
															</form>
														</div>
													</div>
												</div>
											</div>

											<form class="col s12 m7" id="category-form-sub">
												<div class="row">
													<div class="input-field col s12">
														<input placeholder="Category Name" id="category_name" type="text" class="validate custom_form">
														<!-- <label for="first_name">First Name</label> -->
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12">
														<input name="tags" placeholder="Write Sub Categories">
													</div>
												</div>
												<div class="row">
													<div class="input-field col s12">
														<button type="submit" id="category-btn" class="fancy-btn"> Add Category! </button>
													</div>
												</div>
											</form>
										</div>
									</section>

								</main>
							</div>
						</div>



						<div class="page" id="p5">
							<!-- <section class="icon fa fa-plus-circle"> -->
							<h4> List of Books </h4>
							<table id="book_list" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th></th>
										<th>Book Name</th>
										<th>Author</th>
										<th>Views</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($all_books as $m_viewed_book){ ?>
									<tr id="<?php echo $m_viewed_book->id;?>">
										<td><img src="<?php echo asset_url() .'images/books/'.$m_viewed_book->id.'.jpg'?>" style='height:200px;width:150px;'></td>
										<td>
											<?php echo $m_viewed_book->book_name; ?>
										</td>
										<td>
											<?php echo $m_viewed_book->author_name; ?>
										</td>
										<td>
											<p>
												<?php echo $m_viewed_book->NUM; ?>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							</section>
						</div>
					</div>
				</div>
			</div>


		</div>

</body>
<script src="<?php echo asset_url() . 'js/jquery-2.2.1.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/chart.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/selectjs.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/admin_page.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/jQuery.tagify.min.js' ?>"></script>
<script src="<?php echo asset_url() . 'js/sweetalert.min.js' ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo asset_url() . 'js/datatable.js' ?>"></script>

<script>
	var ctx = document.getElementById("myChart");
	var data = new Array();
	var labelSet = new Array();
	<?php foreach($most_viewed_categories as $key => $val){ ?>
	data.push('<?php echo $val; ?>');
	<?php } ?>

	<?php foreach($book_categories as $key=>$category){?>
	labelSet.push('<?php echo $category->cat_name;?>');
	<?php } ?>

	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: labelSet,
			datasets: [{
				label: '# of Votes',
				data: data,
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(241, 125, 12, 0.2)',
					'rgba(131, 193, 122,0.2)',
					'rgba(193, 122, 136,0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
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
						display: false,
						drawBorder: false
					}
				}],
				xAxes: [{
					gridLines: {
						display: false,
						drawBorder: false
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

	new Chart(document.getElementById("bar-chart-grouped"), {
		type: 'bar',
		data: {
			labels: ["1900", "1950", "1999", "2050"],
			datasets: [{
				label: "Africa",
				backgroundColor: "#3e95cd",
				data: [133, 221, 213, 532],
			}, {
				label: "Europe",
				backgroundColor: "#8e5ea2",
				data: [454, 547, 675, 734]
			}]
		},
		options: {
			title: {
				display: false,
				text: 'Population growth (millions)'
			},
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						display: false
					},
					gridLines: {
						display: false,
						drawBorder: false
					}
				}],
				xAxes: [{
					gridLines: {
						display: false,
						drawBorder: false
					},
					ticks: {
						display: false
					},
				}]
			}
		}
	});

	new Chart(document.getElementById("bar-chart-grouped2"), {
		type: 'bar',
		data: {
			labels: ["1900", "1950", "1999", "2050"],
			datasets: [{
				label: "Africa",
				backgroundColor: "#3e95cd",
				data: [133, 454, 783, 2478],
			}, {
				label: "Europe",
				backgroundColor: "#8e5ea2",
				data: [408, 680, 675, 332]
			}]
		},
		options: {
			title: {
				display: false,
				text: 'Population growth (millions)'
			},
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						display: false
					},
					gridLines: {
						display: false,
						drawBorder: false
					}
				}],
				xAxes: [{
					gridLines: {
						display: false,
						drawBorder: false
					},
					ticks: {
						display: false
					},
				}]
			}
		}
	});

	new Chart(document.getElementById("bar-chart-grouped3"), {
		type: 'bar',
		data: {
			labels: ["1900", "1950", "1999", "2050"],
			datasets: [{
				label: "Africa",
				backgroundColor: "#3e95cd",
				data: [133, 537, 783, 234],
			}, {
				label: "Europe",
				backgroundColor: "#8e5ea2",
				data: [408, 547, 523, 734]
			}]
		},
		options: {
			title: {
				display: false,
				text: 'Population growth (millions)'
			},
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						display: false
					},
					gridLines: {
						display: false,
						drawBorder: false
					}
				}],
				xAxes: [{
					gridLines: {
						display: false,
						drawBorder: false
					},
					ticks: {
						display: false
					},
				}]
			}
		}
	});


var daySet = new Array();
var countPerDay = new Array();
	<?php foreach($visitor_count_per_Day as $key=>$date){?>
	daySet.push('<?php echo $date->Day;?>');
	<?php } ?>

	<?php foreach($visitor_count_per_Day as $key=>$date){?>
	countPerDay.push('<?php echo $date->COUNT;?>');
	<?php } ?>

console.log(daySet);
console.log(countPerDay);
	new Chart(document.getElementById("line-user-chart"), {
		type: 'line',
		data: {
			labels: daySet,
			datasets:[{
            label: "Visits",
            borderColor: "#80b6f4",
            pointBorderColor: "#80b6f4",
            pointBackgroundColor: "#80b6f4",
            pointHoverBackgroundColor: "#80b6f4",
            pointHoverBorderColor: "#80b6f4",
            pointBorderWidth: 10,
            pointHoverRadius: 10,
            pointHoverBorderWidth: 1,
            pointRadius: 3,
            fill: false,
            borderWidth: 4,
            data: countPerDay
        }],
		},
		options: {
			title: {
				display: false,
				text: 'Total Visits Per Day'
			}
		}
	});
</script>

</html>
