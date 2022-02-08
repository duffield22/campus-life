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
                      <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">Anime & Manga Association</h2>
                      <p class="text-sub size-14">Many people love anime, so it is no surprise that Marshall University would have their own club.</p>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <img src="https://i.pinimg.com/736x/cc/ca/f5/cccaf5719de6c63b42cbde2c3b842a75--do-you-anime-characters.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="col-lg-6 offset-lg-1">
                  <div class="text-sub mt-5 mt-lg-0">
                      <h3 class="title font-weight-medium mb-4">A perfect club for anyone who enjoys anime.</h3>
                      <p class="mb-4 size-15">Anime & Manga Association (MAMA) is a student organization that is dedicated to watching and talking about Japanese anime, manga, and anything related. Both anime and manga can come in many different shapes and forms: slice-of-life, Shonen, magical girl, dystopia, and many other genres. The purpose of the Anime & Manga Association help Marshall students has a break from all the stress and make connections with other people while enjoying the latest Japanese animation and other aspects of Japanese pop culture. Some club members even bring attention to anime and manga that are not well known by many. Of course, some club members will not have the same opinion, but members know to be respectful of other’s opinion. The advisor of the Anime and Manga Association club is Natsuki Anderson, who encourages all members to talk about their favorite kind of anime, even if it is not well-known.</p>
                      <a href="#contact" class="learn-more size-15">Learn more <span class="ml-2 right-icon"><i class="fas fa-arrow-right"></i></span></a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- About End -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
              <div class="text-center mb-2 mt-5">
                  <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">Leave a comment</h2>

          </div>
      </div>
    </div>
  </div>
<?php require('components/comment-form.php'); ?>


  <!-- Contact Start -->
      <section class="section" id="contact">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6 col-md-8">
                      <div class="text-center mb-5">
                           <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">Contact</h2>
                          <p class="text-sub size-14">Intersted in joining the Anime and Manga Association? Give them a call, or send a message below.</p>
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
                                       <button href="" class="btn btn-primary mt-3"><span class="mr-2 left-icon"><i class="fas fa-envelope"></i></span> Send Message</button>
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
