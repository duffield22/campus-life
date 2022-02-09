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
                      <h2 class="highlight header-colorize text-uppercase mb-3 mt-3">The Archery Club</h2>

                      <p class="text-sub size-16">The archery club allows people who are interested in the skill a safe archery range to be taught the experience of archery.</p>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <img src="https://scontent.fric1-2.fna.fbcdn.net/v/t1.6435-9/70113009_113226533396113_4552350589966614528_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=174925&_nc_ohc=Lfeed46qt1gAX_MB7nR&_nc_ht=scontent.fric1-2.fna&oh=00_AT_A6LwqYJHiAER_co476drFCPs8KcJJA8FMoSDfluzf6A&oe=62277037" alt="" class="img-fluid mx-auto d-block">
              </div>
              <div class="col-lg-6 offset-lg-1">
                  <div class="text-sub mt-5 mt-lg-0">
                      <h3 class="title font-weight-medium mb-4">A perfect club for anyone who is interested in archery.</h3>
                      <p class="mb-4 size-18">The archery club allows people to practice recreational archery by shooting arrows at targets. The club also has the hopes of bringing in more people interested in the ancient and noble sport of archery for education and enjoyment for generations of future archers. Carrie Nilles is the advisor of the club and is responsible for the safety of the members of the club. The archery club focuses on shooting arrows at targets but in the event of an unfortunate accident, the club has officers who are trained in first aid and CPR. If newcomers get cold feet about joining because of their lack of skills, that would not be a problem because the archery club requires no experience to join. Archery can get easier if you keep trying and practicing. Some say that the archery club makes them feel like favorite fictional archery characters like Green Arrow, Hawkeye, Legolas, and many more.
                      </p>
                      <a href="#contact" class="learn-more size-15">Learn more <span class="ml-2 right-icon"><i class="fas fa-arrow-right"></i></span></a></br>
                      <a class="btn float-end" href="https://www.facebook.com/mu.archery" role="button"><i class="fa fa-facebook"></i></a>
                      <a class="btn float-end" href="https://twitter.com/mu_archeryclub" role="button"><i class="fa fa-twitter"></i></a>
                      <a class="btn float-end" href="https://www.instagram.com/mu_archery/?hl=bn" role="button"><i class="fa fa-instagram"></i></a>
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
                          <p class="text-sub size-16">Intersted in joining the Archery Club? Give them a call, or send a message below.</p>
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
