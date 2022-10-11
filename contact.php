<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Header</title>
    <style>/* BASIC */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a {
    text-decoration: none;
}

li {
    list-style: none;
}

/* Buttons in navbar*/
.navbar button{
background-color: green;
font-size: 17px;
color: white;
border: none;
padding:8px 12px;
border-radius: 6px;    
}
/* NAVBAR STYLING STARTS */
.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bold   ;
}

.nav-links a {
    color: rgb(255, 254, 254);
}

/* LOGO */
.logo{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 25px;
}

/* Social Media Icons */
.fb {
    padding: 5px 0px 0px 20px;
    color: rgb(255, 255, 255);
    font-weight: bold;
}

.ld {
    color: rgb(255, 255, 255);
    padding: 5px 0px 0px 20px;
    font-weight: bold;
}

.ig {
    color: rgb(255, 255, 255);
    padding: 5px 0px 0px 20px;
    font-weight: bold;
}

.fb:hover,
.ig:hover,
.ld:hover {
    color: rgb(59, 59, 59);
}


/* NAVBAR MENU */
.menu {
    display: flex;
    gap: 1em;
    font-size: 18px;
}

.menu li:hover {
    background-color: rgb(59, 59, 59);
    font-weight: bold;
}

.menu li {
    padding: 5px 14px;
}

/* DROPDOWN MENU */
.services {
    position: relative;
}

.dropdown {
    background-color: rgb(0, 0, 0);
    padding: 1em 0;
    position: absolute;
    display: none;
    border-radius: 18px;
    top: 35px;
}

.dropdown li+li {
    margin-top: 8px;
}

.dropdown li {
    padding: 0.5em 1em;
    width: 8em;
    text-align: center;
}


.dropdown li:hover {
    background-color: rgb(59, 59, 59);
}

.services:hover .dropdown {
    display: block;
}
/*seach button */
.search  button{
    color: white;
    background-color: green;
    padding: 5px 10px;
    border-radius: 5px;
    border: 1px solid white;
}

.search button:hover {
    color: green;
    border: 1px solid green;
    background-color: white;
}
/*login button */
.login a{
    color: white;
    background-color: darkorange;
    padding: 8px 10px;
    border-radius: 5px;
    border: 1px solid white;
}

.login a:hover {
    color: darkorange;
    border: 1px solid darkorange;
    background-color: white;
}
/*cart button */
.icons a{
    color: white;
    background-color: green;
    padding: 8px 12px;
    border-radius: 5px;
    border: 1px solid white;
}

.icons a:hover {
    color: green;
    border: 1px solid green;
    background-color: white;
}
/*search button */
input{
    line-height: 29px;
    border-radius: 5PX;
    padding-left:10PX;
    padding-right:10PX;
    border:1px solid grey;
}
/*RESPONSIVE NAVBAR MENU STARTS*/
/* CHECKBOX TRICK */
input[type=checkbox] {
    display: none;
}

/*HAMBURGER MENU*/
.hamburger {
    display: none;
    font-size: 24px;
    user-select: none;
}

/* APPLYING MEDIA QUERIES */
@media (max-width: 768px) {
    .menu {
        display: none;
        position: absolute;
        background-color: rgb(0, 0, 0);
        right: 0;
        left: 0;
        text-align: center;
        padding: 16px 0;
    }

    .menu li:hover {
        display: inline-block;
        background-color: rgb(59, 59, 59);
        transition: 0.3s ease;
    }

    .menu li+li {
        margin-top: 12px;
    }

    input[type=checkbox]:checked~.menu {
        display: block;
    }

    .hamburger {
        display: block;
    }

    .dropdown {
        left: 50%;
        top: 30px;
        transform: translateX(35%);
    }

    .dropdown li:hover {
        background-color: rgb(59, 59, 59);
    }
}

/* TEXT IN CENTER */
.homepage {
    font-size: 50px;
    padding: 20% 0% 10% 35%;
}
@media (max-width: 768px){
    .homepage{
        font-size: 30px;
        padding: 40% 0% 10% 22%;
    }
}
body{
  background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('b2.png');
    background-size: cover;
    background-position: center;
  
}
.home {
    display: flex;
    align-items: center;
    min-height: 100vh;
    
}
form{

 background-color: grey;
  width: 70%;
 
  margin: auto;
  margin-top: 5%;
  border-radius: 50px;
  border:1px solid black;
  height: 500px;

}
form h2{
  text-align: center;
  font-size: 40px;
  color:black;
  font-family: Arial, Helvetica, sans-serif;
  padding-top: 30px;
  padding-bottom: 30px;
}
form input{
  width: 80%;
  margin: auto;
  border: none;
  background: transparent;
  border-bottom: 1px solid black;
  margin-left: 10%;
  margin-right: 10%;
  font-size: 20px;
  color:white;
  margin-top: 20px;
}
form input::placeholder{
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
  border: 1px solid black;
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
button:hover{
  background-color: darkred;
}
</style>
</head>

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">
            Hello Gardeners
        </div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- USING CHECKBOX TRICK-->
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <!-- NAVIGATION MENUS -->
            <div class="menu">  
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="services">
                    <a href="#">Shop by Category</a>
                    <!-- DROPDOWN MENU -->
                    <ul class="dropdown">
                        <li><a href="#">Plants</a></li>
                        <li><a href="#">Seeds</a></li>
                        <li><a href="#">Pots</a></li>
                        <li><a href="#">Fertilizers</a></li>
                        <li><a href="#">Gardening Accessories   </a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>

           <div class="search"><input type="text" name="search" placeholder="Search for Plants, Seeds and many more..." /> <button>Search</button></div>
                <div class="login">
                <a href="register.php" class="fa fa-user"> Login</a>
                <a  href="logout.php" class="fa fa-user"> Logout</a>

                </div>
                <div class="icons">
                  <a href="mycart.php" class="fa fa-shopping-cart"> My Cart</a>
                </div>
             
            </div>
        </ul>
    </nav>

    <section class="home" id="home">
    <form>
		
		<h2>Get in Touch with Us</h2>
		<form action="" method="post">
			<input class="" type="text" name="name" value="" placeholder="Enter your Name here" required>

			<input class="" type="text" name="mobile" value="" placeholder="Enter your Mobile Number here" maxlength="10" required>

			<input class="" type="email" name="email" value="" placeholder=" Enter your Email here" required>

			<textarea class="" name="message" placeholder="Enter your message here..." required></textarea>
			
		<button tytype="submit" name="message" value="message">Submit</button>

	
		</form>
    </section>

</body>

</html>