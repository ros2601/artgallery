<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Signup</title>
	<!-- font awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css"  href="register.css" href="bootstrap/css/bootstrap.min.css">

	<style>
	
	</style>
</head>
<body>
	<div class="wrap">
		
		<h2>Register</h2>
		<form action="registerback.php" method="post">
			<input class="" type="text" name="name" value="" placeholder="Name" required>

			<input class="" type="number" name="mobile" value="" placeholder="Mobile Number" required>

			<input class="" type="email" name="email" value="" placeholder="Email" required>

			<textarea class="" name="address" placeholder="Address" required></textarea>
			
			<input class="" type="password" name="password" value="" placeholder="Password" required>

			<input class="" type="password" name="cpassword" value="" placeholder="Confirm Password" required>

			<input type="submit" name="submit" value="Register" class="">

			<h6 class="pt-3">Aleready Have an Acccount? <a href="login.php">Login</a></h6>
		</form>
	</div>
	
	
		<script src="bootstrap/jss/jquery.min.js"></script>
		<script src="bootstrap/jss/popper.min.js"></script>
		<script src="bootstrap/jss/bootstrap.min.js"></script>
</body>
