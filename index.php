<?php
$servername = "45.94.156.89";
$username = "root";
$password = "newpassword";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=tonning", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>