<?php


$id = $_GET['add_to_cart_id'] ?? '';

if(empty($id) || $id == null){
  header('location: Buy.php');
}


session_start();

$_SESSION['cart_items'][] = $id;

header('location: buy.php');