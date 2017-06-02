
<!DOCTYPE html>
<html>
<head>
<title>Wedding Store A Ecommerce Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!-- /start menu -->
</head>
<body>

<?php 
include 'header.php';
?>

<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Employee Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>For Employees,<span> create an account </span></h2>
			 
			 <script>
				(function() {

				// Create input element for testing
				var inputs = document.createElement('input');

				// Create the supports object
				var supports = {};

				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;

				// Fallback for autofocus attribute
				if(!supports.autofocus) {

				}

				// Fallback for required attribute
				if(!supports.required) {

				}

				// Fallback for placeholder attribute
				if(!supports.placeholder) {

				}

				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}

			 })();
			 </script>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="signup.php" method="post">
					<div>
						<label>
							<input name="first" placeholder="first name:" type="text" tabindex="1" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input name="last" placeholder="last name:" type="text" tabindex="2" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input name="email" placeholder="email address:" type="email" tabindex="3" required>
						</label>
					</div>
					<div>
						<label>
							<input name="tel" placeholder="Mobile:" type="tel" tabindex="3" required>
						</label>
					</div>
						<div class="sky_form1">
							<ul>
								<li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Male</label></li>
								<li><label class="radio"><input type="radio" name="radio"><i></i>Female</label></li>
								<div class="clearfix"></div>
							</ul>
						</div>
					<div>
						<label>
							<input name="uname" placeholder="user name" type="text" tabindex="4" required>
						</label>
					</div>
					<div>
						<label>
							<input name="pass1" placeholder="password" type="password" tabindex="4" required>
						</label>
					</div>
					<div>
						<label>
							<input name="pass2" placeholder="retype password" type="password" tabindex="4" required>
						</label>
					</div>
					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to &nbsp;<a class="terms" href="#"> terms of service</a> </label>
					</div>
					<div>
						<input type="submit" value="create an account" id="register-submit">
					</div>
					
				</form>
				<!-- /Form -->
			 </div>
		 </div>
		 <div class="registration_left">
			 <h2>Have An Account</h2>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="login.php" method="post">
					<div>
						<label>
							<input name="uname" placeholder="user name" type="text" tabindex="3" required>
						</label>
					</div>
					<div>
						<label>
							<input name="pass" placeholder="password" type="password" tabindex="4" required>
						</label>
					</div>
					<div>
						<input type="submit" value="sign in" id="register-submit">
					</div>
					<div class="forget">
						<a href="#">forgot your password</a>
					</div>
				</form>
			 <!-- /Form -->
			 
			 
</body>
</html>
