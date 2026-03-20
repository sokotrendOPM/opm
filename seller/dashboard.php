<?php 
if($_SESSION['role'] != 'seller') header("Location: ../index.php");
include("../includes/header.php"); ?>

<h3>Seller Dashboard</h3>

<div class="row">
<div class="col-md-3"><div class="card bg-primary text-white p-3">Products</div></div>
<div class="col-md-3"><div class="card bg-warning p-3">Orders</div></div>
<div class="col-md-3"><div class="card bg-success p-3">Trending</div></div>
<div class="col-md-3"><div class="card bg-info p-3">Messages</div></div>
</div>

<br>

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
            <li>Smartphone</li>
            <li>Fashion Shoes</li>
        </ul>
    </div>
</div>
</div>

<?php include("../includes/footer.php"); ?>