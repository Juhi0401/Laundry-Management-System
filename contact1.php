<?php
require "./connection.php";
$errors = [];
$my_result="";
// $fname_empt_err = "";
// $lname_empt_err = "";
// $fname_alpha_err = "";
// $lname_alpha_err = "";

$email_empt_err = "";
$email_exists_err = "";
$email_invalid_err = "";
$phone_req_err = "";
$phone_inv_err = "";




if (isset($_POST['submit1'])) {
    // echo "<script>alert('hi')</script>";
    $my_name = $_POST['name'];
    // $my_fname = $_POST['firstName'];
    // $my_lname = $_POST['lastName'];
    $my_emailid = $_POST['email'];
    
    // $my_password = $_POST['password'];
    $my_phone_number = $_POST['number'];
    $msg = $_POST['message'];
    
    
    // --------------------------------
    
    $email="adkhatri22@icloud.com";
    $subject="Contact US LMS response";
    
    
    $mailto = "adkhatri22@gmail.com";
    $header = "From:".$mailto;
    
    // $text= "Congratulation".$my_fname." ".$my_lname." you have sucessfully register to LMS \n\n Below are you login credential:  \n\nEmail:".$my_emailid."\nPassword:".$my_password."\n\n\n\nThanks you for join LMS \n Regards\n LMS Team";
    
    
    // -----------------------
    

    $user_validation_query = "SELECT * FROM login where email='$my_emailid'";
  $my_result = $conn->query($user_validation_query);
  $user = $my_result->fetch_assoc();
  
  if ($user)
  { 
      $email_exists_err = '<div class = "errors"> Email already exists </div>';
      array_push($errors, "Email already exists");
  }
  else{
//   if (empty($my_fname))
//   { 
      
//       $fname_empt_err = '<div class = "errors"> First Name is required </div>';
      
//       array_push($errors, "First Name is required"); 
      
//     }
//   if (!preg_match("/^[a-zA-Z-' ]*$/",$my_fname)) 
//   {
//     $fname_alpha_err = '<div class = "errors"> Only Alphabets are allowed for FirstName </div>';  
//     array_push($errors, "Only Alphabets are allowed for FirstName ");
//   }
  
  
//   if (empty($my_lname))
//   { 
//       $lname_empt_err = '<div class = "errors"> Last Name is required </div>';
//       array_push($errors, "Last Name is required"); 
      
//     }
//   if (!preg_match("/^[a-zA-Z-' ]*$/",$my_lname))
//   {
//       $lname_alpha_err = '<div class = "errors"> Only Alphabets are allowed for FirstName </div>';  
//     array_push($errors, "Only Alphabets are allowed for LastName ");
//   }
  
  
  
  if (empty($my_emailid)) 
  {
      $email_empt_err = '<div class = "errors"> Email is required </div>';  
      array_push($errors, "Email is required");
    }
      
      
  elseif (!filter_var($my_emailid, FILTER_VALIDATE_EMAIL)) 
  {
    $email_invalid_err = '<div class = "errors"> Invalid email format </div>';  
    array_push($errors, "Invalid email format"); 
  }
  
  
  
  
  
  
  
  
  if (empty($my_phone_number)) { 
       $phone_req_err = '<div class = "errors"> Phone number is required</div>';
      array_push($errors, "Phone number is required");
      }
  elseif(!preg_match("/^[0-9]{10}$/", $my_phone_number)) 
  {
      $phone_inv_err = '<div class = "errors"> Phone number is invalid</div>';
    array_push($errors, "Phone number is invalid");
  }
  
}

    $error_count = count($errors);
    // echo "<script>alert('".$error_count."')</script>";
  if ($error_count == 0) {
            $name= $_POST['name'];
            $email1 = $_POST['email'];
            $number= $_POST['number'];
            $message = $_POST['message'];
            $text = "User ".$name." and email: ".$email1." have tried to contact you regarding \n\n message:\n".$msg;
            // echo "<script>alert('hi2')</script>";
            $sql = "INSERT INTO contactus(fullname, email, phoneNumber, message)
            VALUES ('".$name."', '".$email1."', '".$number."', '".$message."')";
            // echo "<script>alert('hi')</script>";
            // $sql = "SELECT * FROM `login`;";
            // $result = $conn->query($sql);
            // $row = $result->fetch_assoc();
            
            if ($conn->query($sql) === TRUE) {
                // echo "<script>alert('hi3')</script>";
                mail($email,$subject,$text,$header);
        // echo "<script>alert('".$error_count."')</script>";
                echo '<script>alert("Contact us form sumitted")</script>';
                // echo "<script>alert('Your details have submitted and someone will soon contact you regarding your query..........')</script>";
                // header("Location:contact1.php?result=sucess");
                
              } else {
                //   echo "<script>alert('hi4')</script>";
                  echo "<script>alert('There was some error while submitting the form please try again')</script>";
                // header("Location:contact1.php?result=error");
                // echo "Error: " . $sql . "<br>" . $conn->error;
      
    
            }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>*{
        box-sizing: border-box;}
        .error{
            color: red;
        }
</style>
</head>
<body>
<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <?php require 'header.php' ?>

    <!-- Contact US --> 
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                <img src="images/contact.png" style="width:50%;">
                </div>
                <div class="column right">
                    <div class="container">
                        <div class="msg">
                        <form name="contact-form"  action="" method="POST">
                            <div class="user">
                                <input type="text" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="user">
                                <input type="mail" name="email" placeholder="Email" required>
                            </div>
                            <div class="error" > 
                                               <?php echo $email_empt_err; ?>
                                                <?php echo $email_exists_err; ?>
                                                <?php echo $email_invalid_err; ?>
                            </div>
                           
                            <div class="user">
                                <input type="text" name="number" placeholder="Phone Number" required>
                            </div>
                            <div class="error" > 
                                                 <?php echo $phone_req_err;  ?>
                                                <?php echo $phone_inv_err;  ?>
                                            </div >
                        
                            <div class="user-message">
                                <input type="text" name="message" placeholder="Message" required>
                            </div>
                            <div class="btn">
                                <input type="submit" name="submit1" value="submit">
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </section>
    <script>
        const params = new URLSearchParams(window.location.search)
        if (params.get('result')=="sucess"){
          alert("Your details have submitted and someone will soon contact you regarding your query..........")
        }
        else if(params.get('result')=="error"){
          alert("There was some error while submitting the form please try again")
        }
    </script>

<!-- Chat box -->
 <img src="images/img.png" class="open-button" width="60px" onclick="openForm()">

<div class="chat-popup" id="myForm">
  <form action="chatbox.php" Method="POST" class="form-container">
    <h1 style="color:crimson">Chat With US!!!!!!</h1>
    <hr><br>
    <label for="msg"><b>Name</b></label><br>
    <input type="text" placeholder="Name" name="Name" required>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn" onclick="Send">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<!-- footer section start -->
    <footer>
        <span>Created For <a href="#">WDM Project</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>