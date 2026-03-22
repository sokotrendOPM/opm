<?php
session_start();
include("../config/db.php");

if($_SESSION['role'] != 'seller'){
    header("Location: ../index.php");
}

$name = $_POST['name'];
$desc = $_POST['description'];
$price = $_POST['price'];
$user_id = $_SESSION['user_id'];

// IMAGE UPLOAD
$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp, "../images/".$image);

// INSERT INTO DB
$sql = "INSERT INTO products (name,description,price,image,user_id)
VALUES ('$name','$desc','$price','$image','$user_id')";

$conn->query($sql);

header("Location: products.php");
?>