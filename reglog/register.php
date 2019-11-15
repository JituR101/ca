<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require '../vendor/autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    if(isset($_POST['register'])){

    require "dbconnect.php";

    $Name = $con->real_escape_string($_POST['Name']);
    $CollegeCity = $con->real_escape_string($_POST['CollegeCity']);
    $CollegeName = $con->real_escape_string($_POST['CollegeName']);
    $CollegeStrength = $con->real_escape_string($_POST['CollegeStrength']);
    $CollegeAddress = $con->real_escape_string($_POST['CollegeAddress']);
    $CollegePincode = $con->real_escape_string($_POST['CollegePincode']);
    $CurrentAddress = $con->real_escape_string($_POST['CurrentAddress']);
    $CurrentPincode = $con->real_escape_string($_POST['CurrentPincode']);
    $MobileNumber = $con->real_escape_string($_POST['MobileNumber']);
    // $WhatsappNumber = $con->real_escape_string($_POST['WhatsappNumber']);
    $Email = $con->real_escape_string($_POST['Email']);
    // $Motive = $con->real_escape_string($_POST['Motive']);
    // $Experience = $con->real_escape_string($_POST['Experience']);
    // $skills = $con->real_escape_string($_POST['skills']);
    // $Approach = $con->real_escape_string($_POST['Approach']);
    // $Requirements = $con->real_escape_string($_POST['Requirements']);

    $Password = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789';
    $Password = str_shuffle($Password);
    $Password = substr($Password, 0, 8);

    // error_reporting(E_ERROR | E_PARSE);
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // $skills_string = implode(', ', $_POST['skills']);

    $create_table1 = mysqli_query($con, "CREATE TABLE IF NOT EXISTS CA(ID INT(6) AUTO_INCREMENT PRIMARY KEY,
                                                                      Name varchar(255),
                                                                      CollegeCity varchar(255),
                                                                      CollegeName varchar(255),
                                                                      CollegeStrength varchar(255),
                                                                      CollegeAddress varchar(255),
                                                                      CollegePincode varchar(255),
                                                                      CurrentAddress varchar(255),
                                                                      CurrentPincode varchar(255),
                                                                      MobileNumber varchar(255),
                                                                      Email varchar(255),
                                                                      Password varchar(255) )");

    $create_table2 = mysqli_query($con, "CREATE TABLE IF NOT EXISTS $Name(ID INT(6) AUTO_INCREMENT PRIMARY KEY,
                                                                          Task varchar(255),
                                                                          Points varchar(255) )");

    $insert = mysqli_query($con,"INSERT INTO CA(Name,CollegeCity,CollegeName,CollegeStrength,CollegeAddress,CollegePincode,CurrentAddress,CurrentPincode,MobileNumber,Email,Password)
                                VALUES('$Name','$CollegeCity','$CollegeName','$CollegeStrength','$CollegeAddress','$CollegePincode','$CurrentAddress','$CurrentPincode','$MobileNumber','$Email','$Password')");


    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
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
    $mail->msgHTML(file_get_contents('mail.html'), __DIR__);


    $url = 'https://startupconclave.ecellvnit.org/send';
    $data = array('subject' => $subject, 'email' => $to, 'html' => $html, 'pass' => 'intheend');

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) { /* Handle error */ }

    //var_dump($result);




}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
  <meta name="google-site-verification" content="gXeMBX--H7xSFeawu77WYuSIYyuZQdkI4YQQnV0Hf_Y" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="keywords" content="Ecell, vnit, E-cell VNIT, entrepreneurship cell, consortium 20, 2020, consortium'20, campus Ambassador, program, internship" />
  <meta name="description" content="Consortium's Campus Ambassador Program is a campus connect program that aims to form a network of like-minded students across India. The program facilitates and nurtures future leaders of the country and contributes to their career growth. We want to empower and groom select students across India who will serve as experts in their respective institutions.">
  <meta name="author" content="E-Cell VNIT">
  <title>Campus Ambassador Program | E-Cell VNIT</title>

  <!--     Fonts and icons     -->
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/ecell.png">
  <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Material+Icons" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=0.0.1" rel="stylesheet" />
  <link href="../css/global/global.css" rel="stylesheet" />
</head>

<body>

<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://www.ecellvnit.org/">
          <img src="../img/logo-ecell.png" width="150px"> </a>
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
<div class="main main-raised" style="min-height:80vh" style="background-image: url('../assets/img/ca_bac.jpg')">
    <div class="container"  style="padding-top:150px">

        <div class="row">
            <div class="col-sm-12 text" style="display:flex; justify-content:center">
                <img src="../assets/img/ca_head.jpg" width="100%">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-12 col-lg-offset-3 form-box">

        <p style="text-align:center; font-size:25px">
        <?php
        //Storing values in database

        if ($insert) {
            echo '<span id="success">Form Submitted Successfully.<br>We will be in touch with you soon.</span><br><a href="/" style="text-align:center; font-size:25px">Go Home</a>';
        } else {
            echo(mysqli_error($con));
        }


        if (!$insert) {
            echo '<a href="/" style="text-align:center; font-size:25px"> Go Back</a>';
        }
        echo '</p>';

        if ($insert) {

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
    <img src="../assets/img/success.jpg" alt="" class="success" >
</div>';

        }


?>



            </div>
        </div>

    </div>
</div>
<?php include("../includes/footer.php") ?>

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
