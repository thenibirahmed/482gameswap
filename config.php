<?php 

$server = "127.0.0.1";
$user = "root";
$pass = "";
$database = "cse482";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>