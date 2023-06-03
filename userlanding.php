<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="HomepageStyles.css">
    

    

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



<style>
  .image-container {
  position: relative;
  display: inline-block;
}

.button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}


.image-container:hover .button{
  opacity: 1;
  
}
</style>
    
    <!-- Custom styles for this template -->
    
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/Buy.html">Buy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Sell.html">Sell/Exchange</a>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success " type="submit">Search</button>
        </form>
        <a class="btn btn-outline-success" href="logout.php" style="margin-left: 5px;">Logout</a>
        
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" src="static/HomeMain1.jpg">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Welcome to GameSwap!</h1>
            <p>Tired of your old games or want to try something new? Our marketplace makes it easy and affordable to trade your games
              so that 
            </p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="container">
    
  <div class="d-flex flex-wrap shadow p-3">
    <div class="image-container"><img src="img1.webp" class="mx-4" height=350px><button class="btn btn-success btn-block button">Add to Cart</button></div>
    <div class="image-container"><img src="img2.webp" class="mx-4" height=350px><button class="btn btn-success btn-block button">Add to Cart</button></div>
    <div class="image-container"><img src="img3.jpeg" class="mx-4" height=350px><button class="btn btn-success btn-block button">Add to Cart</button></div>
    <div class="image-container"><img src="image4.jfif" class="mx-4" height=350px><button class="btn btn-success btn-block button">Add to Cart</button></div>


    



  </div>
    
    <div class="row">
      <div class="col-12">
    </div>
      </div>
      
    </div>
  </div>
  
  

    <div class="row featurette shadow " >
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1" style="margin-left: 150px;">Welcome to our platform for gamers!  <span class="text-muted"></span></h2>
        <p class="lead " style="margin-left: 150px;">
          We provide a community-driven marketplace where you can buy, sell, and exchange your favorite games. 
          Our mission is to create a platform that connects gamers around the country and allows them to enjoy the latest titles
          at a fair price. Whether you're looking to buy a new game, sell your old ones, or exchange with other gamers, 
          our platform makes it easy and safe. With a user-friendly interface and a dedicated team of moderators,
          we strive to make your gaming experience as smooth and enjoyable as possible. Join our community today and start
          exploring the world of console gaming!</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img"  style="margin-top: 125px;" src="static/HomeMain2.jpg" width="500" height="337.5">

      </div>
    </div>

    


    

 

  </div>
</div>

  <footer class="container">
    <p>&copy; 2023 GameSwap, Inc. </p>
  </footer>
</main>

      
  </body>
</html>
