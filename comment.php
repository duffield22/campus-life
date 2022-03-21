<?php
// Initialize the session
session_start();
?>
<?php require('components/head.inc.php'); ?>

<?php include('components/navbar.inc.php'); ?>
<!-- BODY SECTION -->

  <!-- About Start -->
  <section class="section bg-grey" id="about">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6 col-md-8">
                  <div class="text-center mb-5">
                      <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">Frequently Asked<span class="mobile-br"></span> <br class="desktop-br">Questions</h2>

                  </div>
              </div>
          </div>

  <!-- About End -->
  <section class="section bg-grey" id="cmt">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
              <div class="text-center mb-2 mt-5">
                  <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">Leave a comment</h2>

          </div>
      </div>
    </div>
  </div>
  </section>
<?php require('components/comment-form.php'); ?>



  <!-- Services End -->

<?php require('components/footer.inc.php'); ?>
