<?php
// Initialize the session
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
} ?>
<?php require('components/head.inc.php'); ?>
<?php require('components/navbar.inc.php'); ?>
  <!-- BODY SECTION -->
  <section class="bg-index" id="body-section">
  <div class="container-lg">
    <div class="row content">
      <div class="col">
        <h1 class="big-heading">CAMPUS<span class="moblie-br"></span> <br class="desktop-br"> LIFE.</h1>
      </div>
    </div>
    <div class="row content">
      <div class="col">
        <h2 class="small-heading">Join a Marshall Organization!<br /> A welcoming community. <br /> A tradition of success.</h2>
      </div>
    </div>
    <div class="row content">
      <div class="col">
        <a href="register.php" class="login btn btn-lg btn-light col-lg-3 col-md-3">Register</a>
      </div>
    </div>
  </div>
  </section>
<?php require('components/footer.inc.php'); ?>
