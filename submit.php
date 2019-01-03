<?php


if( $_SERVER['REQUEST_METHOD'] == 'POST'){

    $Name = $_POST['Name'];
$CollegeCity = $_POST['CollegeCity'];
$CollegeName = $_POST['CollegeName'];
$CollegeStrength = $_POST['CollegeStrength'];
$CollegeAddress = $_POST['CollegeAddress'];
$CollegePincode = $_POST['CollegePincode'];
$CurrentAddress = $_POST['CurrentAddress'];
$CurrentPincode = $_POST['CurrentPincode'];
$MobileNumber = $_POST['MobileNumber'];
$WhatsappNumber = $_POST['WhatsappNumber'];
$Email = $_POST['Email'];
$Motive = $_POST['Motive'];
$Experience = $_POST['Experience'];
$skills = $_POST['skills'];
$Approach = $_POST['Approach'];
$Requirements = $_POST['Requirements'];

$con=mysqli_connect("localhost:3306","vipul3","Ecellvnit123@","CampusAmbassador");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$skills_string = implode(', ', $_POST['skills']);
$query = mysqli_query($con,"insert into campus (Name,`College City`,`College Name`,`College Strength`,`College Address`,`College Pincode`,`Current Address`,`Current Pincode`,`Mobile Number`,`Whatsapp Number`,Email,Motive,Experience,Skills,Approach,Arrangements)
                              values('$Name','$CollegeCity','$CollegeName','$CollegeStrength','$CollegeAddress','$CollegePincode','$CurrentAddress','$CurrentPincode','$MobileNumber','$WhatsappNumber','$Email','$Motive','$Experience','$skills_string','$Approach','$Requirements')");




$from = "E-CELL VNIT <contact@ecellvnit.org>";    //your mail id
        $to = $Email;
        $subject = "Registration successful";
        $body = '
        <!DOCTYPE html>
        <html>
            <head>
                <style>
                    li{
                        padding:10px;
                    }
                    p{
                        font-size:16px;
                    }
                </style>
            </head>
            <body style="width:100%; background-color:#fff; padding:50px 30px; color:1e1e1e; margin-top:100px;font-family:Helvetica,Arial,sans-serif">
            <div style="background-color:#000;width:90%;  padding:10px 30px;"><img src="https://www.ecellvnit.org/img/logo-ecell.png"></div>
                <div style="width:90%; background-color:#f7f9fb; padding:50px 30px;color: #212121;">
                    <h3><b>Hello '.$Name.',</b></h3>
                    <p style="font-size:18px;">Thank You for registering with us.</b><br></p>

                </div>
                <div style="padding:60px 30px; width:90%;color: #212121;">
                    <h4>All the important details will be sent to you shortly.</h4>

                </div>
                <hr>
                <div style="padding:50px 30px; width:90%;color:#fff; background-color:#1e1e1e;">
                    <h5>Contact Us</h5>
                    <p>Anushree Rungta<br>
                    (Core Coordinator)</p>
                    <p>+91 8830 431811</p>
                    <p>or</p>
                    <p>Mail Us: contact@ecellvnit.org</p>

                </div>

            </body>
        </html>';

        $host = "ssl://smtp.gmail.com";
        $port = "465";
        $username = "contact@ecellvnit.org";          //your mail id
        $password = "ECELL@123";                      //password of this mail id

        $headers = array('MIME-Version' => '1.0rn',
            'Content-Type' => "text/html; charset=ISO-8859-1rn",
            'From' => $from,
            'To' => $to,
            'Subject' => $subject);
        $smtp = Mail::factory('smtp',
            array('host' => $host,
                'port' => $port,
                'auth' => true,
                'username' => $username,
                'password' => $password));

        $mail = $smtp->send($to, $headers, $body);


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Campus Ambassador Programme
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>

<body>

<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://www.ecellvnit.org/">
          <img src="assets/img/conso.png" width="20%"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" titl e="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://m.facebook.com/vnitecell/" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/ecellvnit/" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.linkedin.com/company/the-entrepreneurship-cell-vnit-nagpur/" target="_blank" data-original-title="Follow us on Linkedin">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Top content -->
<div class="main main-raised" style="min-height:80vh">
    <div class="container"  style="padding-top:150px">

        <div class="row">
            <div class="col-sm-12 text" style="display:flex; justify-content:center">
                <img src="assets/img/ca_head.jpg" width="100%">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-12 col-lg-offset-3 form-box">

        <p style="text-align:center; font-size:25px">
        <?php
        //Storing values in database

        if ($query) {
            echo '<span id="success">Form Submitted Successfully.<br>We will be in touch with you soon.</span>';
        } else {
            echo '<span>Form Submission Failed.</span>';
        }


        if (!$query) {
            echo '<a href="/" style="text-align:center; font-size:25px"> Go Back</a>';
        }
        echo '</p>';

        if ($query) {

            echo'<div style="width:100%">

    <style>

    .success{
        left: calc(50% - 300px);
        position:relative;
         width:600px;
    }
    @media screen and (max-width: 767px){
        .success{
            width:300px;
            left: calc(50% - 150px);
        }
    }

    </style>
    <img src="assets/img/success.jpg" alt="" class="success" >
</div>';

        }


?>



            </div>
        </div>

    </div>
</div>
<footer>
                    <!-- End Links -->
                    <div class="container" style="padding: 60px 30px">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">






                                    <a href="/" style="margin-left: 20px;">
                                        <img class="g-width-100--xs g-height-auto--xs" src="assets/img/conso.png" width="150px" alt="Ecell Logo">
                                    </a>


                                <br><br>
                                <a class="s-header__action-link" href=" https://m.facebook.com/vnitecell/" target="_blank">
                                    <i class="g-padding-r-5--xs fa fa-facebook"></i>
                                    <span class="g-display-none--xs g-display-inline-block--sm"> </span>
                                </a>
                                <a class="s-header__action-link" href="https://twitter.com/ecell_vnit" target="_blank">
                                    <i class="g-padding-r-5--xs fa fa-twitter"></i>
                                    <span class="g-display-none--xs g-display-inline-block--sm"> </span>
                                </a>
                                <a class="s-header__action-link" href=" https://www.instagram.com/ecellvnit/" target="_blank">
                                    <i class="g-padding-r-5--xs fa fa-instagram"></i>
                                    <span class="g-display-none--xs g-display-inline-block--sm"> </span>
                                </a>

                                <a class="s-header__action-link" href=" https://www.linkedin.com/company/6615520/" target="_blank">
                                    <i class="g-padding-r-5--xs fa fa-linkedin"></i>
                                    <span class="g-display-none--xs g-display-inline-block--sm"> </span>
                                </a>
                                <a class="s-header__action-link" href=" https://www.youtube.com/channel/UC0KNOmODhqLcEpcfN9qEsIQ" target="_blank">
                                    <i class="g-padding-r-5--xs fa fa-youtube"></i>
                                    <span class="g-display-none--xs g-display-inline-block--sm"> </span>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                    <p class="g-color--white">Contact:<b><a href="https://ecellvnit.org/team.php"> Team</a></b></p>
                                    <p class="g-color--white">For Any Queries Contact:<br><b>contact@ecellvnit.org<b></b></b></p><b><b>

                            </div>


                        </div>
                    </div>
                    <!-- End Copyright -->
                </footer>

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