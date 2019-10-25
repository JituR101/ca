<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php") ?>

<body class="landing-page sidebar-collapse">
  <?php include("includes/header.php") ?>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/ca_bac.jpg')">
    <div class="container" style="text-align:center">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto col-sm-12">

          <h1 class="title"><b>Campus Ambassador<br>Program</b></h1>
          <h3><b>Your Story Starts With Us</b></h4>
          <br>
          <a href="#signin" class="btn btn-danger btn-raised btn-lg">
            Join Now <i class="fa fa-sign-in"></i>
          </a>
          <a href="login.php" class="btn btn-danger btn-raised btn-lg">
            Login <i class="fa fa-sign-in"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">



    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">About Campus Ambassador Program</h2>
            <h5 class="description">Consortium's Campus Ambassador Program is a campus connect program that aims to form a network of like-minded students across India. The program facilitates and nurtures future leaders of the country and contributes to their career growth. We want to empower and groom select students across India who will serve as  experts in their respective institutions.</h5>
          </div>
        </div>
        <div style="margin-top:80px"></div>

        <div style="position:relative;height:0;padding-bottom:56.24%"><iframe src="https://www.youtube.com/embed/gKfnDdUL-LE?ecver=2&controls=0&showinfo=0&modestbranding=1&vq=highres&rel=0" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>

<div style="margin-top:80px"></div>
        <h2 class="title">Incentives</h2>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon ">
                  <i class="material-icons">featured_play_list</i>
                </div>
                <h4 class="info-title">Certificate</h4>
                <p>Top CAs will be awarded a Certificate Of Organization by Consortium, VNIT Nagpur recognizing their work</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon">
                  <i class="material-icons">airplay</i>
                </div>
                <h4 class="info-title">Webinars</h4>
                <p>Access to exclusive webinars organised by E-Cell VNIT Nagpur</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon">
                  <i class="material-icons">highlight</i>
                </div>
                <h4 class="info-title">Internships</h4>
                <p>Top 20 Capmus Ambassadors will be given Internship Opportunity</p>
              </div>
            </div>
        </div>
        </div>
      <div class="section section-contacts" id="signin">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h4 class="text-center description"><b>So here's a chance to be an extended part of the organizing team of Consortium'19 and ignite a spirit of entrepreneurship among the young minds of your college.</b></h4>
            <h2 class="text-center title">Join Now</h2>

                    	<form role="form" action="reglog/register.php" method="post" class="f1 contact-form container" >
                    	  <div class="row">

                    			      <div class="col-md-6">
                    			         <div class="form-group">
                      			          <label  for="f1-full-name">Full Name *</label>
                                      <input type="text" name="Name"  class="f1-full-name form-control" id="f1-full-name" required>
                                  </div>
                    			      </div>
                    			      <div class="col-md-6">
                    			        <div class="form-group">
                                    <label for="f1-email">Email *</label>
                                    <input type="email" name="Email" class="f1-email form-control" id="f1-email" required>
                                </div>


                    			      </div>
                    			      <div class="col-md-6">

                    			        <div class="form-group">
                                    <label  for="f1-college-name">College Name *</label>
                                    <input type="text" name="CollegeName"  class="f1-college-name form-control" id="f1-college-name" required>
                                </div>

                    			      </div>




                    			      <div class="col-md-6">
                    			        <div class="form-group">
                                    <label  for="f1-college-city">College City *</label>
                                    <input type="text" name="CollegeCity" class="f1-college-city form-control" id="f1-college-city" required>
                                </div>

                    			      </div>
                    			      <div class="col-md-6">
                    			        <div class="form-group">
                                    <label  for="f1-college-strength">College Strength *</label>
                                    <input type="number" name="CollegeStrength" placeholder="eg. 4000" class="f1-college-strength form-control" id="f1-college-strength" required>
                                </div>

                    			      </div>
                    			      <div class="col-md-6">

                    			        <div class="form-group">
                                    <label for="f1-college-pincode">Pincode *</label>
                                    <input type="number" name="CollegePincode"  class="f1-college-pincode form-control" id="f1-college-pincode" required>
                                </div>
                                </div>
                                <div class="col-md-12">
                    			        <div class="form-group">
                                    <label for="f1-college-address">College Address *</label>
                                    <textarea name="CollegeAddress" placeholder=""
                                    	                 class="f1-college-address form-control" id="f1-college-address" required></textarea>
                                </div>

                    			      </div>
                    			      <div class="col-md-6">
                    			        <div class="form-group">
                                    <label for="f1-mobile-number">Mobile Number *</label>
                                    <input type="number" pattern="[789][0-9]{9}" name="MobileNumber" class="f1-mobile-number form-control" id="f1-mobile-number" required>
                                </div>
                    			      </div>
                    			      <div class="col-md-6">
                    			        <div class="form-group">
                                    <label for="f1-whatsapp-number">Whatsapp Number *</label>
                                    <input type="number" name="WhatsappNumber"  class="f1-whatsapp-number form-control" id="f1-whatsapp-number" required>
                                </div>
                    			      </div>
                    			      <div class="col-md-6">

                    			        <div class="form-group input-field " style="display:none">
                                    <label for="multiple-checkboxes">Skills *</label>
                                    <select id="multiple-checkboxes" name="skills[]" multiple="multiple" required>
                                        <option selected value="None">Video editing</option>
                                        <option value="Content Writing">Content Writing</option>
                                        <option value="Poster Design">Poster Design</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Publicity">Publicity</option>
                                    </select>
                                </div>
                    			      </div>
                    			      <div class="col-md-6">
                    			        <div class="form-group" style="display:none">
                                    <label>Will you be able to organize workshop (getting permission, a lecture hall, projector etc.) in your institute if E-Cell VNIT team takes care of the trainer and other requirements?   *</label>
                                    <select name="Requirements" required>
                                        <option selected value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>

                    			      </div>




                                <div class="form-group" style="display:none">
                                    <label for="f1-current-address">Current Address *</label>
                                    <textarea name="CurrentAddress" placeholder=""
                                              class="f1-current-address form-control" id="f1-current-address" required>X</textarea>
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->                    </div>
                                <div class="form-group" style="display:none">
                                    <label for="f1-current-pincode">Pincode *</label>
                                    <input type="number" value="000000" name="CurrentPincode" placeholder="eg. 440010" class="f1-current-pincode form-control" id="f1-current-pincode" required>
                                </div>



                                <div class="form-group" style="display:none">
                                    <label for="f1-motive">Primary motive to apply for this post *</label>
                                    <textarea name="Motive" placeholder=""
                                              class="f1-motive form-control" id="f1-motive" required>X</textarea>
                                </div>
                                <div class="form-group" style="display:none">
                                    <label for="f1-experience">Relevant past experience *</label>
                                    <textarea name="Experience" placeholder=""
                                              class="f1-experience form-control" id="f1-experience" required>X</textarea>
                                </div>

                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#multiple-checkboxes').multiselect();
                                    });
                                </script>
                                <div class="form-group" style="display:none">
                                    <label for="f1-approach">State ( in not more than 4 steps )your approach in Organizing an event (choose any Entrepreneurship Workshop as an example)  *</label>
                                    <textarea name="Approach" placeholder=""
                                              class="f1-approach form-control" id="f1-approach" required>X</textarea>
                                </div>
                                <br><br>
                            <div class="col-md-12" style="display:flex; justify-content:center">

                              <div class="f1-buttons">
                                    <button type="submit" class="btn btn-submit btn-danger btn-raised">Submit</button>
                                </div>
                            </div>


                        </div>
                    	</form>




          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <?php include("includes/footer.php") ?>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>
</html>
