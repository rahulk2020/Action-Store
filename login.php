<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'partials/_dbconnect.php';
  $username=$_POST["username"];
  $password=$_POST["password"];
 
    $sql="Select * from users where username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if ($num==1){
      $login=true;
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['username']=$username;
      header("location: index_rk.php");

    }
  else{
  $showError="Invalid Credentials!";
  }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>

               <?php
              if($login){
               echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in
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
        <h1 class="text-center" >Login to Action Store</h1>

            <form action="index_rk.html" method="post">
    <div class="form-group col-md-6">
        <label for="username">Username</label>
        <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        
    </div>
    <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" class="password">
    </div>
    
    <!-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <br>
    <button type="submit" class="btn btn-primary col-md-6">Login</button>
    </form>
    </div></center>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>