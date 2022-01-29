<?php
// Initialize the session
session_start();
?>
<?php include('components/register.inc.php'); ?>
<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<title>Sign Up</title>

<div class="container">
  <div class="row justify-content-center">
    <div class=" col-lg-8 bg-light rounded mt-2 mb-2">
      <div class="wrapper">
          <h2>Sign Up</h2>
          <p>Please fill this form to create an account.</p>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                  <span class="invalid-feedback"><?php echo $username_err; ?></span>
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                  <span class="invalid-feedback"><?php echo $password_err; ?></span>
              </div>
              <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                  <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
              </div>
              <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Submit">
                  <input type="reset" class="btn btn-secondary ml-2" value="Reset">
              </div>
              <p>Already have an account? <a href="login.php">Login here</a>.</p>
          </form>
      </div>
</div>
</div>
</div>
<?php require('components/footer.inc.php'); ?>
