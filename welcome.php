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
      <section class="bg-index py-5" id="body-section">
      <div class="container-lg">
        <div class="row content">
          <div class="col">
            <h1 class="big-heading">CAMPUS</br> LIFE.</h1>
          </div>
        <div class="row content">
          <div class="col">
            <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.<br> Welcome to CAMPUS LIFE.</h1>
          </div>
        </div>
        <div class="row content">
          <div class="col">
            <h2 class="small-heading">Join a Marshall Organization!<br /> A welcoming community. <br /> A tradition of success.</h2>
            <h3 class="small-heading">Check out some of Marshalls Clubs, Fraternities, and Sororities.<br />Visit the contact page to contact an orgnazation directly. <br /></h3>
          </div>
        </div>
      </div>
      </section>
<?php require('components/footer.inc.php'); ?>
