<?php
session_start();
include("../config/db.php");

$user_id = $_SESSION['user_id'];

$sql = "SELECT orders.*, users.name 
FROM orders 
JOIN users ON orders.user_id = users.id";

$result = $conn->query($sql);
?>

<h3>Orders</h3>

<table class="table">
<tr><th>User</th><th>Product</th><th>Qty</th></tr>

<?php while($row = $result->fetch_assoc()){ ?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['product_id']; ?></td>
<td><?php echo $row['quantity']; ?></td>
</tr>
<?php } ?>

</table>