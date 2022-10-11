<?php
include('dbcon.php');

    if(!empty($_REQUEST ['add-cart']))
    {
        echo"cart";

        $name=$_REQUEST['name'];
        $price=$_REQUEST['price'];
        $description=$_REQUEST['description'];
        $quantity=1;    
        echo $price;

        $image=$_REQUEST['image1'];

        echo $image;

        $query = "SELECT name,price FROM `cart` WHERE `name` = '$name' AND `price` = $price";
        $run = mysqli_query($conn, $query);
    
        $row = mysqli_num_rows($run);
    
        if (!empty($row)) 
        {
            echo"
            <script>
                alert('Item already added into the Cart');
                window.location.href='home.php';
            </script>";
        }

    
     /*   $query="update cart set total=price*quantity where id = $id ";
        mysqli_query($conn,$query); 
        */
        else{
            $name=$_REQUEST['name'];
            $price=$_REQUEST['price'];
            $description=$_REQUEST['description'];
            $quantity=1;    
            echo $price;
            $image=$_REQUEST['image1'];
            echo $image;

        $query="insert into cart (name,price,description,image1,quantity) values('$name',$price,'$description','$image',$quantity)";
        if(mysqli_query($conn,$query)) 
        {
            echo"<script>
            alert('Item Added to Cart');
            window.location.href='home.php';
            </script>";
        }
    }
    }

   

?>