<?php

session_start();

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
  $_SESSION['name']=$Name;
   $sql = "INSERT INTO cap (name, email, collegeName, collegeCity, collegeStrength, pincode, collegeAdd, mobile, whatsapp) VALUES 
   ('$Name', '$email', '$collegeName','$collegeCity', '$collegeStrength', '$collegePincode', '$collegeAddress', '$mobileNumber', '$whatsappNumber' )";   
   if ($conn->query($sql) === TRUE) {
    header('LOCATION:thanks.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } 
  }
?>