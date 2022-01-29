<?php
// Initialize the session
session_start();
?>
<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<div class="container">
    <!--Section: Contact v.2-->
    <section class="section">
        <!--Section heading-->
        <h2 class="text-center section-heading h1 pt-4">Contact an Organization</h2>
        <div class="row">
            <!--Grid column-->
            <div class="text-center col">
                <form id ="contact-form" name="contact-form" action="components/mail.php" method="POST">
                    <!--Grid row-->
                    <div class="row justify-content-center">

                        <!--Grid column-->
                        <div class="col-md-8">
                            <div class="md-form">
                                <div class="md-form">
                                  <label for="name" class="float-start">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>

                                </div>
                            </div>
                        </div>
                        <!--Grid column-->
                      </div>

                      <div class="row justify-content-center">

                          <!--Grid column-->
                          <div class="col-md-8">
                              <div class="md-form">
                                  <div class="md-form">
                                    <label for="subject" class="float-start">Subject</label>
                                      <input type="text" id="subject" name="subject" class="form-control" required>

                                  </div>
                              </div>
                          </div>
                          <!--Grid column-->
                        </div>

                      <div class="row justify-content-center">
                        <!--Grid column-->
                        <div class="col-md-8">
                            <div class="md-form">
                                <div class="md-form">
                                  <label for="email" class="float-start">Email</label>

                                    <input type="text" id="email"  name="email" class="form-control" required>
                                  </div>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mb-2 justify-content-center">
                        <div class="col-md-8">
                            <div class="md-form py-3">
                                <select id="department-selection" class="float-start" name="concerned_department">
                                    <option value="">Select an Organization</option>
                                    <option value="club1">Club1</option>
                                    <option value="club2">Club2</option>
                                    <option value="club3">Club3</option>
                                    <option value="club4">Club4</option>
                                    <option value="club5">Club5</option>
                                    <option value="fraternity1">Fraternity1</option>
                                    <option value="fraternity1">Fraternity1</option>
                                    <option value="fraternity1">Fraternity1</option>
                                    <option value="fraternity1">Sorority1</option>
                                    <option value="fraternity1">Sorority2</option>
                                    <option value="fraternity1">Sorority3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                      <!--Grid row-->

                      <!--Grid column-->
                      <div class="form-group row justify-content-center">
                        <div class="col-md-8 mt-2 mb-2">
                          <textarea type="text" class="form-control rounded-0 mb-2" name="message" placeholder="Enter your message here" id="message" rows="3" required></textarea>
                        </div>
                        </div>
                      <!--Grid column-->
                </form>

                  <!--Grid Button-->
                <div class="center-on-small-only">
                    <a class="submit-btn btn btn-lg btn-success"onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
            </div>

        </div>

        <!-- Grid column -->
        <div class="col-lg-12">

          <!--Google map-->
          <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
            <iframe src="https://maps.google.com/maps?q=1%20John%20Marshall%20Dr,%20Huntington,%20WV%2025755&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!--Section: Contact v.2-->
<?php require('components/footer.inc.php'); ?>
