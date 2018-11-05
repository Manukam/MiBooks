<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<link href="<?php echo asset_url() . 'css/admin_login.css'?>" rel='stylesheet' type='text/css'>

<form method="post" action="<?php echo base_url() . 'index.php/Admin_controller/login/' ?>">
	<div class="box">
		<h1>Admin Login</h1>

		<input type="text" name="username" placeholder="email" 
		 class="email" />

		<input type="password" name="password" placeholder="email" 
		 class="email" />

		<!-- <a href="#">
			<div class="btn">Sign In</div>
		</a> End Btn -->

		<a href="#">
			<div id="btn2"><input type ="submit"></div>
		</a> <!-- End Btn2 -->

	</div> <!-- End Box -->

</form>

<p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
