<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>diplay</title>
</head>
<body>
  <div class="container">
    <button><a href="user.php">Add user</a>
  </button>
  <table>
    <thead>
      <tr>
        <th>Sl no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql ="Select * from `crud`";
      $result =mysqli_query($con,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          $mobile=$row['mobile'];
          $password=$row['password'];
          echo '<tr>
          <th>'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$mobile.'</td>
          <td>'.$password.'</td>
          <td>
          <button><a href="update.php? updateid='.$id.'">Update</a></button>
          <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
          </td>
        </tr>
  ';
        }
      } 
      ?>
    </tbody>
  </table>
  </div>
</body>
</html>