

<div class=" container">
  <div class="row justify-content-center">
    <div class=" col-lg-6 bg-light rounded mt-2 mb-2">
      <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.<br> Welcome to our site.</h1>

        <a href="components/reset-password.php" class="btn btn-dark">Reset Your Password</a>
        <a href="components/logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>

    </div>
  </div>
</div>
