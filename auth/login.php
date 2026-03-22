
<?php
session_start();

if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 'admin'){
        header("Location: ../admin/dashboard.php");
    } elseif($_SESSION['role'] == 'seller'){
        header("Location: ../seller/dashboard.php");
    } else {
        header("Location: ../customer/dashboard.php");
    }
    exit();
}
?>


<form action="process_login.php" method="POST">
    <h2>Login</h2>

    <input type="email" name="email" placeholder="Enter Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>

    <select name="role" required>
        <option value="">Login as</option>
        <option value="seller">Seller</option>
        <option value="customer">Customer</option>
    </select><br><br>

    <button type="submit">Login</button>
</form>

<p>No account? <a href="register.php">Register here</a></p>