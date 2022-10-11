<?php
	session_start();
?>

<?php


include('dbcon.php');

if(!empty($_REQUEST['login']))
{

        $username=$_REQUEST['uname'];
        $password=$_REQUEST['pass'];
        $_SESSION['uname']=$username;
        $query="SELECT * FROM user where name='$username' and password='$password'";
    
    if(mysqli_query($conn,$query))

        echo"<script>
        alert('Login Successful')
        window.location.href='home.php'
        </script>"; 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login</title>
	<!-- font awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<style>
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			z-index: -9999;
			height: 100vh;
			background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('b2.png') no-repeat;
    background-size: cover;
    background-position: center;
		}
		a{
			text-decoration: none;
		}
		a:hover{
			text-decoration: none;
		}
		.wrap{
			top: 25%;
			position: relative;
			max-width: 350px;
			border-radius: 20px;
			margin: auto;
			background: rgba(0,0,0,1);
			padding: 20px 40px;
			color: #fff;
			box-sizing: border-box;
			z-index: 999;		
		}
		h2{
			text-align: center;
		}
		h6{
			text-align: center;
			padding: 5px 1px;
		}
		input[type=text], input[type=number], input[type=email], input[type=text], textarea, input[type=password]{
			width: 100%;
			box-sizing: border-box;
			padding: 12px 5px;
			background: rgba(0,0,0,0.10);
			outline: none;
			border: none;
			border-bottom: 1px solid #fff;
			color: #fff;
			border-radius: 5px;
			margin: 5px;
			font-weight: bold;
		}
		input[type=submit]{
			width: 100%;
			box-sizing: border-box;
			padding: 10px 0;
			margin-top: 30px;
			outline: none;
			border: none;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border-radius: 20px;
			font-size: 20px;
			color: #fff;
		}
		input[type=submit]:hover{
			background: linear-gradient(to left, #ff105f, #ffad06);
		}
	</style>
</head>
<body>
	<div class="wrap">
		<h2>Login</h2>
		<form  method="get">
			<input class="" type="email" name="uname" placeholder="Email" value="" required>
			
			<input class="" type="password" name="pass" placeholder="Password" value="" required>

			<input type="submit" name="login" value="Login" class="">

			<h6 class="pt-3">Don't have an Acccount? <a href="register.php">Sign Up</a></h6>
		</form>
	</div>
	
	
	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>
</body>
