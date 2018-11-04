<!DOCTYPE html>
<html>

<head>
	<!-- <meta charset="utf-8" /> -->
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<title>Page Title</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
	 crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo asset_url() . 'css/admin_page.css'?>" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?php echo asset_url() . 'css/materialize.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?php echo asset_url() . 'css/style.css' ?>" type="text/css" rel="stylesheet" media="screen,projection" />
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
								<li class="icon fa fa-bolt" id="uno"></li>
							</a>
							<a href="#t2">
								<li class="icon fa fa-keyboard" id="dos"></li>
							</a>
							<a href="#t3">
								<li class="icon fa fa-rocket" id="tres"></li>
							</a>
							<a href="#t4">
								<li class="icon fab fa-dribbble" id="cuatro"></li>
							</a>
							<a href="#t5">
								<li class="icon fa fa-plus-circle" id="cinco"></li>
							</a>
						</ul>
						<div class="page" id="p1">
							<section class="icon fa fa-bolt"><span class="title">Bolt</span><span class="hint">Like this pen to see the
									magic!...<br> Just kidding, it won't happen anything but I'll be really happy If you do so.</span></section>
						</div>
						<div class="page" id="p2">
							<section class="icon fa fa-keyboard-o"><span class="title">Type</span></section>
						</div>
						<div class="page" id="p3">
							<section class="icon fa fa-rocket"><span class="title">Rocket</span></section>
						</div>
						<div class="page" id="p4">
							<section class="icon fa fa-dribbble">
								<span class="title">Dribbble</span>
								<p class="hint">
									<a href="https://dribbble.com/albertohartzet" target="_blank">Im ready to play, <span class="hint line-trough">invite
											me </span> find me</a>
								</p>
								<p class="hint">Already invited by <a href="http://www.dribbble.com/mrpeters" target="_blank">Stan Peters</a></p>
							</section>
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
	</div>
</body>

</html>
