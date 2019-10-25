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

    if (!$create_table1) {
      echo(mysqli_error($con));
    }

    $create_table2 = mysqli_query($con, "CREATE TABLE IF NOT EXISTS $Name(ID INT(6) AUTO_INCREMENT PRIMARY KEY,
                                                                          Task varchar(255),
                                                                          Points varchar(255) )");

    if (!$create_table2) {
      echo(mysqli_error($con));
    }

    $insert = mysqli_query($con,"INSERT INTO CA(Name,CollegeCity,CollegeName,CollegeStrength,CollegeAddress,CollegePincode,CurrentAddress,CurrentPincode,MobileNumber,Email,Password)
                                VALUES('$Name','$CollegeCity','$CollegeName','$CollegeStrength','$CollegeAddress','$CollegePincode','$CurrentAddress','$CurrentPincode','$MobileNumber','$Email','$Password')");

    if($insert){
      header("location:../success.php");
    }
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
    $mail->Username = 'username@gmail.com';
    //Password to use for SMTP authentication
    $mail->Password = 'jacksparrow1';
    //Set who the message is to be sent from
    $mail->setFrom('ecellvnit2k17@gamil.com');
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
