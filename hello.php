<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="style.css" />
   <title>Document</title>
   <style>

    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" href="style.css" >
    <link href="https://fonts.google.com/share?selection.family=Inter%7CPoppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,100">
 </head>
 <body>
    <nav class="navbar">
      
        <div class="logo">Hello Gardeners</div>
    
        <ul class="nav-links">
        <div class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/">Special Offers</a></li>
            <li><a href="/">Contact</a></li>
            <li><a href="/">About</a></li>
        </div>
        </ul>
        <div class="search">
             <input type="text" name="search" placeholder="Search for Plants, Seeds and many more..." /> <i class="fa-solid fa-magnifying-glass"></i>Search
        </div>
     
        <div class="icons">
            <button>Login </button>
            <a href="#" class="fa fa-shopping-cart"> My Cart</a>
        </div>
    </nav>

    <div class="head">
      <div class="head1">
      <img src="p1.png"/>
            <h3>Plants</h3>
      </div>
      <div class="head1">
      <img src="p1.png"/>
            <h3>Plants</h3>
      </div>
      <div class="head1">
      <img src="p1.png"/>
            <h3>Plants</h3>
      </div>
      <div class="head1">
      <img src="p1.png"/>
            <h3>Plants</h3>
      </div>
      <div class="head1">
      <img src="p1.png"/>
            <h3>Plants</h3>
      </div>
   
   </div>

   <div class="bg">
        <div class="text">
        <h2>Our very new shades of green.</h2>
        <h2>Check out our latest sales and offers.</h2>
        </div>
        <div class="button">
            <button>View all offers</button>
        </div>
   </div>

   </div>  
   <!------------------------->
   <div class="products">
    <div class="heading"><h1>Our Featured Flowering Plants</h1></div>
  
      
    <div class="items">
    <?php
    include('dbcon.php');
    $query="select * from product";
    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
	{		
    ?>
    <div class="data">
    <table>

    <form enctype="multipart/form-data" action="managecart.php">
      <div class="img">
      <tr><td><img   alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td></tr>
      </div>
       
  	    <tr><td><h2><?php echo $row['name']  ?></h2> </td></tr>
        <tr><td><h2><?php echo $row['price']  ?></h2></td></tr>
        <tr><td><h3><?php echo $row['description']  ?></h3></td></tr>
    
        <input type="hidden"  name="image1" value="<?php echo $row['image1']?>"> 
        <input type="hidden" name="name" value="<?php echo $row['name']?>">
        <input type="hidden" name="price" value="<?php echo $row['price']?>">
        <input type="hidden"  name="description" value="<?php echo $row['description']?>">

        <tr><td><button>Buy Now</button></td></tr>
        <tr><td><button type="submit" name="add-cart" value="add-cart" >Add to cart</button></td></tr>
     
    </form>
       </div>
    <?php 
    }
    ?>
    </table>    
    </div>
    </div> 
   </div>
   </div>
    <!-----------------------------------about section----------------------------------------------
    <section class="about">

        <div class="row">

        <div class="video-container">
            <video src="images/about-vid.mp4" loop autoplay muted></video>
            <h3>Best Online Plants Site</h3>
        </div>

        <div class="content">
           <h3>why Hello Gardeners?</h3>
           <p>Hello Gardeners is here to inspire you to have plants around you. To look at life in a very different way, helping you connect with nature. </p>
           <a href="#" class="btn">Learn more</a>
        </div>
        </div>

   </section>
<!---------------------------------------------------------------------------->




<!--------------------------
<div class="display">
    <div class="dis1">
    <img src="display1.png" />
    </div>
    <div class="dis1">
    <p>Hello Gardeners is here to inspire you to have plants around you. To look at life in a very different way, helping you connect with nature. 
</p>
</div>

   </div> 
   
------------------------->
   <!-------------------------->
 
 <!---------------FOOTER------------
 <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">example@gmail.com</a>
            <a href="#">mumbai, india - 400104</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> mr. web designer </span> | all rights reserved </div>

</section>

<!-- footer section ends -->
 </body>
</html>