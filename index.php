<?php
// Initialize the session no longer using
session_start();
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  //  header("location: welcome.php");
  //  exit;
//} ?>
<?php require('components/head.inc.php'); ?>
<?php require('components/navbar.inc.php'); ?>
  <!-- BODY SECTION -->

  <section class="bg-index"  style="--image-url: url(https://www.marshall.edu/wp-content/uploads/beckford.jpg)">
  <div class="color-overlay"></div>
  <div class="container-fluid">
    <div class="row content">
      <div class="col">
        <h1 class="big-heading">CAMPUS<span class="desktop-br"></span> <br class="mobile-br"> LIFE.</h1>
      </div>
    </div>


    <div class="row content">
      <div class="col">
        <h2 class="small-heading mb-3">Join a Marshall Organization!<br /> A welcoming community. <span class="mobile-br"></span> <br class="desktop-br">  A tradition of success.</h2>

      </div>
    </div>


    <div class="row content">
      <div class="col">
        <a href="http://www.marshall.edu/admissions/apply/" class="apply btn btn-xl btn-light ">APPLY NOW</a>
        <a href="generalinfo.php" class="info btn btn-xl btn-dark ">EXPERIENCE MARSHALL</a>
      </div>
    </div>
  </div>

  </section>

<?php require('components/footer.inc.php'); ?>
