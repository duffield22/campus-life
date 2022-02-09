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
                      <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">King of Kings<span class="mobile-br"></span> <br class="desktop-br">Chess Club</h2>
                      <p class="text-sub size-16">The King of Kings Chess Club is an organization where Marshall students learn, practice, and compete in chess.</p>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <img src="https://scontent.fric1-1.fna.fbcdn.net/v/t31.18172-8/21731427_10155009797761482_1565185366465583934_o.jpg?_nc_cat=100&ccb=1-5&_nc_sid=2c4854&_nc_ohc=tj7nQ35xLVgAX-2j9Ri&_nc_ht=scontent.fric1-1.fna&oh=00_AT_njt0YU76KKMY1blMYnRg6Qcnt2t0kGZ5v5YRREq9dhw&oe=62292484" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="col-lg-6 offset-lg-1">
                  <div class="text-sub mt-5 mt-lg-0">
                      <h3 class="title font-weight-medium mb-4">A perfect club for anyone who enjoys chess.</h3>
                      <p class="mb-4 size-18">Everyone has heard of chess, but some do not know how to play it, the organization is willing to teach members how to play. Members are encouraged to continue playing even when they feel like they’ve already lost. The club can help you learn a neat trick with different pieces. Chess is an easy game to learn and play as you only need to know the basic rules, how the pieces move, how to checkmate, and a few special rules. However, reaching a master level at chess is extremely hard as it requires a lot of time investment and dedication.</p>
                      <a href="#contact" class="learn-more size-15">Learn more <span class="ml-2 right-icon"><i class="fas fa-arrow-right"></i></span></a>
                  </div>
              </div>
          </div>
      </div>
  </section>
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


  <!-- Contact Start -->
      <section class="section bg-grey" id="contact">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6 col-md-8">
                      <div class="text-center mb-5 mt-5">
                           <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">Contact</h2>
                          <p class="text-sub size-16">Intersted in joining the King of Kings Chess club? Give them a call, or send a message below.</p>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-4">
                      <div class="contact-info">
                          <h4 class="title mb-4">Phone Number:</h4>

                             <p class="text-sub size-15 mb-4"><i class="fas fa-phone"></i> 659-888-5495</p>
                      </div>
                  </div>

                  <div class="col-lg-7 offset-lg-1">
                      <div class="custom-form mt-4 mt-lg-0">
                          <form>
                              <div class="row">
                                   <div class="col-lg-12">
                                      <div class="form-group">
                                          <label for="email">Email:</label>
                                          <input type="email" class="form-control" id="email" placeholder="Enter Your Email.." />
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="form-group">
                                          <label for="subject">Subject:</label>
                                          <input type="text" class="form-control" id="subject" placeholder="Enter Your Subject.." />
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="form-group">
                                          <label for="message">Message:</label>
                                          <textarea name="message" id="message" rows="4" class="form-control" placeholder="Enter Your Message.."></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-12">
                                       <button href="" class="btn btn-primary mt-3 mb-5"><span class="mr-2 left-icon"><i class="fas fa-envelope"></i></span> Send Message</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- contact End -->

  <!-- Services End -->

<?php require('components/footer.inc.php'); ?>
