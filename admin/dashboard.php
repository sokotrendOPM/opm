<?php
if($_SESSION['role'] != 'admin') header("Location: ../index.php");
include("../includes/header.php"); ?>

<h3>Customer Dashboard</h3>

<div class="row">
<div class="col-md-3">
<div class="card">
<img src="../images/products.jpg">
<div class="card-body">
<h5>Product</h5>
<button class="btn btn-primary">Add to Cart</button>
</div>
</div>
</div>
</div>

<?php include("../includes/footer.php"); ?>