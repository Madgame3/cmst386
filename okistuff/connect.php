<?php
  $db_host = "localhost";
  $db_username = "okistuff";
  $db_pass = "password";
  $db_name = "okistuff";

  $conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
  if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
  }
 ?>
