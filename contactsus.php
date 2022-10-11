<?php
include('header1.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Get In Touch Section</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
   
form{
  width: 500px;
  background-color: transparent;
  margin: auto;
  margin-top: 5%;
  border-radius: 50px;
  border:1px solid white;
  height: 600px;

}
form h2{
  text-align: center;
  font-size: 40px;
  color:aliceblue;
  font-family: Arial, Helvetica, sans-serif;
  padding-top: 30px;
  padding-bottom: 30px;
}
input{
  width: 80%;
  margin: auto;
  border: none;
  background: transparent;
  border-bottom: 1px solid white;
  margin-left: 10%;
  margin-right: 10%;
  font-size: 20px;
  color:white;
  margin-top: 20px;
}
input::placeholder{
  color:aliceblue;
  font-size: 20px;
}
form textarea{
  width: 80%;
  height: 100px;
  margin: auto;
  margin-left: 10%;
  font-size: 20px;
  margin-top: 20px;
  border: none;
  border-radius: 10px;
  color: white;
  padding-left: 10px;
  background-color: transparent;
  border: 1px solid white;
}
textarea::placeholder{
  color: white;
}
form button{
  width: 50%;
  color:white;
  background-color: red;
  border: none;
  margin-left: 25%;
  margin-right: 25%;
  padding: 10px 15px;
  border-radius: 40px;
  font-size: 20px;
  margin-top: 40px;
}
</style>

</head>

<body>
<section class="home" id="home">
    <form>
		
		<h2>Get in Touch with Us</h2>
		<form action="registerback.php" method="post">
			<input class="" type="text" name="name" value="" placeholder="Enter your Name here" required>

			<input class="" type="text" name="mobile" value="" placeholder="Enter your Mobile Number here" maxlength="10" required>

			<input class="" type="email" name="email" value="" placeholder=" Enter your Email here" required>

			<textarea class="" name="message" placeholder="Enter your message here..." required></textarea>
			
		<button tytype="submit" name="message" value="message">Submit</button>

	
		</form>
    </section>
</body>
</html>