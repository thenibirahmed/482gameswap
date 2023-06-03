<?php

  include 'config.php';

  if(isset($_POST['name'])){
    $gameName = $_POST["name"];
    $gameImageLink = $_POST["image_link"];
    $username = $_POST["username"];
    $user_email = $_POST["user_email"];
    $user_phone = $_POST["user_phone"];
    $location = $_POST["location"];
    $product_condition = $_POST["product_condition"];
    $price = $_POST["price"];

    $sql = "INSERT INTO games (name, price, location, product_condition, image_link, username, user_email, user_phone) VALUES ('{$gameName}', '{$price}', '{$location}', '{$product_condition}', '{$gameImageLink}', '{$username}', '{$user_email}', '{$user_phone}')";
    $result = mysqli_query($conn, $sql);
    
  }
  


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product Catalog</title>
  <!-- Bootstrap CSS --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <!-- Navigation Bar -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="Homepage.html">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Buy.php">Buy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sell/Exchange</a>
            </li>
            
          </ul>
          <form class="d-flex ml-auto" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success " type="submit">Search</button>
          </form>
          <a class="btn btn-outline-success" href="login.html" style="margin-left: 5px;">Login</a>
          
        </div>
      </div>
    </nav>
  </header>

<!-- Product Cards -->
<div class="mt-5 pt-5">
    <div class="row">
      <!-- <div class="col-md-4">
                <img src="/static/" alt="" width="400px" height="500px"> -->

      </div>
      <div class="col-md-4">
        <div class="d-flex flex-column justify-content-center align-items-center my-5 py-5">
        <form class="form-inline ml-auto" method="POST">
          <input class="form-control w-100 my-4" type="text" name="name" placeholder="Video Game Title">
          <input class="form-control w-100 my-4" type="text" name="image_link" placeholder="Video Image Link">
          </br>
          <input class="form-control w-100 my-4" type="text" name="username" placeholder="Seller's Name">
          <input class="form-control w-100 my-4" type="text" name="user_email" placeholder="Seller's Email">
          <input class="form-control w-100 my-4" type="text" name="user_phone" placeholder="Seller's Phone Number">
          
          <select class="form-select form-control w-100 my-4" name="location" aria-label="Location">
            
            <option selected disabled>Location</option>
            <option>Dhaka</option>
            <option>Chittogong</option>
            <option>Sylhet</option>
            <option>Khulna</option>
            <option>Rajshahi</option>
          </select>

          <select class="form-select form-control w-100 my-4" name="product_condition" aria-label="condition">
            <option selected disabled>Condition</option>
            <option>Mint</option>
            <option>Used</option>
          </select>

          <input class="form-control w-100 my-4" type="text" name="price" placeholder="Asking price">
          <button class="btn btn-block btn-success w-100">Submit request</button>
        </form>
        </div>
      </div>
      <!-- <div class="col-md-4">
        <img src="/static/Ad1.jpg" alt="" width="400px" height="500px">
      </div> -->
    </div>
  </div>
  
  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>