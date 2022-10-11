<?php
require 'dbcon.php';

//--------------------insert-------------------


if(!empty($_REQUEST['add']))
{
  $name = $_REQUEST['name'];
  $description=$_REQUEST['description'];
  $price=$_REQUEST['price'];
  echo $price;

  
  $img1=$_FILES['img1']['name'];
  $path1=$_FILES['img1']['tmp_name'];   
   echo $path1;

  $img2=$_FILES['img2']['name'];
  $path2=$_FILES['img2']['tmp_name'];

  $img3=$_FILES['img3']['name'];
  $path3=$_FILES['img3']['tmp_name'];

  $img4=$_FILES['img4']['name'];
  $path4=$_FILES['img4']['tmp_name'];

  $query="insert into product (name,price,description,image1,image2,image3,image4) values('$name',$price,'$description','$img1','$img2','$img3','$img4')";

    if(mysqli_query($conn,$query)) 
    {
      echo"ok";
        move_uploaded_file($path1,"images/".$img1);
        move_uploaded_file($path2,"images/".$img2);
        move_uploaded_file($path3,"images/".$img3);
        move_uploaded_file($path4,"images/".$img4);
        echo"<script>
        alert('Data Inserted');
        window.location.href='insertproducts.php';
        </script>";
    }
}   

?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 
<div class="form-group">
  <div class="container">
     <div class="card mt-5">
      <div class="card-header"><h2>Insert Items</h2></div>

        <form method="post" enctype="multipart/form-data"  >
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name"  class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="text" name="price"  class="form-control">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
          <label for="image">Image 1</label>
          <input type="file" name="img1"  class="form-control">
        </div>
        <div class="form-group">
          <label for="image2">Image 2</label>
          <input type="file" name="img2" class="form-control">
        </div>
        <div class="form-group">
          <label for="image3">Image 3</label>
          <input type="file" name="img3" class="form-control">
        </div>
        <div class="form-group">
          <label for="image4">Image 4</label>
          <input type="file" name="img4"  class="form-control">
        </div>
      
        <div class="form-group">
          <button type="submit" name="add" value="add" class="btn btn-info">Add item</button>
        </div>
      </form>
     </div>
  </div>
</div>    
      
      