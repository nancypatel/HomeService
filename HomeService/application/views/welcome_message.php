<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/material-design-iconic-font.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/animate.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/hamburgers.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/animsition.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/select2.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/Login/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url() ?>Assets/Images/img1.png');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form name="logform" class="login100-form validate-form" action="http://localhost/HomeService/HomeService/login_validation" method="POST">
					<span class="login100-form-title p-b-49">
						Login
					</span>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Email is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" ng-model="email" name="email" id="email" placeholder="Type your email Address">
						<span class="focus-input100" data-symbol=""></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" ng-model="pass" name="pass" id="pwd" placeholder="Type your password">
						<span class="focus-input100" data-symbol=""></span>
					</div>
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a class="login100-form-btn" href="<?php echo base_url(); ?>index.php/Register">Register</a>
						</div>
					</div>
					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>
					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

	<script type="text/javascript" async="" src="Assets/js/Login/analytics.js"></script>
	<script src="Assets/js/Login/jquery-3.js" type="text/javascript"></script>

	<script src="<?php echo base_url() ?>Assets/js/Login/animsition.js" type="text/javascript"></script>

	<script src="<?php echo base_url() ?>Assets/js/Login/popper.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>Assets/js/Login/bootstrap.js" type="text/javascript"></script>

	<script src="<?php echo base_url() ?>Assets/js/Login/select2.js" type="text/javascript"></script>

	<script src="<?php echo base_url() ?>Assets/js/Login/moment.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>Assets/js/Login/daterangepicker.js" type="text/javascript"></script>

	<script src="<?php echo base_url() ?>Assets/js/Login/countdowntime.js" type="text/javascript"></script>

	<script src="<?php echo base_url() ?>Assets/js/Login/main.js" type="text/javascript"></script>

	<script async="" src="Login%20V4_files/js" type="text/javascript"></script>
	<script type="text/javascript">
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>


	<script src="Assets/js/21c1e810f7f98f00b3.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>Assets/js/Login/lat"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>Assets/js/Login/lt"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>Assets/js/Login/int.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>Assets/js/Login/api.txt"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>Assets/js/Login/21c1e810f7f98f00b3_002.js"></script>
</body>

</html>