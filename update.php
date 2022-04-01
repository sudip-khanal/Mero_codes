<?php
include 'connect.php';
$id =$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name =$_POST['name'];
  $email =$_POST['email'];
  $mobile =$_POST['mobile'];
  $password =$_POST['password'];
  
  $sql="update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
  $result =mysqli_query($con,$sql);
  if($result){ 
    // echo "Data updated successfully";
  header('location:display.php');
  }
  else{
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Crud operation</title>
  </head>
  <body>
    <form action="" method="post">
      <label>Name</label> <br>
      <input type="text" name="name" autocomplete="off" value=<?php echo $name;?>><br>

      <label>Email</label><br>
      <input type="email" name="email" autocomplete="off" value=<?php echo $email;?>><br>

      <label>Mobile</label><br>
      <input type="number" name="mobile" autocomplete="off"value=<?php echo $mobile;?>><br>

      <label>Password</label><br>
      <input type="password" name="password" autocomplete="off" value=<?php echo $password;?>><br><br>

     <button type="submit" name="submit">Update</button>
    </form>
  </body>
</html>