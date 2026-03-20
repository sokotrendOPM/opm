<?php
include("../config/db.php");

$id = $_GET['id'];

$conn->query("UPDATE products SET views = views + 1 WHERE id=$id");

$result = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2><?php echo $row['name']; ?></h2>
<img src="../images/<?php echo $row['image']; ?>" width="200">
<p><?php echo $row['description']; ?></p>