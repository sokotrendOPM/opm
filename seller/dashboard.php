<?php 
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'seller'){
    header("Location: ../index.php");
    exit();
}

include("../config/db.php");
include("../includes/header.php");

$user_id = $_SESSION['user_id'];

// DEBUG (REMOVE AFTER TEST)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// TOTAL PRODUCTS
$result = $conn->query("SELECT COUNT(*) as total FROM products WHERE user_id=$user_id");
$totalProducts = $result ? $result->fetch_assoc()['total'] : 0;

// TOTAL ORDERS
$result2 = $conn->query("SELECT COUNT(*) as total FROM orders WHERE seller_id=$user_id");
$totalOrders = $result2 ? $result2->fetch_assoc()['total'] : 0;

// FIXED TRENDING
$trending = $conn->query("SELECT * FROM products WHERE user_id=$user_id ORDER BY id DESC LIMIT 5");
?>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->
<div class="col-md-3 col-lg-2 bg-dark text-white min-vh-100 p-3">
    <h5 class="mb-4">Seller Panel</h5>

    <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="dashboard.php" class="nav-link text-white">Dashboard</a></li>
        <li class="nav-item mb-2"><a href="?page=products" class="nav-link text-white">My Products</a></li>
        <li class="nav-item mb-2"><a href="?page=orders" class="nav-link text-white">Orders</a></li>
    </ul>
</div>

<!-- MAIN -->
<div class="col-md-9 col-lg-10 p-4">

<h4>Welcome Seller 👋</h4>

<!-- STATS -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card bg-primary text-white p-3">
            Total Products <h3><?php echo $totalProducts; ?></h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-warning text-white p-3">
            Orders <h3><?php echo $totalOrders; ?></h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-success text-white p-3">
            Trending <h3>5</h3>
        </div>
    </div>
</div>

<?php
$page = $_GET['page'] ?? 'dashboard';

/* ================= PRODUCTS ================= */
if($page == 'products') {
?>

<div class="card p-4 shadow-sm">
<h5>Add New Product</h5>

<form method="POST" enctype="multipart/form-data">
    <input class="form-control mb-2" name="name" placeholder="Product Name" required>
    <textarea class="form-control mb-2" name="description" placeholder="product description"></textarea>
    <input class="form-control mb-2" type="number"  placeholder="price"name="price">

    <input type="file" class="form-control mb-2" name="image">

    <button class="btn btn-primary">Save Product</button>
</form>
</div>

<?php
// UPLOAD
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "../images/".$image);

    $conn->query("INSERT INTO products (name,description,price,image,user_id)
    VALUES ('$name','$desc','$price','$image','$user_id')");

    echo "<div class='alert alert-success mt-3'>Product Uploaded</div>";
}
?>

<hr>

<h5>My Products</h5>
<div class="row">
<?php
$products = $conn->query("SELECT * FROM products WHERE user_id=$user_id");

if($products){
while($row = $products->fetch_assoc()){
?>
<div class="col-md-3">
    <div class="card mb-3">
        <img src="../images/<?php echo $row['image']; ?>" class="card-img-top">
        <div class="card-body">
            <h6><?php echo $row['name']; ?></h6>
            <p>$<?php echo $row['price']; ?></p>
        </div>
    </div>
</div>
<?php }} ?>
</div>

<?php } ?>

<?php
/* ================= ORDERS ================= */
if($page == 'orders') {
?>

<div class="card p-3">
<h5>Orders</h5>

<table class="table table-bordered">
<tr>
<th>Customer</th>
<th>Product</th>
<th>Date</th>
</tr>

<?php
$orders = $conn->query("
SELECT users.name as customer, products.name as product, orders.created_at
FROM orders
JOIN users ON orders.user_id = users.id
JOIN products ON orders.product_id = products.id
WHERE orders.seller_id = $user_id
");

if($orders){
while($o = $orders->fetch_assoc()){
?>
<tr>
<td><?php echo $o['customer']; ?></td>
<td><?php echo $o['product']; ?></td>
<td><?php echo $o['created_at']; ?></td>
</tr>
<?php }} ?>

</table>
</div>

<?php } ?>

<?php
/* ================= DASHBOARD ================= */
if($page == 'dashboard') {
?>

<div class="row">
<div class="col-md-8">
    <div class="card p-3">
        <h5>Sales Overview</h5>
        <img src="../images/chart.jpg" class="img-fluid">
    </div>
</div>

<div class="col-md-4">
    <div class="card p-3">
        <h5>Trending Products</h5>
        <ul>
        <?php 
        if($trending){
        while($t = $trending->fetch_assoc()){ ?>
            <li><?php echo $t['name']; ?></li>
        <?php }} ?>
        </ul>
    </div>
</div>
</div>

<?php } ?>

</div>
</div>
</div>

<?php include("../includes/footer.php"); ?>