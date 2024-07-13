<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

<div class="conatiner align-content-center">
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner align-center">
    <div class="carousel-item active">
      <img src="cur1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="cur2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="cur3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>



    <div class="container mt-5 bg-gradient ">
        <div class="row m-lg-3">
                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p1.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 1</h5>
    <p class="card-text">Price Rs.450</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 1">
    <input type="hidden" name="Price" value="450">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p2.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 2</h5>
    <p class="card-text">Price Rs.650</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 2">
    <input type="hidden" name="Price" value="650">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p3.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 3</h5>
    <p class="card-text">Price Rs.850</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 3">
    <input type="hidden" name="Price" value="850">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p4.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 4</h5>
    <p class="card-text">Price Rs.350</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 4">
    <input type="hidden" name="Price" value="350">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p5.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 5</h5>
    <p class="card-text">Price Rs.1500</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 5">
    <input type="hidden" name="Price" value="1500">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p6.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 6</h5>
    <p class="card-text">Price Rs.450</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 6">
    <input type="hidden" name="Price" value="450">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p7.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 7</h5>
    <p class="card-text">Price Rs.550</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 7">
    <input type="hidden" name="Price" value="550">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p8.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 8</h5>
    <p class="card-text">Price Rs.350</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 8">
    <input type="hidden" name="Price" value="750">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p9.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 9</h5>
    <p class="card-text">Price Rs.150</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 9">
    <input type="hidden" name="Price" value="150">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p10.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 10</h5>
    <p class="card-text">Price Rs.1050</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 10">
    <input type="hidden" name="Price" value="1050">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p11.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 11</h5>
    <p class="card-text">Price Rs.500</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 11">
    <input type="hidden" name="Price" value="500">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p12.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 12</h5>
    <p class="card-text">Price Rs.1200</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 12">
    <input type="hidden" name="Price" value="1200">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p13.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 13</h5>
    <p class="card-text">Price Rs.200</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 13">
    <input type="hidden" name="Price" value="200">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p14.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 14</h5>
    <p class="card-text">Price Rs.800</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 14">
    <input type="hidden" name="Price" value="800">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p15.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 15</h5>
    <p class="card-text">Price Rs.700</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 15">
    <input type="hidden" name="Price" value="700">
                </div>
                </div>
                </form>
                </div>

                <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
        <div class="card">
  <img src="p16.webp" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Product 16</h5>
    <p class="card-text">Price Rs.900</p>
    <button type="submit" name="Add_to_cart" class="btn btn-info">Add to Cart</button>
    <input type="hidden" name="Item_Name" value="Product 16">
    <input type="hidden" name="Price" value="900">
                </div>
                </div>
                </form>
                </div>

            </div>
        </div>
</body>
</html>