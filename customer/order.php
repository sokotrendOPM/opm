<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['user_id'])){
    header("Location: ../index.php");
    exit();
}

$product_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// GET SELLER ID
$product = $conn->query("SELECT user_id FROM products WHERE id=$product_id")->fetch_assoc();
$seller_id = $product['user_id'];

// INSERT ORDER
$conn->query("INSERT INTO orders (user_id, product_id, seller_id)
VALUES ($user_id, $product_id, $seller_id)");

echo "<script>
alert('Order placed successfully!');
window.location='dashboard.php';
</script>";
?>