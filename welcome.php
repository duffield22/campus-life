<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
} ?>
<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>


      <!-- BODY SECTION -->
      <section class="bg-index" id="body-section">
      <div class="container-fluid">
        <div class="row content">
          <div class="col">
            <h1 class="big-heading">CAMPUS</br> LIFE.</h1>
          </div>
        <div class="row content">
          <div class="col">
            <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.<br> Welcome to CAMPUS LIFE.</h1>
          </div>
        </div>
        <div class="row content mt-3">
          <div class="col">
            <a href="admin/add.php" class="apply btn btn-xl btn-light ">EDIT FAQS</a>
            <a href="components/logout.php" class="info btn btn-xl btn-dark ">LOGOUT</a>
          </div>
        </div>
      </div>
      </div>
      </section>










<?php require('components/footer.inc.php'); ?>
