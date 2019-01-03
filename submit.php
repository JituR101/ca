<?php
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
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Ambassador - E-Cell VNIT</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/ico.jpeg">
</head>

<body>

<!-- Top menu -->
<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">E-Cell VNIT</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
							<span class="li-social">
								<a href="https://www.facebook.com/vnitecell/" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://www.instagram.com/ecellvnit/" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://www.linkedin.com/company-beta/6615520/" target="_blank"><i class="fa fa-linkedin"></i></a>
							</span>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Top content -->
<div class="top-content">
    <div class="container">

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text">
                <img src="assets/img/Campus Ambassador.png">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                <form class="f1">
        <h4>
        <?php
        //Storing values in database

        if ($query) {
            echo '<p><span id="success">Form Submitted Successfully.<br>We will be in touch with you soon.</span></p>';
        } else {
            echo '<p><span>Form Submission Failed.</span></p>';
        }
        ?></h4>
                </form>
            </div>
        </div>

    </div>
</div>


<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/retina-1.1.0.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="bootstrap-multiselect-master/dist/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="bootstrap-multiselect-master/dist/css/bootstrap-multiselect.css">

<!--[if lt IE 10]>
<script src="assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>