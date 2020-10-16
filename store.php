<?php

session_start();

require_once('mailing.php');

if(isset($_POST['register']))
{
 $servername = "localhost";
 $username = "ca_2020";
 $password = "cap@2020";
 $dbname = "cap_db";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}	 
 
 $Name=$_POST['Name'];
 $email=$_POST['Email'];
 $collegeName=$_POST['CollegeName'];
 $collegeCity = $_POST['CollegeCity'];
 $collegeStrength = $_POST['CollegeStrength'];
 $collegePincode = $_POST['CollegePincode'];
 $collegeAddress = $_POST['CollegeAddress'];
 $mobileNumber = $_POST['MobileNumber'];
 $whatsappNumber = $_POST['WhatsappNumber'];
 $Name = $conn -> real_escape_string($_POST['Name']);
 $email = $conn -> real_escape_string($_POST['Email']);
 $collegeName = $conn -> real_escape_string($_POST['CollegeName']);
 $collegeCity = $conn -> real_escape_string($_POST['CollegeCity']);
 $collegeStrength = $conn -> real_escape_string($_POST['CollegeStrength']);
 $collegePincode = $conn -> real_escape_string($_POST['CollegePincode']);
 $collegeAddress = $conn -> real_escape_string($_POST['CollegeAddress']);
 $mobileNumber = $conn -> real_escape_string($_POST['MobileNumber']);
 $whatsappNumber = $conn -> real_escape_string($_POST['WhatsappNumber']);
  $_SESSION['name']=$Name;
   $sql = "INSERT INTO cap (name, email, collegeName, collegeCity, collegeStrength, pincode, collegeAdd, mobile, whatsapp) VALUES 
   ('$Name', '$email', '$collegeName','$collegeCity', '$collegeStrength', '$collegePincode', '$collegeAddress', '$mobileNumber', '$whatsappNumber' )";   
   if ($conn->query($sql) === TRUE) {
    $s = "Welcome to Campus Ambassador E-Cell, VNIT ";
    $sent = htmlMail($email, $s, $Name, '', '');
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
  }
?>