<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php") ?>

<body class="landing-page sidebar-collapse">
  <?php include("includes/header.php") ?>
  
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/ca_bac.jpg')">
    <div class="container">
      <div class="section text-center">
        <div style="margin-top:80px"></div>
          <h2 class="title">Login Here</h2>
          <div class="section section-contacts" id="signin">
            <div class="row">
              <div class="col-md-8 ml-auto mr-auto">
                <form class="f1 contact-form container" method ="post" action="reglog/login.php">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="email" name="Email" style="text-transform: none;" class="f1-email form-control" placeholder="* Email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="password" name="Password" style="text-transform: none;" class="f1-email form-control" placeholder="* Password">
                    </div>
                  </div>

                  <div class="col-md-12" style="display:flex; justify-content:center">

                    <div class="f1-buttons">
                      <button type="submit" name="login" class="btn btn-submit btn-danger btn-raised">Login</button>
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
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
      <script src="assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
    </body>
    </html>
