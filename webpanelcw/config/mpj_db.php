<?php
$servername = "localhost";
// $username = "root";
// $password = "";
$username = "thaibyhost_mpj";
$password = "mrXz8X3WX";

try {
  $conn = new PDO("mysql:host=$servername;dbname=thaibyhost_mpj;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
