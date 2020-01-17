<?php
  $db_host = "localhost";
  $db_username = "neouser";
  $db_name = "neo";
  $db_password = "Neo@123";

  $con = mysqli_connect("$db_host","$db_username", "$db_password") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");
?>
