
<?php
include("../includes/header.php");
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $user_id = $_SESSION['user_id'];

    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../images/".$image);

    $sql = "INSERT INTO products (name,description,price,image,user_id)
    VALUES ('$name','$desc','$price','$image','$user_id')";

    $conn->query($sql);

    echo "<div class='alert alert-success'>Product Added!</div>";
}
?>

<form method="POST" enctype="multipart/form-data" class="card p-4">
    <input class="form-control mb-2" name="name" placeholder="Product Name">
    <textarea class="form-control mb-2" name="description"></textarea>
    <input class="form-control mb-2" name="price" type="number">
    <input class="form-control mb-2" type="file" name="image">
    <button class="btn btn-success">Add Product</button>
</form>

<?php include("../includes/footer.php"); ?>