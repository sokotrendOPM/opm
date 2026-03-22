<?php
include("../config/db.php");
include("../includes/header.php");

$products = $conn->query("SELECT products.*, users.name as seller FROM products JOIN users ON products.user_id = users.id");
?>

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Product Listing Page</h4>
        <div class="d-flex gap-2">
            <select class="form-select border-0 shadow-sm" style="width: 150px;">
                <option>All Categories</option>
            </select>
            <div class="input-group shadow-sm">
                <input type="text" class="form-control border-0" placeholder="Search products...">
                <button class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <?php while($p = $products->fetch_assoc()){ ?>
        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100 text-center p-3">
                <img src="../images/<?php echo $p['image']; ?>" class="card-img-top mx-auto mb-3" style="max-height: 150px; object-fit: contain;">
                <div class="card-body p-0 text-start">
                    <h6 class="fw-bold mb-1"><?php echo $p['name']; ?></h6>
                    <h5 class="text-primary fw-bold mb-3">$<?php echo $p['price']; ?></h5>
                    <a href="order.php?id=<?php echo $p['id']; ?>" class="btn btn-primary w-100 fw-bold py-2">
                        Add to Cart
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php include("../includes/footer.php"); ?>