
<?php
session_start();
 $connect=mysqli_connect("localhost:3308","root","","roshni")
 or
die("Connection Failed");

if(!empty($_REQUEST['add']))
{

    $filename=$_FILES['img1']['name'];
    $filepath=$_FILES['img1']['tmp_name'];

    $filename=explode('.',$filename);
    $extension=$filename['1'];  
   
    
    $imagepath=explode('.',$filepath);
 
    $query="show table status like 'image'";
    $result=mysqli_query($connect,$query);
    $row=mysqli_fetch_assoc($result);
  
    $time= $row['Update_time'];
    $id= $row['Auto_increment'];

    $newfilename=$id.".".$extension;

    $query="insert into image(name,add1) values('$newfilename','$time')";
    
    if(mysqli_query($connect,$query))
    {
       
        if(move_uploaded_file($filepath,"images/".$newfilename))
        {
            echo"<script>
            alert('Picture Uploaded Successfully!');
            window.location.href='nav.php';
            </script>";
        }
        else{
            echo"<script>
            alert('Sorry can't Upload the Picture...');
            window.location.href='nav.php';
            </script>";   
        }
    }
}  
else{
  echo"ok";
} 


if(!empty($_GET['did']))
{
  $id=$_GET['did'];
  $query="delete from image where id=$id";
  
  if(mysqli_query($connect,$query))
  {
    echo"<script>
            alert('Picture deleted Successfully');
            window.location.href='nav.php';
            </script>";   
  }
 
}

?>
<form method="post"  enctype="multipart/form-data">  
    <input type="file" name="img1"/>
    <button type="submit" name="add" value="Add Product">Add Products</button>
</form>