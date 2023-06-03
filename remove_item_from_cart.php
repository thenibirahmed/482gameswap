<?php 

$index = $_GET['item_index'] ?? null;

if( $index == null ){
  header('location: cart1.php');
}

session_start();
unset($_SESSION['cart_items'][$index]);
header('location: cart1.php');



?>