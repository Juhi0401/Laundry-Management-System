<?php
require "./connection.php";


$sessiontype = $_POST['session'];
$service1 =$_POST['service1'];
$service2 =$_POST['service2'];
$service3 =$_POST['service3'];
$service4 =$_POST['service4'];
$dateT = $_POST['dateT'];
$bill=0;
if($sessiontype=='Pickup'){
  $bill=$bill+10;
}
else if($sessiontype=='Pickup and Drop off'){
  $bill=$bill+15;
}
else if($sessiontype=='Self-Service'){
  $bill=$bill+5;
}

$topic='';

if($service1){
    if($topic){
    $topic =$topic.", ".$service1;
    $bill=$bill+5;
    }
  else{
    $topic =$service1;
    $bill=$bill+5;
  }
  }
  if ($service2) {
    if($topic){
    $topic =$topic.", ".$service2;
    $bill=$bill+6;
  }
  else{
    $topic =$service2;
    $bill=$bill+6;
  }
  }
  if ($service3) {
    if($topic){
    $topic =$topic.", ".$service3;
    $bill=$bill+7;
  }
  else{
    $topic =$service3;
    $bill=$bill+7;
  }
  }
  if ($service4) {
    if($topic){
    $topic =$topic.", ".$service4;
    $bill=$bill+8;

  }
  else{
    $topic =$service4;
    $bill=$bill+8;
  }
  }
//   echo $dateT;

$total=$bill*1.12;

session_start();
$loginUser = "SELECT * FROM login where email='".$_SESSION['email']."'";
$loginResult = $conn->query($loginUser);
$line = $loginResult->fetch_assoc();

$sql = "INSERT INTO placeorder(custId,session, service, date, username, role,bill)
VALUES ('".$line['id']."','".$sessiontype."', '".$topic."', '".$dateT."','".$line['firstName']." ".$line['lastName']."', '".$line['custType']."','".$total."')";

if ($conn->query($sql) === TRUE) {
  if($line['custType']=='User'){
    header("Location: user.php?result=orderplaced");
  }
  elseif($line['custType']=='Visitor'){
    header("Location:visitor.php?result=orderplaced");
  }
} else {
  if($line['custType']=='User'){
    header("Location: user.php?result=ordererror");
  }
  elseif($line['custType']=='Visitor'){
    header("Location:visitor.php?result=ordererror");
  }
  // header("Location: http://localhost/WDM/user.html?result=error");
  // echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>