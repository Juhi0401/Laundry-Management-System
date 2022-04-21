<?php
require "./connection.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$number = $_POST['number'];
$email = $_POST['email'];
$password2 = $_POST['password'];
$regType = $_POST['reg_role'];
$sql = "INSERT INTO login(firstName, lastName, dob, address, number, email, password,custType)
VALUES ('".$firstName."', '".$lastName."', '".$dob."', '".$address."', '".$number."', '".$email."', '".$password2."','".$regType."')";


if ($conn->query($sql) === TRUE) {
  // echo '<script>alert("You are register.!!!!!!!!!!\n WELCOME TO LMS ")</script>'
  // echo '<script type="text/javascript">';
  // echo ' alert("You are register.!!!!!!!!!!\nWELCOME TO LMS ")';  //not showing an alert box.
  // echo "document.location = http://localhost/WDM/login_register.html";
  // echo '</script>';
  header("Location: login_register.html?result=sucess");
  
} else {
  header("Location: login_register.html?result=error");
  // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>