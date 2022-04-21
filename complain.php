<?php
require "./connection.php";
session_start();
$complain =$_POST['complains'];
$compType1 =$_POST['compType1'];
$compType2 =$_POST['compType2'];
$compType3 =$_POST['compType3'];
$compType4 =$_POST['compType4'];

$topic='';
if($compType1){
  if($topic){
  $topic =$topic.", ".$compType1;
  }
else{
  $topic =$compType1;
}
}
if ($compType2) {
  if($topic){
  $topic =$topic.", ".$compType2;
}
else{
  $topic =$compType2;
}
}
if ($compType3) {
  if($topic){
  $topic =$topic.", ".$compType3;
}
else{
  $topic =$compType3;
}
}
if ($compType4) {
  if($topic){
  $topic =$topic.", ".$compType4;
}
else{
  $topic =$compType4;
}
}



$loginUser = "SELECT * FROM login where email='".$_SESSION['email']."'";
$loginResult = $conn->query($loginUser);
$line = $loginResult->fetch_assoc();


$sql ="INSERT INTO complain(custId,complain,topic,role)
VALUES ('".$line['id']."','".$complain."','".$topic."','".$line['custType']."')";


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
    header("Location: visitor.php?result=error");
  }
  // header("Location: http://localhost/WDM/user.html?result=error");
  // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>