<?php
$servername = "localhost:3306";
$username = "axk7791_root";
$password = "Ad6824148292";
$dbname = "axk7791_test";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>