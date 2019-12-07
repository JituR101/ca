<?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require '../vendor/autoload.php';
  // require '../vendor/phpmailer/phpmailer/src/SMTP.php';
  // require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
  // require '../vendor/phpmailer/phpmailer/src/Exception.php';

  if(isset($_POST['register'])){
    require "dbconnect.php";
    $Name = $con->real_escape_string($_POST['Name']);
    $CollegeCity = $con->real_escape_string($_POST['CollegeCity']);
    $CollegeName = $con->real_escape_string($_POST['CollegeName']);
    $CollegeStrength = $con->real_escape_string($_POST['CollegeStrength']);
    $CollegeAddress = $con->real_escape_string($_POST['CollegeAddress']);
    $CollegePincode = $con->real_escape_string($_POST['CollegePincode']);
    $MobileNumber = $con->real_escape_string($_POST['MobileNumber']);
    $Email = $con->real_escape_string($_POST['Email']);
    $Password = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789';
    $Password = str_shuffle($Password);
    $Password = substr($Password, 0, 8);
    $create_table1 = mysqli_query($con, "CREATE TABLE IF NOT EXISTS CA(ID INT(6) AUTO_INCREMENT PRIMARY KEY,
                                                                    Name varchar(255),
                                                                    CollegeCity varchar(255),
                                                                    CollegeName varchar(255),
                                                                    CollegeStrength varchar(255),
                                                                    CollegeAddress varchar(255),
                                                                    CollegePincode varchar(255),
                                                                    MobileNumber varchar(255),
                                                                    Email varchar(255),
                                                                    Password varchar(255) )");
    if (!$create_table1) {
      echo("Can't create table1" . mysqli_error($con));
    }
    $create_table2 = mysqli_query($con, "CREATE TABLE IF NOT EXISTS $Name(ID INT(6) AUTO_INCREMENT PRIMARY KEY,
                                                                        Task varchar(255),
                                                                        Points varchar(255) )");
    if (!$create_table2) {
      echo("Can't create table2" . mysqli_error($con));
    }
    $insert = mysqli_query($con,"INSERT INTO CA(Name,CollegeCity,CollegeName,CollegeStrength,CollegeAddress,CollegePincode,MobileNumber,Email,Password)
                              VALUES('$Name','$CollegeCity','$CollegeName','$CollegeStrength','$CollegeAddress','$CollegePincode','$MobileNumber','$Email','$Password')");
    $mail = new PHPMailer(TRUE);

      //Tell PHPMailer to use SMTP
      $mail->isSMTP();
      // Enable SMTP debugging
      // SMTP::DEBUG_OFF = off (for production use)
      // SMTP::DEBUG_CLIENT = client messages
      // SMTP::DEBUG_SERVER = client and server messages
      //Set the hostname of the mail server
      $mail->Host = 'smtp.gmail.com';
      // use
      // $mail->Host = gethostbyname('smtp.gmail.com');
      // if your network does not support SMTP over IPv6
      //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
      $mail->Port = 587;
      //Set the encryption mechanism to use - STARTTLS or SMTPS
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      //Whether to use SMTP authentication
      $mail->SMTPAuth = true;
      //Username to use for SMTP authentication - use full email address for gmail
      $mail->Username = 'contact@ecellvnit.org';
      //Password to use for SMTP authentication
      $mail->Password = 'Entrepreneurs1999';
      //Set who the message is to be sent from
      $mail->setFrom('contact@ecellvnit.org');
      //Set who the message is to be sent to
      $mail->addAddress($Email);
      //Set the subject line
      $mail->Subject = 'Welcome On Board';
      //Read an HTML message body from an external file, convert referenced images to embedded,
      //convert HTML into a basic plain-text alternative body
      $mail->isHTML(true);

      $mail->Body = '<!DOCTYPE html>
          <html>
              <head>
                  <style>
                      li{
                          padding:10px;
                      }
                      p{
                          font-size:16px;
                      }

                      *{
                          font-family:Helvetica,Arial,sans-serif;
                      }

                      h2{
                          text-align: center;
                          margin-top: 150px;

                      }
                      html, body{
                          background-color:#f7f9fb;
                          margin: 0;
                      }
                      .context {
                          font-size: 12px;
                          padding: 40px 60px;
                          margin-left:10%;
                          margin-right: 10%;
                      }

                      .context p{
                          font-size: 12px;
                      }
                      p{
                          margin: 15px 0px;
                      }

                  </style>
              </head>
              <body>

                  <div style="background: #0b0b0b; padding:10px 30px;"><img src="https://www.ecellvnit.org/img/logo-ecell.png"></div>
                  <h2 style="font-size:22px;">Welcome to Campus Ambassador Program</h2><br>

                  <div class="context">


                      <h3><b>Hello '.$Name.',</b></h3>


                      <p>Thank You for registering! You are now a part of one of the India’s Biggest Entrepreneurship Summit.</p>
                      <div>
                          <p>We hope this mail finds you in the best of your health and cheerful spirits. We are well pleased to have you on board for this program.</p>


                          <p>
                        To keep you updated, all the relevant details will be e-mailed to you very shortly.<br>
                        Use these details to login to your dashboard:<br>
                        <b>Username: '. $Email .'</b><br>
                        <b>Password: '. $Password .'</b><br>
                              Over this month, you will get access to plenty of valuable resources, which will help you guide your way through this program.<br>
                        For queries and in case of any difficulty, feel free to contact us.<br>

                      </p>
                          <p>
                              With warm regards,<br>
                              Gourav Routray<br>
                              Core-Coordinator, Ecell VNIT
                          </p>


                      </div>
                  </div>
              </body>
          </html>';

      // $url = 'https://startupconclave.ecellvnit.org/send';
      // $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'intheend');
      // use key 'http' even if you send the request to https://...
      // $options = array(
      //   'http' => array(
      //       'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      //       'method'  => 'POST',
      //       'content' => http_build_query($data)
      //   )
      // );
      // $context  = stream_context_create($options);
      // $result = file_get_contents($url, false, $context);
      if(!$mail->send()){
        echo 'Message was not send';
      }


    if($insert){
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
    <meta name="google-site-verification" content="gXeMBX--H7xSFeawu77WYuSIYyuZQdkI4YQQnV0Hf_Y" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Ecell, Vnit, E-cell VNIT, entrepreneurship cell, consortium 20, 2020, consortium'20, campus Ambassador, program, internship, bhai load aa raha hai" />
    <meta name="description" content="Consortium's Campus Ambassador Program is a campus connect program that aims to form a network of like-minded students across India. The program facilitates and nurtures future leaders of the country and contributes to their career growth. We want to empower and groom select students across India who will serve as experts in their respective institutions.">
    <meta name="author" content="E-Cell VNIT">
    <meta name="theme-color" content="#000000">
    <title>Campus Ambassador Program | E-Cell VNIT</title>

    <!--     Fonts and icons     -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/ecell.png">
    <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-kit.css?v=0.0.1" rel="stylesheet" />
    <link href="../css/global/global.css" rel="stylesheet" />
  </head>
      <!-- End Head -->


  <body class="landing-page sidebar-collapse">
    <!--========== HEADER ==========-->
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="index.php">
            <img src="../img/logo-ecell.png" width="100em"> </a>
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
              <a class="nav-link" rel="tooltip" titl e="" data-placement="bottom" href="https://twitter.com/ecellvnit" target="_blank" data-original-title="Follow us on Twitter">
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
            <li class="nav-item">
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.linkedin.com/company/the-entrepreneurship-cell-vnit-nagpur/" target="_blank" data-original-title="Subscribe us on YouTube">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
            <!--========== END HEADER ==========-->


    <!-- Top content -->
    <div class="main main-raised" style="min-height:80vh" style="background-image: url('assets/img/ca_bac.jpg')">
        <div class="container"  style="padding-top:150px">

            <div class="row">
                <div class="col-sm-12 text" style="display:flex; justify-content:center">
                    <img src="../assets/img/ca_head.jpg" width="100%">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-12 col-lg-offset-3 form-box text-center">
                  <h3> Congratulations !!<h3><br>
                    <h4>You have successfully registered to our Campus Ambassador Program</h4>
                    <h4>Now you will receive an email at your registered email address with a Password.</h4>
                    <h4>Use that password to login in to your dashboard where you will be assigned the task and each task contains some points.</h4>
                    <h4>Your Total Points will be shown after completion of Tasks.</h4>
                    <h4><a href="../index.php">Go back and Login to your dashboard </a></h4>
                </div>
            </div>

        </div>
    </div>
    <!-- FOOTER -->
    <footer class="g-bg-color--dark">
        <!-- Copyright -->
        <div class="container g-padding-y-20--xs">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a href="index.php">
                        <img class="g-width-100--xs g-height-auto--xs" src="../img/logo-ecell.png" alt="Ecell Logo">
                    </a>
                    <br><br>
                    <a class="s-header__action-link" href=" https://m.facebook.com/vnitecell/">
                        <i class="fa fa-facebook-square"></i>
                        <!-- <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span><br> -->
                    </a>
                    <a class="s-header__action-link" href="https://twitter.com/ecell_vnit">
                        <i class="fa fa-twitter"></i>
                        <!-- <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span><br> -->
                    </a>
                    <a class="s-header__action-link" href=" https://www.instagram.com/ecellvnit/">
                        <i class="fa fa-instagram"></i>
                        <!-- <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span><br> -->
                    </a>
                    <a class="s-header__action-link" href=" https://www.linkedin.com/company/6615520/">
                        <i class="fa fa-linkedin"></i>
                        <!-- <span class="g-display-none--xs g-display-inline-block--sm">LinkedIn</span><br> -->
                    </a>
                    <a class="s-header__action-link" href=" https://www.youtube.com/channel/UC0KNOmODhqLcEpcfN9qEsIQ">
                        <i class="fa fa-youtube"></i>
                        <!-- <span class="g-display-none--xs g-display-inline-block--sm">YouTube</span> -->
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                        <p class="g-color--white">For Association Opportunities Contact:<br><b>contact@ecellvnit.org</b></p>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 g-text-right--md">
                    <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white">© <a class="g-color--primary" href="https://www.ecellvnit.org/" target="_blank">E-cell Vnit</a> All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- End Copyright -->
    </footer>


    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  </body>

  </html>

  <?php
    }
  }else {
    header("location:../index.php");
  }
?>
