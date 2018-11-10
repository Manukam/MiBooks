<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<div class="navbar-fixed">
	<nav class="white">
		<div class="nav-wrapper">
			<div class="foo">
				<a href="<?php echo base_url() . 'Home_Controller/home_page' ?>">
					<span class="letter" data-letter="B">B</span>
					<span class="letter" data-letter="O">O</span>
					<span class="letter" data-letter="O">O</span>
					<span class="letter" data-letter="K">K</span>
					<span class="letter" data-letter="E">E</span>
					<span class="letter" data-letter="D">D</span>
					<span class="letter" data-letter="-">-</span>

					<span class="letter" data-letter="U">U</span>
					<span class="letter" data-letter="P">P</span>
					<span class="letter" data-letter="!">!</span>



				</a>
				<ul class="right hide-on-med-and-down">
					<!-- <li><a href="sass.html">Shop</a></li> -->
					<!-- <li><a href="badges.html">Blog</a></li> -->
					<li><a class="icon-wrapper" href="<?php echo base_url(). 'Shopping_cart_controller/view_cart';?>">
							<div class="icon-wrapper">
                <?php 
                  $number_nav = $this->session->userdata('cart');
                  $length = sizeof($number_nav);
                  // $this->session->set_userdata('cart',$shopping_items);
                ?>
								<i class="fa fa-shopping-cart fa-2x navbar-icon"></i>
								<span class="badge pink" data-badge-caption="" id="navbar-count"><?php echo $length; ?></span> </a>
				</ul>
			</div>
	</nav>
</div>