<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include ('partials/_dbconnect.php');
  $username=$_POST["username"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
 // $exists=false;
  $existsSql="SELECT * FROM `users` WHERE username='$username'";
  $result=mysqli_query($conn,$existsSql);
  $numExistRows=mysqli_num_rows($result);
if($numExistRows>0)
{
  // $exists=true;
  $showError=" Username Already Exist, Try again!";
}
else{
  //$exists=false;
  if(($password==$cpassword)){
    $sql="INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if ($result){
      $showAlert=true;
    }
  }
  else{
  $showError=" Passwords do not match, Try again!";
  }
}
}
?>
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>

               <?php
              if($showAlert){
               echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your Account is now created.<br><strong>Go to Login page</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
              }
?>
    <?php
              if($showError){
               echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$showError.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
              }
?>
    <center><div class="container my-4">
        <h1 class="text-center" >SignUp to Our Website</h1>

            <form action="singup.php" method="post">
    <div class="form-group col-md-6">
        <label for="username">Username</label>
        <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
        
    </div>
    <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" class="password" required>
    </div>
    <div class="form-group col-md-6">
        <label for="password">Confirm Password</label>
        <input type="password" name="cpassword" class="form-control" id="cpassword" class="cpassword" required>
        <small id="password"  class="form-text text-muted ">Make sure to type the Same Password.</small>
    </div>
    <!-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <br>
    <button type="submit" class="btn btn-primary col-md-6">SignUp</button>
    </form>
    </div></center>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>