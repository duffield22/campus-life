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
                      <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">Ascenders Climbing<span class="mobile-br"></span> <br class="desktop-br">Club</h2>
                      <p class="text-sub size-16">The Marshall Ascenders Climbing Club is a student-led organization focused on the sport of rock climbing.</p>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <img src="https://pbs.twimg.com/profile_images/960991108472983552/h9ULK04__400x400.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="col-lg-6 offset-lg-1">
                  <div class="text-sub mt-5 mt-lg-0">
                      <h3 class="title font-weight-medium mb-4">A perfect club for anyone who wants to learn how to rock climb.</h3>
                      <p class="mb-4 size-18">The club is a welcoming group of students who uplift, push, and encourage growth among its members while respecting personal boundaries and limits. Rock climbing is a great way to keep up a decent level of fitness for general all-round strength and some level of cardio-vascular health. The organization aids those who have never climbed before to those who are advanced in climbing. The organization is very motivational as it encourages others to overcome the challenges in their life and reach their goals. Co-president of the Ascenders Climbing Club, Joseph Powell makes sure that the organization allows members to develop skills relevant to their lives while enjoying an activity. The Ascenders Climbing Club is also about growing as an individual and being a part of a community.</p>
                      <a href="#contact" class="learn-more size-15">Learn more <span class="ml-2 right-icon"><i class="fas fa-arrow-right"></i></span></a>
                      <a class="btn float-end" href="https://www.facebook.com/MarshallUClimb/" role="button"><i class="fa fa-facebook"></i></a>
                      <a class="btn float-end" href="https://twitter.com/marshalluclimb" role="button"><i class="fa fa-twitter"></i></a>
                      <a class="btn float-end" href="https://www.instagram.com/accounts/login/?next=/marshalluclimb/" role="button"><i class="fa fa-instagram"></i></a>


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
                          <p class="text-sub size-16">Intersted in joining the Ascenders Climbing Club? Give them a call, or send a message below.</p>
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
