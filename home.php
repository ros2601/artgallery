<?php
include('header1.php');
include('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Hello Gardeners</title>
    <style>
    /*
 section {
    width: 100%;
    width: 100%;
    background-color: green;
    padding: 2rem 8%;
}

.heading{
     font-family: Arial, Helvetica, sans-serif;
    text-shadow: 1px 1px grey;
    font-size: 20px;
    text-align: center;
}
.heading span{
color:green;
}

.products .container {
    width: 100%;    
    background-color: pink;
    width: 100%;
    
}
.products .container .box {
    box-shadow: 0 0.5rem 1.5rem rgb(0 0 0 / 10%);
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    position: relative;
}
.products img{
    width: 230px;
    height: 260px;
}
table{
    box-shadow: 0 0.5rem 1.5rem rgb(0 0 0 / 10%);
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    margin-top: 20px;
    padding: 15px 15px 15px 15px;
    margin:20px 10px 20px 10px;
    width: 20%;
    float: left;
    text-align: center;      
        }


        */
    *{
        margin: 0;
        padding: 0;
    }

    .main{
        width: 100%;
    }

    .heading{
     font-family: Arial, Helvetica, sans-serif;
    text-shadow: 1px 1px grey;
    font-size: 20px;
    text-align: center;
   }
   .heading span{
    color:green;
   }
   .products{
    width: 80%;
    margin: auto;
   text-align: center;
   padding: 15px 15px 15px 15px;
   }
   .products table{
    height: 10%;
    box-shadow: 0 0.5rem 1.5rem rgb(0 0 0 / 10%);
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    margin-top: 20px;
    margin-bottom: 30px;
    text-align: center;
    padding: 15px 15px 15px 15px;
    margin-left: 5px;
    margin-right: 5px;
    float: left;
    width: 24%;
    background-color: lightyellow;
   }
   .products img{
    width: 230px;
    height: 260px;
   }
   .buy button{
    background-color:  darkorange; 
    color: white;
    border: 1px solid white;
    padding: 6px 8px;
    border-radius: 5px;
   }
   .buy button:hover{
    background-color:  red; 
    color: white;
   }
   .cart button{
    background-color:green;
    color: white;
    border: 1px solid white;
    padding: 7px 8px;
    border-radius: 5px;
   }
   .cart button:hover{
    background-color:  darkgreen; 
    color: white;
   }

   .special table{
    box-shadow: 0 0.5rem 1.5rem rgb(0 0 0 / 10%);
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    margin-top: 20px;
 
    text-align: center;
    padding: 15px 15px 15px 15px;
    margin-left: 5px;
    margin-right: 5px;
    float: left;
    width: 100%;
    margin: auto;
        background-color: lightyellow;
   }
   .special img{
    width: 350px;
    height: 400px;
    border-radius: 10px;
   }
   .container2 h1{
    margin-top: 30px;
   }
.container2 .view{
    text-align: right;
    padding-right: 10px;
}
.container2 .view a{
    font-size: 24px;
    color:green;
    font-weight: bolder;
}
   </style>

</head>
<body>
    <div class="main">
  
  
    <section class="products">
         <div class="heading">
           <h1> Our Latest <span>Winter Flowering </span> Plants</h1> 
         </div>


            <div class="container">
                <div class="box">
                <?php
    include('dbcon.php');
    $query="select * from product where id in(9,8,10,19)";
    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
	{		
    ?>
    <table>

   

      <tr><td><img   alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td></tr>
      </div>
       
  	    <tr><td><h3><?php echo $row['name']  ?></h3> </td></tr>
        <tr><td><h3>Price Rs. <?php echo $row['price']  ?></h3></td></tr>
      
        <form action="display.php">
        <tr><td><div class="buy"><button name="buy" value="<?php echo $row['id']?>" class="fa fa-eye"> Buy Now</button></div></td></tr>
        </form>

       <form enctype="multipart/form-data" action="managecart.php">
    
       <input type="hidden"  name="image1" value="<?php echo $row['image1']?>"> 
        <input type="hidden" name="name" value="<?php echo $row['name']?>">
        <input type="hidden" name="price" value="<?php echo $row['price']?>">
        <input type="hidden"  name="description" value="<?php echo $row['description']?>">
       <tr><td><div class="cart"><button type="submit" name="add-cart" value="add-cart" class="fa fa-shopping-cart">  Add to Cart</button></div>
       
    </td></tr>
     
    </form>
    <?php 
    }
    ?>

    </table>

    <div class="special">
    <div class="heading">
         <h1> Shop<span> Lantana </span>combo pack @25% discount </h1>
    </div>
    <?php
    
    $query="select * from product where id in(22)";
    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
	{		
    ?>
    <table>

    <form enctype="multipart/form-data" action="managecart.php">
     
   <tr><td><img  alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td></tr>
      </div>
       
  	    <tr><td><h3><?php echo $row['name']  ?></h3> </td></tr>
        <tr><td><h3>Price Rs. <?php echo $row['price']  ?></h3></td></tr>
    
        <input type="hidden"  name="image1" value="<?php echo $row['image1']?>"> 
        <input type="hidden" name="name" value="<?php echo $row['name']?>">
        <input type="hidden" name="price" value="<?php echo $row['price']?>">
        <input type="hidden"  name="description" value="<?php echo $row['description']?>">
           
       <tr><td><div class="buy"><button class="fa fa-eye"> Buy Now</button></div></td></tr>
       <tr><td><div class="cart"><button type="submit" name="add-cart" value="add-cart" class="fa fa-shopping-cart">  Add to Cart</button></div>
       
    </td></tr>
     
    </form>
    <?php 
    }
    ?>
    </table>   
    </div> 
<!---------------------------------------------------------->
<div class="container2">
<div class="heading">

<h1> Our Permanent <span>Flowering Plants</span> </h1> 
</div>
<div class="view">
<a href="">View More</a>
</div>
                <div class="box">
                <?php
    $query="select * from product where id in(15,16,17,18)";
    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
	{		
    ?>
    <table>

    <form enctype="multipart/form-data" action="managecart.php">

      <tr><td><img   alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td></tr>
      </div>
       
  	    <tr><td><h3><?php echo $row['name']  ?></h3> </td></tr>
        <tr><td><h3>Price Rs. <?php echo $row['price']  ?></h3></td></tr>
    
        <input type="hidden"  name="image1" value="<?php echo $row['image1']?>"> 
        <input type="hidden" name="name" value="<?php echo $row['name']?>">
        <input type="hidden" name="price" value="<?php echo $row['price']?>">
        <input type="hidden"  name="description" value="<?php echo $row['description']?>">
           
       <tr><td><div class="buy"><button class="fa fa-eye"> Buy Now</button></div></td></tr>
       <tr><td><div class="cart"><button type="submit" name="add-cart" value="add-cart" class="fa fa-shopping-cart">  Add to Cart</button></div>
       
    </td></tr>
     
    </form>
    <?php 
    }
    ?>

    </table>   
</div>


<div class="container2">
<div class="heading">

<h1> Our Permanent <span>Flowering Plants</span> </h1> 
</div>
<div class="view">
<a href="">View More</a>
</div>
                <div class="box">
                <?php
    $query="select * from product where id in(11,14,12,20)";
    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
	{		
    ?>
    <table>

    <form enctype="multipart/form-data" action="managecart.php">

      <tr><td><img   alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td></tr>
      </div>
       
  	    <tr><td><h3><?php echo $row['name']  ?></h3> </td></tr>
        <tr><td><h3>Price Rs. <?php echo $row['price']  ?></h3></td></tr>
    
        <input type="hidden"  name="image1" value="<?php echo $row['image1']?>"> 
        <input type="hidden" name="name" value="<?php echo $row['name']?>">
        <input type="hidden" name="price" value="<?php echo $row['price']?>">
        <input type="hidden"  name="description" value="<?php echo $row['description']?>">
           
       <tr><td><div class="buy"><button class="fa fa-eye"> Buy Now</button></div></td></tr>
       <tr><td><div class="cart"><button type="submit" name="add-cart" value="add-cart" class="fa fa-shopping-cart">  Add to Cart</button></div>
       
    </td></tr>
     
    </form>
    <?php 
    }
    ?>

    </table>   
    
                </div>
            </div>
         </div>
    </section>
    <div class="main">
        <div class="inner">
        <div class="items">
        </div>
        </div>
    </div>
</body>
</html>




