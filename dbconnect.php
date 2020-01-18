<?php
  $db_host = "localhost";
  $db_username = "root";
  $db_name = "project";

  $con = mysqli_connect("$db_host","$db_username") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");
?>
