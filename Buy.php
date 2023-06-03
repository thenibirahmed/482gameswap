<?php

include 'config.php';

$result;

// If the search bar is empty
if (  ! isset( $_GET['search_bar'] ) ) {
    $sql    = "SELECT * FROM games";
    $result = mysqli_query( $conn, $sql );
} else {
    $sql    = "SELECT * FROM games WHERE name LIKE '%{$_GET['search_bar']}%'";
    $result = mysqli_query( $conn, $sql );
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
              <a class="nav-link" href="Sell.php">Sell/Exchange</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="cart1.php">
                <button type="button" class="btn btn-primary position-relative">
                Cart
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <?php
					session_start();
					if ( isset( $_SESSION['cart_items'] ) ) {
						echo count( $_SESSION['cart_items'] );
					} else {
						echo 0;
					}

					?>
                </span>
              </button>
              </a>
            </li>

          </ul>
         <!---- <form class="d-flex ml-auto" role="search"> -->
           <!--- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn btn-outline-success " type="submit">Search</button> -->
          </form>
          <a class="btn btn-outline-success" href="logout.php" style="margin-left: 5px;">Logout</a>

        </div>
      </div>
    </nav>
  </header>

  <!-- Product Cards -->
<div class="container my-5 py-5">

<!-- Search Bar -->
<div class="d-flex flex-wrap mb-5">
  <form class="form-inline ml-auto" method="get">
    <input class="form-control mr-sm-2" type="search" name="search_bar" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
  </form>

  <!-- Sort Dropdown Menu -->
  <div class="dropdown ml-2">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="sortMenu" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      Sort
    </button>
    <div class="dropdown-menu" aria-labelledby="sortMenu">
      <a class="dropdown-item" href="#">Price: Low to High</a>
      <a class="dropdown-item" href="#">Price: High to Low</a>
      <a class="dropdown-item" href="#">Rating: Low to High</a>
      <a class="dropdown-item" href="#">Rating: High to Low</a>
      <a class="dropdown-item" href="#">Distance: High to Low</a>
      <a class="dropdown-item" href="#">Distance: Low to high</a>
    </div>
  </div>
  <!-- Filter Dropdown Menu -->
  <div class="dropdown ml-2">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="filterMenu" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      Category
    </button>
    <div class="dropdown-menu" aria-labelledby="filterMenu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Adventure</a>
      <a class="dropdown-item" href="#">RPG</a>
      <a class="dropdown-item" href="#">Sports</a>

    </div>
  </div>
  <div class="dropdown ml-2">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="filterMenu" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      Location
    </button>
    <div class="dropdown-menu" aria-labelledby="filterMenu">
      <a class="dropdown-item" href="#">Dhaka</a>
      <a class="dropdown-item" href="#">Chittogong</a>
      <a class="dropdown-item" href="#">Sylhet</a>
      <a class="dropdown-item" href="#">Jessore</a>

    </div>
  </div>
  <div class="dropdown ml-2">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="filterMenu" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      Condition
    </button>
    <div class="dropdown-menu" aria-labelledby="filterMenu">
      <a class="dropdown-item" href="#">New</a>
      <a class="dropdown-item" href="#">Mint</a>
      <a class="dropdown-item" href="#">Fair</a>
      <a class="dropdown-item" href="#">Used</a>
      <a class="dropdown-item" href="#">Damaged</a>


    </div>
  </div>

</div>
    <div class="row">

    <?php
while ( $row = $result->fetch_assoc() ) {?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">

              <img class="card-img-top" style="height:400px"  src="<?php echo $row["image_link"] ?>" loading="lazy"  alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $row["name"] ?> </a>
                  <a href="add_to_cart.php?add_to_cart_id=<?php echo $row['id'] ?>" class="btn btn-success ml-5">Add to Cart</a>
                </h4>
                <h5>BDT <?php echo $row["price"] ?> </h5>
                <p class="card-text">
                  Price: <?php echo $row["price"] ?><br>
                  Location: <?php echo $row['location'] ?><br>
                  Condition: <?php echo $row['product_condition'] ?></p>
              </div>
            </div>
          </div>

     <?php }

?>


  </div>
  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



</body>

</html>