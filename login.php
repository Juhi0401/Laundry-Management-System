<?php
require "./connection.php";

$email1 = $_POST['email'];
$password2 = $_POST['password'];
session_start();

$sql = "SELECT * FROM `login` where email='".$email1."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();



if ($row) {
  // echo '<script>alert("You are register.!!!!!!!!!!\n WELCOME TO LMS ")</script>'
  // echo '<script type="text/javascript">';
  // echo ' alert("You are register.!!!!!!!!!!\nWELCOME TO LMS ")';  //not showing an alert box.
  // echo "document.location = http://localhost/WDM/login_register.html";
  // echo '</script>';
  if($row['email']==$email1 AND $row['password']==$password2){
    $_SESSION["email"]=$email1;
    
    // header("Location: http://localhost/WDM/admin.html");
    if($row['custType']=="Admin"){
        header("Location: admin.php");
    }
    else if($row['custType']=="Manager"){
        header("Location: manager.php");

    }
    else if($row['custType']=="User"){
        header("Location: user.php");

    }
    else if($row['custType']=="Visitor"){
      // echo '<script>alert("'.$_SESSION['email'].'") </script>';
        header("Location: visitor.php");

    }
}
else{
    header("Location: login_register.php?result=loginerror");
    // header("Location: http://localhost/WDM/user.html");
    // echo " ".$row['email']." ";
    // echo " ".$row['email']." ";
    // echo " ".$password2." ";
    // echo '<script> alert('.$row['email'].') </script>';  //not showing an alert box.
}
//   header("Location: http://localhost/WDM/admin.html");
  
} else {
  header("Location: login_register.php?result=error1");
  // echo "Error: " . $sql . "<br>" . $conn->error;
  
}

$conn->close();
?>