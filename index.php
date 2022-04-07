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
  <section class="bg-index" id="body-section">
  <div class="container-fluid">
    <div class="row content">
      <div class="col">
        <h1 class="big-heading">CAMPUS</br> LIFE.</h1>
      </div>
    </div>


    <div class="row content mb-5">
      <div class="col">
        <h2 class="small-heading">Join a Marshall Organization!<br /> A welcoming community.   A tradition of success.</h2>

      </div>
    </div>


    <div class="row content">
      <div class="col">
        <a href="http://www.marshall.edu/admissions/apply/" class="apply btn btn-xl btn-light ">APPLY NOW</a>
        <a href="http://apply-new.marshall.edu/register/info-request/" class="info btn btn-xl btn-dark ">REQUEST INFO</a>
      </div>
    </div>
  </div>
  </section>

<?php require('components/footer.inc.php'); ?>
