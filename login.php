<?php
// Initialize the session
session_start();
?>
<?php require('components/login.inc.php'); ?>
<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class=" col-lg-6 bg-light rounded mt-2 mb-2">
      <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>

              <div class="form-group">
                  <input type="submit" class="btn btn-block btn-dark mt-4 mb-2" value="Login">
              </div>


            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require('components/footer.inc.php'); ?>
