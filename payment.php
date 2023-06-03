<?php 

if( isset($_POST['checkout']) ){
	require 'config.php';
	session_start();
	$name = $_POST['name'] ?? '';
	$user_id = 1;
	$price = $_POST['price'] ?? 0;
	$items = $_POST['items'] ?? '';
	$payment_option = $_POST['payment_option'] ?? '';
	$number = $_POST['number'] ?? '';
	$trx = $_POST['trx'] ?? '';

	$sql = "INSERT INTO orders (user_id, name, total_price, items, payment_option, number, trx) VALUES ('$user_id', '$name', '$price', '$items', '$payment_option', '$number', '$trx')";

	if (mysqli_query($conn, $sql)) {
		echo "<h1 style='color: white; text-align: center'>New record created successfully</h1>";
		unset($_SESSION['cart_items']);
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Payment Page</title>
    <link rel="stylesheet" type="text/css" href="PaymentStyles.css">
  </head>
  <body>

    <form action="" method="POST">
		<div class="container">

			<p>Enter Billing Name</p>
			<input type="text" name="name">

			<input type="hidden" name="price" value="<?php echo $_GET['price'] ?? 0 ?>">
			<input type="hidden" name="items" value="<?php echo json_encode($_SESSION['cart_items'] ?? []) ?? 0 ?>">

			<h2>Select Payment Method</h2>
			<input type="radio" id="cash" name="payment_option" value="Taka">
			<label for="cash">Cash</label><br>
			<input type="radio" id="bkash" name="payment_option" value="Online">
			<label for="bkash"> Bkash</label><br>

		</div>

		<div id="payment-options">
		<div id="cash">
			<!-- Cash payment option goes here -->
			</div>
			<div id="bkash">

			</div>
		</div>

		<div id="payment-options">

			<div id="cash">
			<div class="container">
				<h3>Cash Payment</h3>
				<p>Amount You Have to Pay</p>
				<input type="number" name="cash-amount" id="cash-amount" disabled value="<?php echo $_GET['price'] ?>">
			</div>
			</div>
			<div id="bkash">
			<div class="container">
				<h3>bKash Payment</h3>
				<p>Enter your bKash number:</p>
				<input type="tel" name="number" id="bkash-number" required>
				<p>Enter Transaction ID</p>
				<input type="text" name="trx" id="bkash-amount" required>
				<button type="submit" name="checkout">Submit Payment</button>
			</div>
			</div>
		</div>
	</form>
  </body>
</html>