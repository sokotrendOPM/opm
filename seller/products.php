<?php
session_start();
include("../config/db.php");

if($_SESSION['role'] != 'seller'){
    header("Location: ../index.php");
}

$user_id = $_SESSION['user_id'];

// FETCH PRODUCTS
$products = $conn->query("SELECT * FROM products WHERE user_id=$user_id");
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="d-flex">

<!-- SIDEBAR -->
<div class="bg-primary text-white p-3" style="width:250px; min-height:100vh;">
    <h4>My Products</h4>
</div>

<!-- MAIN -->
<div class="flex-grow-1 p-4">

<h3>Add New Product</h3>

<form action="upload_product.php" method="POST" enctype="multipart/form-data" class="card p-4 mb-4">

<input class="form-control mb-2" name="name" placeholder="Product Name" required>
<textarea class="form-control mb-2" name="description"></textarea>
<input class="form-control mb-2" type="number" name="price">

<!-- FILE INPUT -->
<input class="form-control mb-2" type="file" name="image" required>

<button class="btn btn-primary">Save Product</button>

</form>

<h3>My Products</h3>

<div class="row">
<?php while($row = $products->fetch_assoc()){ ?>
<div class="col-md-3">
<div class="card mb-3">
<img src="../images/<?php echo $row['image']; ?>" class="card-img-top">
<div class="card-body">
<h5><?php echo $row['name']; ?></h5>
<p>$<?php echo $row['price']; ?></p>
</div>
</div>
</div>
<?php } ?>
</div>

</div>
</div>

</body>
</html>