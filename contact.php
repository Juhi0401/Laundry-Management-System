<?php
require "./connection.php";

$name= $_POST['name'];
$email1 = $_POST['email'];
$number= $_POST['number'];
$message = $_POST['message'];

$sql = "INSERT INTO contactus(fullname, email, phoneNumber, message)
VALUES ('".$name."', '".$email1."', '".$number."', '".$message."')";
// echo "<script>alert('hi')</script>";
// $sql = "SELECT * FROM `login`;";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();

if ($conn->query($sql) === TRUE) {
    // echo "<script>alert('Your details have submitted and someone will soon contact you regarding your query..........')</script>";
    header("Location:contact1.php?result=sucess");
    
  } else {
    //   echo "<script>alert('There was some error while submitting the form please try again')</script>";
    header("Location:contact1.php?result=error");
    // echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>