<?php
include('dbcon.php');
include('header2.php');
if(isset($_REQUEST['buy']))
{
    if(!empty($_REQUEST['buy']))
    {
        $id=$_REQUEST['buy'];
        echo $id;
    $query="select * from product where id=$id";

    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
	{		
    ?>
    <table>

    <form enctype="multipart/form-data" action="managecart.php">

      <tr><td><img   alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td>
      <td><img   alt="Image not found"  src="images/<?php echo $row['image2']  ?>"></td></tr>
      </div>
       
  	    <tr><td><h2><?php echo $row['name']  ?></h2> </td></tr>
        <tr><td><h3>Price Rs. <?php echo $row['price']  ?></h3></td></tr>
        <tr><td><h3><?php echo $row['description']  ?></h3></td></tr>
    

           
       <tr><td ><div class="buy"><button class="fa fa-eye"> Buy Now</button></div></td></tr>
       <tr><td><div class="cart"><button type="submit" name="add-cart" value="add-cart" class="fa fa-shopping-cart">  Add to Cart</button></div>
       
    </td></tr>
     
    </form>
    <?php 
    }
}
}
    ?>

    </table>   
</div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .buy button{
    background-color:  darkorange; 
    color: white;
    border: 1px solid white;
    padding: 6px 8px;
    border-radius: 5px;
    text-align: center;
   }
   .buy button:hover{
    background-color:  red; 
    color: white;
   }
   table .cart button{
    background-color:green;
    color: white;
    border: 1px solid white;
    padding: 7px 8px;
    border-radius: 5px;
    text-align: center;

   }
   .cart button:hover{
    background-color:  darkgreen; 
    color: white;
   }
    table{
        width:80%;
        background-color: lightyellow;
        margin: auto;
        padding: 20x 20px;
    }
    table img{
        width: 400px;
        height: 500px;
        margin: auto    ;
        text-align: center;
        padding-top: 30px;
        padding-left: 30px;

    }
    table td {
        width: 100%;
    }
    h2{
        font-weight: 40px;
        color:black;
        margin-top: 20px;
        text-shadow: 1px 1px grey;
    }
    h3{
        font-weight: 30px;
  
    }
        </style>
</head>
<body>
    
</body>
</html>