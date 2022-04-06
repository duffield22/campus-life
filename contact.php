<?php
// Initialize the session
session_start();
?>
<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>
<div class="container">
    <!--Section: Contact v.2-->
    <section class="section bg-grey">
        <div class="row justify-content-center">
      <div class=" col-lg-6 bg-light rounded mt-2 mb-2">
        <!--Section heading-->
        <h2 class="text-center section-heading h1 pt-4 ">Contact an Organization</h2>
        <div class="row">
            <!--Grid column-->
            <div class="text-center col">
                <form id ="contact-form" name="contact-form" action="components/mail.php" method="POST">
                    <!--Grid row-->
                    <div class="row justify-content-center">

                        <!--Grid column-->
                        <div class="col">
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
                          <div class="col">
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
                        <div class="col">
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
                        <div class="col">
                            <div class="md-form py-3">
                                <select id="department-selection" class="float-start" name="concerned_department">
                                    <option value="">Select an Organization</option>
                                    <option disabled style="font-weight:bold;color:black">Colleges</option>
                                    <option value="college1">College of Health Professions</option>
                                    <option value="college2">College of Engineering and Computer Science</option>
                                    <option value="college3">College of Education and Professional Development</option>
                                    <option value="college4">College of Science</option>
                                    <option value="college5">College of Liberal Arts</option>
                                    <option value="college6">College of Business</option>
                                    <option value="college7">College of Arts and Media</option>
                                    <option disabled style="font-weight:bold;color:black">Clubs</option>
                                    <option value="club1">Anime and Manga</option>
                                    <option value="club2">Archery</option>
                                    <option value="club3">Marching Thunder</option>
                                    <option value="club4">Ascenders Climbing</option>
                                    <option value="club5">Fencing</option>
                                    <option value="club6">Marshall Smashers</option>
                                    <option value="club7">King of Kings Chess</option>
                                    <option value="club8">Rugby Football</option>
                                    <option value="club9">Esports Association</option>
                                    <option value="club10">Force of Thundering Will</option>
                                    <option disabled style="font-weight:bold;color:black">Interfraternity Recruitment</option>
                                    <option value="fraternity1">Alpha Sigma Phi</option>
                                    <option value="fraternity2">Alpha Tau Omega</option>
                                    <option value="fraternity3">Kappa Alpha Order</option>
                                    <option value="fraternity4">Kappa Sigma</option>
                                    <option value="fraternity5">Sigma Alpha Epsilon</option>
                                    <option value="fraternity6">Sigma Phi Epsilon</option>
                                    <option value="fraternity7">Sigma Tau Gamma</option>
                                    <option disabled style="font-weight:bold;color:black">Panhellinic Sorority Recruitment</option>
                                    <option value="sorority1">Alpha Chi Omega</option>
                                    <option value="sorority2">Alpha Xi Delta</option>
                                    <option value="sorority3">Delta Zeta</option>
                                    <option value="sorority4">Sigma Sigma Sigma</option>
                                    <option disabled style="font-weight:bold;color:black">National Panhellinic Council</option>
                                    <option value="panhellinic1">Alpha Phi Alpha Fraternity Inc.</option>
                                    <option value="panhellinic2">Alpha Kappa Alpha Sorority Inc.</option>
                                    <option value="panhellinic3">Kappa Alpha Psi Fraternity, Inc.</option>
                                    <option value="panhellinic4">Omega Psi Phi Fraternity Inc.</option>
                                    <option value="panhellinic5">Delta Sigma Theta Sorority Inc.</option>
                                    <option disabled style="font-weight:bold;color:black">Other University Offices</option>
                                    <option value="undergradadmissions">Undergraduate Admissions</option>
                                    <option value="gradadmissions">Graduate Admissions</option>
                                    <option value="bursars">Bursar’s Office</option>
                                    <option value="aid">Financial Aid</option>
                                    <option value="hrlife">Housing & Residence Life</option>
                                    <option value="registrar">Registrar</option>
                                    <option value="saffairs">Student Affairs</option>

                                </select>
                            </div>
                        </div>
                    </div>
                      <!--Grid row-->

                      <!--Grid column-->
                      <div class="form-group row justify-content-center">
                        <div class="col mt-2 mb-2">
                          <textarea type="text" class="form-control rounded-0 mb-2" name="message" placeholder="Enter your message here" id="message" rows="3" required></textarea>


                      <!--Grid column-->
                </form>

                  <!--Grid Button-->
                <div class="center-on-small-only">
                    <a class="contact-btn btn btn-dark mt-3" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                </div>
                </div>
            </div>

        </div>



      </div>
      <!-- Grid row -->
</div>
    </section>
  </div>
  <!-- Grid column -->
  <div class="container-fluid">

    <!--Google map-->
    <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
      <iframe src="https://maps.google.com/maps?q=1%20John%20Marshall%20Dr,%20Huntington,%20WV%2025755&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0"
        style="border:0" allowfullscreen></iframe>
    </div>

  </div>
  <!-- Grid column -->
    <!--Section: Contact v.2-->
<?php require('components/footer.inc.php'); ?>
