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
                      <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">The Marching Thunder</h2>

                      <p class="text-sub size-16">Every football team has a cheering spirit so it is fitting that Marshall University would have a club centered on one.</p>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <img src="https://i.ytimg.com/vi/MU--9IuS8Zc/maxresdefault.jpg" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="col-lg-6 offset-lg-1">
                  <div class="text-sub mt-5 mt-lg-0">
                      <h3 class="title font-weight-medium mb-4">Marshall University Bands</h3>
                      <p class="mb-4 size-18">The club that makes up the university’s marching band is called the Marching Thunder. The Marching Thunder club provides entertainment and school spirit at sport games, bowl games, and community events. It is known as the biggest and most noticeable organization on the campus. Leaders of the club motivate club members to practice their instruments, decide which members work well of each other the best, and have each member synchronize perfectly with each other. This club requires payment of $85 that covers instruction, food, and additional materials.
                      </p>
                      <a href="#contact" class="learn-more size-15">Learn more <span class="ml-2 right-icon"><i class="fas fa-arrow-right"></i></span></a></br>
                      <a class="btn float-end" href="https://www.facebook.com/MarshallUSoMBands/" role="button"><i class="fa fa-facebook"></i></a>
                      <a class="btn float-end" href="https://twitter.com/marshallubands" role="button"><i class="fa fa-twitter"></i></a>
                      <a class="btn float-end" href="https://www.instagram.com/marshallubands/?hl=en" role="button"><i class="fa fa-instagram"></i></a>
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
                          <p class="text-sub size-16">Intersted in joining the Marching Thunder? Give them a call, or send a message below.</p>
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
