<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $name =$_POST['name'];
  $email =$_POST['email'];
  $mobile =$_POST['mobile'];
  $password =$_POST['password'];
  
  $sql = "insert into `crud`(name,email,mobile,password) values('$name','$email','$mobile','$password')";
  $result =mysqli_query($con,$sql);
  if($result){ 
    // echo "Data inserted successfully";
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
      <input type="text" name="name" autocomplete="off"><br>

      <label>Email</label><br>
      <input type="email" name="email" autocomplete="off"><br>

      <label>Mobile</label><br>
      <input type="number" name="mobile" autocomplete="off"><br>

      <label>Password</label><br>
      <input type="password" name="password" autocomplete="off"><br><br>

     <button type="submit" name="submit">submit</button>
    </form>
  </body>
</html>