<div class="modal fade" id="authModal">
  <div class="modal-dialog modal-dialog-slideout modal-lg">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5>Login / Register</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body row">

        <!-- LOGIN -->
        <div class="col-md-6">
          <h5>Login</h5>
          <form action="auth/process_login.php" method="POST">
            <input class="form-control mb-2" name="email" placeholder="Email">
            <input class="form-control mb-2" type="password" name="password">

            <select class="form-control mb-2" name="role">
              <option value="seller">Seller</option>
              <option value="customer">Customer</option>
              <option value="admin">Admin</option>
            </select>

            <button class="btn btn-primary w-100">Login</button>
          </form>
        </div>

        <!-- REGISTER -->
        <div class="col-md-6">
          <h5>Register</h5>
          <form action="auth/process_register.php" method="POST">
            <input class="form-control mb-2" name="name" placeholder="Name">
            <input class="form-control mb-2" name="email">
            <input class="form-control mb-2" type="password" name="password">

            <select class="form-control mb-2" name="role">
              <option value="seller">Seller</option>
              <option value="customer">Customer</option>
            </select>

            <button class="btn btn-success w-100">Register</button>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>