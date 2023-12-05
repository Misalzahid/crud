<?php
include  'connect.php';
if (isset($_POST['submit']))
{
  $name=$_POST['name'];                
  $email= $_POST['email'];                     
  $mobile=$_POST['mobile'];
  $password=$_POST['password']; 

  $sql= "insert into crud(name,email,mobile,password)
  values('$name','$email','$mobile','$password')";

  $result=mysqli_query($con,$sql);
  if($result){
    //echo"Data inserted successfully";
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}
 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Crud Opertion</title>
  </head>

  <body>
    <div class = "container my-5"> 
        <form method = "post">
        <div class="form-group">
        <label >Name</label>
        <input type="text" class ="form-control"
        placeholder="Enter your name"
        name = "name" autocompelte ="off">
  </div>
  
  <div class="form-group">
       <label >Email</label>
       <input type="email" class ="form-control"
        placeholder="Enter your email"
        name = "email" autocompelte ="off">
  </div>

  <div class="form-group">
        <label >Mobile</label>
        <input type="text" class ="form-control"
        placeholder="Enter your mobile number"
        name = "mobile" autocompelte ="off">
  </div>

 <div class="form-group">
      <label >Password</label>
      <input type="text" class ="form-control"
       placeholder="Enter your password"
       name = "password" autocompelte ="off">
 </div>

  <button type="submit" class="btn btn-primary"
    name="submit">Submit</button>
</form>
</div>

    
  </body>
</html>