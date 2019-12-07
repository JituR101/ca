<?php
  $db_host = "localhost:3306";
  $db_username = "vipul123";
  $db_pass = "Ecellvnit123@";
  $db_name = "CampusAmbassador";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");
?>
