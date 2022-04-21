<?php
require "./connection.php";


$rate = $_POST['rate'];
$feedback =$_POST['feed_back'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
$loginUser = "SELECT * FROM login where email='".$_SESSION['email']."'";
$loginResult = $conn->query($loginUser);
$line = $loginResult->fetch_assoc();


$sql ="INSERT INTO feedback(feedback,rating,userId,role)
VALUES ('".$feedback."','".$rate."','".$line['id']."','".$line['custType']."')";

// echo "<script>alert('".$line['id']."')</script>";

if ($conn->query($sql) === TRUE) {
  if($line['custType']=='User'){
    header("Location: user.php?result=cmpfiled");
  }
  elseif($line['custType']=='Visitor'){
    header("Location: visitor.php?result=cmpfiled");
  }
} else {
  if($line['custType']=='User'){
    header("Location: user.php?result=error");
  }
  elseif($line['custType']=='Visitor'){
    header("Location:visitor.php?result=error");
  }
  // header("Location: http://localhost/WDM/user.html?result=error");
  // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>