<?php
$requireError="";
include('../css/loginCss.php');
include("../control/loginCheck.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		EcomPort - Everything you need in one place
	</title>
	<script src="../js/loginCheck.js"></script>
</head>
<body>
<header>
	<nav>
		<div class="logo">
			<a href="Home.php">Ecom-Port</a>
		</div>
		<div class="nav1">
			<a href="login.php">Sign-In</a>
			
			or

			<a href="Register.php">Create Account</a>
		</div>
	</nav>
	
	<div class="nav2">
		<a href="Home.php">Home</a>
		
		<a href="About.php">About Us</a>

		<a href="Contact.php">Contact Us</a>
</div>

<div class="login">
<div class="heading">
	<span>Login</span>
</div>
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
		<input type="email" name="username" id="username" placeholder="Email">
		<input type="password" name="password" id="password" placeholder="Password">
		<input type="submit" id="submit" name="submit" value="Signin">
		
		<?php echo $requireError;?>
		
		<p id="mytext"></p>
	</form>
</div>
</header>
</body>

<div class="footer">
<footer class="footer-distributed">

			<div class="footer-left">
				<h3>About<span>EcomPort</span></h3>

				<p class="footer-company-name">Copyright &copy;ecomPort.com 2019-2020.</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>Ganda, Savar
						 A 5/36</span>
						Dhaka</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+8801937818192</p>
					<p>+8801910200871</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@eduonix.com">support@ecomPort.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					We are an ecommerce company, comitted to provide the best online  shopping experience.</p>
			</div>
		</footer>
		</div>
</div>
</html>