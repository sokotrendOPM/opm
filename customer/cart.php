<?php
session_start();

$id = $_GET['id'];

$_SESSION['cart'][] = $id;

echo "Added to cart! <a href='dashboard.php'>Back</a>";
?>