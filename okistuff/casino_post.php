<?php
  $db_host = "localhost";
  $db_username = "okistuff";
  $db_pass = "password";
  $db_name = "okistuff";

  $conn = new mysqli("$db_host","$db_username","$db_pass", "$dbname");
  if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
  }
  else{
      echo "Connect to Database was Successful" . "<br>";
  }

  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $winnings = htmlspecialchars($_POST['winnings']);

  echo "<br>" . $fname . "<br>" . $lname ."<br>". $winnings;
  echo "<br>" . '<a href="../okistuff/casino.html">Casino</a>';
  echo "<br>" . $conn;
  #$sql = "INSERT INTO casino (fname, lname, winnings) VALUES ($fname, $lname, $winnings)";
  $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
  )";
  if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }
  $conn->close();
?>
