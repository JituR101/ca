<?php
  $db_host = "localhost:3306";
  $db_username = "novzoin_lakshya";
  $db_pass = "NovLak@12";
  $db_name = "novzoin_Books";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");
?>
