
<?php

$conn=mysqli_connect("localhost:3308 ","root","","hello"); 

	if (isset($_POST['submit'])) 
	{
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if ($password != $cpassword) 
		{
			?>
			<script type="text/javascript">
				alert("Password and Confirm Password not match!");
			</script>
			<?php	
			die();
		}

		$esql = "SELECT 1 FROM `user` WHERE `email` = '$email'";
		$erun = mysqli_query($conn, $esql);

		if (mysqli_num_rows($erun) > 0) 
		{
			?>
			<script type="text/javascript">
				alert("Email Aleready Exist!");
			</script>
			<?php	
			die();
		}
		
		$sql = "INSERT INTO `user`(`name`, `mobile`, `address`, `email`, `password`, `cpassword`) VALUES ('$name', '$mobile', '$address', '$email', '$password', '$cpassword')";
		$run = mysqli_query($conn, $sql);
		
		if ($run == true) 
		{
			?>

			<script>
				alert("User Registration Successfully !");
				window.open('home.php');
			</script>

			<?php
		}
		else
		{
    		echo "ERROR: $sql. " . mysqli_error($conn);
		}
	}
?>