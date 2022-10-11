<?php
include('dbcon.php');

$query="select * from product";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
		{		
?>
    <table border="1" width="25%">

    <form enctype="multipart/form-data" action="managecart.php">
       <!---  <td><input type="hidden"  type="submit"  value="<?php echo $row['id']?>"></td>-->
    <tr><td><img width=250px height=250px  alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td></tr>

  	<tr ><td ><?php echo $row['id']  ?> </td></tr>
  	<tr><td><?php echo $row['name']  ?>  </td></tr>
    <tr><td><?php echo $row['price']  ?>  </td></tr>
    <tr><td><?php echo $row['image1']  ?>  </td></tr>
    <tr><td><?php echo $row['description']  ?> </td></tr>
    


        <input type="hidden"  name="image1" value="<?php echo $row['image1']?>"> 
        <input type="hidden" name="name" value="<?php echo $row['name']?>">
        <input type="hidden" name="price" value="<?php echo $row['price']?>">
        <input type="hidden"  name="description" value="<?php echo $row['description']?>">

    <tr><td><button>Buy Now</button></td></tr>
    <tr><td><button type="submit" name="add-cart" value="add-cart" >Add to cart</button></td></tr>

    </form>
    <?php 
    }
    ?>
    </table>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        width: 25%;
        float:left;
    }
    tr{
        width: 100%; 
    }
    td{
        width: 100%;
        text-align:center;
       
    }
        </style>
  </head>
  <body>
    
  </body>
  </html>