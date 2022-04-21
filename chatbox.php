<?php
require "./connection.php";

$name = $_POST['Name'];
$message =$_POST['msg'];

$sql = "INSERT INTO chatbox(name, message) 
VALUES ('".$name."', '".$message."')";


// http://localhost/WDM/login_register.html
if ($conn->query($sql) === TRUE) {
  header("Location: /");
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>