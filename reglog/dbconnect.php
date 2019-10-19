<?php
  $db_host = "localhost:3306";
  $db_username = "ecellvnit";
  $db_pass = "ECELL@123";
  $db_name = "ca19";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");
?>
