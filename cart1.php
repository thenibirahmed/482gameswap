<?php 

session_start();

$cartItems = $_SESSION['cart_items'] ?? null;

if( $cartItems == null ){
	echo "No product on cart";
	die;
}


function getSingleCartItem($id){
	include 'config.php';
	
	$sql = "SELECT * FROM games WHERE id = '$id'";

	$query = mysqli_query($conn, $sql);

	$result = mysqli_fetch_assoc($query);

	return $result;
}
$price = 0;
$i = 0;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 mb-5">
			<div class="d-flex justify-content-center row">
					<div class="col-md-8">
							<div class="p-2">
									<h4>Shopping cart</h4>
									<div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
							</div>
							<?php 
								foreach($cartItems as $cartItem):
									$singleCartItem = getSingleCartItem($cartItem);
							?>
							<div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
									<div class="mr-1"><img class="rounded" src="<?php echo $singleCartItem['image_link']; ?>" width="70"></div>
									<div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold"><b><?php echo $singleCartItem['name']; ?></b></span>
											
									</div>
									
									<div>
											<h5 class="text-grey"><?php echo $singleCartItem['price']; ?></h5>
									</div>
									<div class="d-flex align-items-center">
											<a href="remove_item_from_cart.php?item_index=<?php echo $i; $i++ ?>">
										<i class="fa fa-trash mb-1 text-danger"></i>
										</a>
									</div>
							</div>

							<?php $price += (int)$singleCartItem['price']?>
							<?php endforeach; ?>

							<div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" class="form-control border-0 gift-card" placeholder="discount code/gift card"><button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button></div>
							<div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded">
								<a href="payment.php?price=<?php echo $price ?>" class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="button">Proceed to Pay</a>
							</div>
					</div>
					<!-- $_GET['price'] -->
			</div>
	</div>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>