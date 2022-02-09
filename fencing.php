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
                      <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">Fencing Club</h2>
                      <p class="text-sub size-16">The thrill of the Fencing Club sounds dangerous right, but with the right precautions and safety equipment the club can be safe.</p>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <img src="https://bloximages.newyork1.vip.townnews.com/herald-dispatch.com/content/tncms/assets/v3/editorial/2/c2/2c2cb3ad-5df3-5248-94d9-58f51e235514/5e5d84be0e0c0.image.jpg?resize=1200%2C859" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="col-lg-6 offset-lg-1">
                  <div class="text-sub mt-5 mt-lg-0">
                      <h3 class="title font-weight-medium mb-4">A perfect club for anyone who wants to learn how to rock climb.</h3>
                      <p class="mb-4 size-18">Marshalls fencing club is a great way to relieve stress, make new friends, and learn to duel with swords. The club's goal is to preserve the art of fencing and to have fun with the sport. Club members are given protective gear to not get hurt in the act of fencing. Still, members are required to close-toed shoes, long pants, and gloves for protection. The organization teaches members to combine both the physical and mental strengths of each participant. Fencing is not a difficult sport, but it requires a lot of practice for people to be good at it. Beginners are always welcome, and no experience in fencing is required to join the club.</p>
                      <a href="#contact" class="learn-more size-15">Learn more <span class="ml-2 right-icon"><i class="fas fa-arrow-right"></i></span></a>
                      <a class="btn float-end" href="https://www.facebook.com/profile.php?id=551781254930392" role="button"><i class="fa fa-facebook"></i></a>
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
                          <p class="text-sub size-16">Intersted in joining the fencing club? Give them a call, or send a message below.</p>
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
