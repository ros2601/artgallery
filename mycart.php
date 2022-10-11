<?php
include("dbcon.php");
include('header2.php');

if(!empty($_REQUEST['did']))
{
    $id=$_REQUEST['did'];
    $query="delete from cart where id=$id";
    mysqli_query($conn,$query);
}

if(!empty($_REQUEST['add']))
{
    $quantity=$_REQUEST['add'];
    $query="update cart set quantity=quantity+1 where id = $quantity ";
    mysqli_query($conn,$query);


    $id=$_REQUEST['add'];
    
    $query="update cart set total=price*quantity where id = $id ";
    mysqli_query($conn,$query); 


}

if(!empty($_REQUEST['minus']))
{
    $quantity=$_REQUEST['minus'];

    $query="update cart set quantity=quantity-1 where id = $quantity ";
    mysqli_query($conn,$query);
    $id=$_REQUEST['minus'];
    
    $query="update cart set total=price*quantity where id = $id ";
    mysqli_query($conn,$query); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.google.com/share?selection.family=Inter%7CPoppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,100">
    <link rel="stylesheet" href="gardeners.css" >
    <style>
    *{
        margin:0;
        padding: 0;
    }
    .main{
        width: 100%;
        height: auto;
    }
    .inner{
        margin-top: 15%;
        width: 80%;
        height: auto;
        margin: auto;
    }
    .inner h1{
      
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 2px 2px grey;
    }
    .inner table{
        width: 90%;
        margin: auto;
        border: none;
        border-bottom: 2px solid black;
        text-align: center;
        background-color: lightyellow;
        font-size: 20px;
        font-weight: bold;
    }
    .inner table a{
        background-color: red;
        color: white;
        text-decoration: none;
        padding:8px 12px;
        border-radius: 7    px;
        border:2px solid white;
    }
    .inner table a:hover{
        background-color: white;
        color:red;
        border: 1px solid red;
    }
    .total{
         margin-top: 10%;
        width: 50%;
        margin: auto;
        background-color: lightyellow;
        color:black;
        margin-top: 5%;
        margin-bottom: 10%;
        border-radius: 40px;
        border: 1px solid grey; 
    }
    .total h3{
        text-align: center;
        font-size: 30px;
        text-shadow: 1  px 1px grey;
        color:black;
    }
    .out{
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        text-shadow: 1  px 1px grey;
        color:blue; 
    }
    .pay{
        padding-left: 40px;
        font-size: 20px;
    }
    .pay button{
        color:white;
    background-color: green;
border:1px solid white;
padding:8px 14px;
border-radius: 5px;
margin-bottom: 40px;
text-align: center;
    }
    .pay button:hover{
        color:green;
    background-color: white;
border:1px solid green;
    }
    </style>
</head>
<body>
<div class="main">
    <div class="inner">

    <h1>MY  CART</h1>
    <table border=1px>
        <tr>
        <th>Item Name</th>
        <th>Image</th>
        <th>Item Price</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Remove</th>
        </tr>
     </thead>

      <?php
        $query="select * from cart";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
        echo $count." items present in the cart";
        $total=0;
       while($row=mysqli_fetch_assoc($result))
		{		
      ?>
        <form >
        <tr>
            <td><?php echo $row['name']  ?></td>    
            <td><img width=250px height=250px  alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td>
            <td><?php echo $row['price']  ?><input type='hidden' class='iprice' value="<?php $row['price']?>">  </td>
            <td><?php echo $row['description']  ?> </td>

            <td><button type="submit" name="add" value="<?php echo $row['id'] ?>"><i  class="fa-regular fa-plus"></i></button> <?php echo $row['quantity']  ?> <button name="minus"  value="<?php echo $row['id']  ?>"><i class="fa-solid fa-minus"></i></button></td>

            <td><?php echo $row['total']  ?></td>

            <td><a href="mycart.php?did=<?php echo $row['id'] ?>">Remove</td>
        </tr>
        </form>
        <?php
}?>
    </table>
<!------------------------------------->
    </div>

<div class="total">
<h3>Total:</h3>
 <?php
$query="select sum(total) as total from cart";
$result=mysqli_query($conn,$query);

foreach($result as  $result)
{
    ?>
<div class="out">
<?php
    echo $result['total'];
}

 ?>
</div>


   <form method="POST">
    <div class="pay">
    <div class="cash">
             <input type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
             <label >Cash on delivery</label>       
         </div>
         <div class="online" >
             <input type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
             <label>Pay Online</label>
         </div>
         <br>
        <button >Make Purchase</button>
     </form>
    </div>
        
  </div>
</div>
</div>
</div>
</body>
</html>
    
    <!------------------------------------->