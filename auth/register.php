<form action="process_register.php" method="POST">
    <h2>Register</h2>

    <input type="text" name="name" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" required><br>

    <select name="role" required>
        <option value="seller">Seller</option>
        <option value="customer">Customer</option>
    </select><br><br>

    <button type="submit">Register</button>
</form>