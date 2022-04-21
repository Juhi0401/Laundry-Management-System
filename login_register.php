<?php
require "./connection.php";
$errors = [];
$my_result="";
$fname_empt_err = "";
$lname_empt_err = "";
$fname_alpha_err = "";
$lname_alpha_err = "";

$email_empt_err = "";
$email_exists_err = "";
$email_invalid_err = "";
$pass_req_err = "";
$pass_len_err = "";
$pass_num_err = "";
$pass_capslet_err = "";
$pass_lowerlet_err = "";
$phone_req_err = "";
$phone_inv_err = "";




if (isset($_POST['Sign_up_button'])) {
    
    $my_fname = $_POST['firstName'];
    $my_lname = $_POST['lastName'];
    $my_emailid = $_POST['email'];
    $my_password = $_POST['password'];
    $my_phone_number = $_POST['number'];
    
    
    // --------------------------------
    
    $email="adkhatri22@icloud.com";
    $subject="Welcome to LMS";
    
    
    $mailto = "adkhatri22@gmail.com";
    $header = "From:".$email;
    $text= "Congratulation".$my_fname." ".$my_lname." you have sucessfully register to LMS \n\n Below are you login credential:  \n\nEmail:".$my_emailid."\nPassword:".$my_password."\n\n\n\nThanks you for join LMS \n Regards\n LMS Team";
    
    
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
  if (empty($my_fname))
  { 
      
      $fname_empt_err = '<div class = "errors"> First Name is required </div>';
      
      array_push($errors, "First Name is required"); 
      
    }
  if (!preg_match("/^[a-zA-Z-' ]*$/",$my_fname)) 
  {
    $fname_alpha_err = '<div class = "errors"> Only Alphabets are allowed for FirstName </div>';  
    array_push($errors, "Only Alphabets are allowed for FirstName ");
  }
  
  
  if (empty($my_lname))
  { 
      $lname_empt_err = '<div class = "errors"> Last Name is required </div>';
      array_push($errors, "Last Name is required"); 
      
    }
  if (!preg_match("/^[a-zA-Z-' ]*$/",$my_lname))
  {
      $lname_alpha_err = '<div class = "errors"> Only Alphabets are allowed for FirstName </div>';  
    array_push($errors, "Only Alphabets are allowed for LastName ");
  }
  
  
  
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
  
  
  if (empty($my_password))
  { 
      $pass_req_err = '<div class = "errors"> Password is required </div>';
      array_push($errors, "Password is required");
}
      
      
  elseif (strlen($my_password) <= 8 || strlen($my_password) >= 15)
  {
    // echo "<script>alert('".$error_count."')</script>";
      $pass_len_err = '<div class = "errors"> Your Password Must between 8 to 15 Characters! </div>';
    array_push($errors, "Your Password Must between 8 to 15 Characters!"); 
    }
elseif(!preg_match("#[0-9]+#",$my_password)) {
    $pass_num_err = '<div class = "errors"> Your Password Must Contain At Least 1 Number!</div>';
    array_push($errors, "Your Password Must Contain At Least 1 Number!");
    }
elseif(!preg_match("#[A-Z]+#",$my_password)) {
    $pass_capslet_err = '<div class = "errors"> Your Password Must Contain At Least 1 Capital Letter!</div>';
    array_push($errors, "Your Password Must Contain At Least 1 Capital Letter!");
    }
elseif(!preg_match("#[a-z]+#",$my_password)) {
     $pass_lowerlet_err = '<div class = "errors"> Your Password Must Contain At Least 1 Lowercase Letter!</div>';
    array_push($errors, "Your Password Must Contain At Least 1 Lowercase Letter!");
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
        // echo "I went in";
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password2 = $_POST['password'];
        $regType = $_POST['reg_role'];
    // $sql="INSERT INTO users_info_table (Name, EmailId,Password,Role,Service,MobileNo,SubDivName,BuildName,ApartNo,Resp_contact_name,Resp_contact_mobile_no) VALUES ('".$my_name."', '".$my_emailid."', '".$my_password."', '".$my_role."', '".$my_services."','".$my_phone_number."','".$my_subdivisions."','".$my_buildings."','".$my_apartments."','".$res_my_name."','".$my_res_phone_no."')";
    $sql = "INSERT INTO login(firstName, lastName, dob, address, number, email, password,custType)
VALUES ('".$firstName."', '".$lastName."', '".$dob."', '".$address."', '".$number."', '".$email."', '".$password2."','".$regType."')";
    // echo 'hi';
    if(!$result = $conn->query($sql))
    {
        die('Error occured [' . $conn->error . ']');
        }
    else{
        mail($my_emailid,$subject,$text,$header);
        // echo "<script>alert('".$error_count."')</script>";
        echo '<script>alert("You are register.!!!!!!!!!!\nWELCOME TO LMS\n\n\n\n\n\n\nYou will receive a E-mail shortly")</script>';
        // echo "Thank you! We will get in touch with you soon";
    };
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
    <section class="login" id="login">
        <div class="max-width">
        <br><br>  
        <?php
        $errors=array();
        $uname_req_err = "";
        $pass_req_err = "";
        
        
        if(isset($_POST['login_button'])){
            // echo "<script>alert('hi')</script>";

            $uname = $_POST['email'];
            $password = $_POST['password'];
            // session_start();
            // echo "<script>alert('".$uname."')</script>";
            
            $pass_fetch= "SELECT * FROM login where email='".$uname."'";
            $results_pass= $conn->query($pass_fetch);
            $user_pass=$results_pass->fetch_assoc();
            // echo "<script>alert('".$user_pass."')</script>";
            
            // echo "<script>alert('".$uname."')</script>";
            if (empty($uname)){
                $uname_req_err = '<div class = "errors"> Username is Required </div>';
                array_push($errors,"Username is Required");
        
            }
            if (empty($password)){
                $pass_req_err = '<div class = "errors"> Password is Required </div>';
                array_push($errors,"Password is Required");
        
            }
            
            if ($user_pass['password'] != $password){
                
                $val_creds_err = '<div class = "errors"> Please enter valid credentials </div>';
                array_push($errors,"Please enter valid credentials");
        
            }

            $error_count = count($errors);
            // echo "<script>alert('".$error_count."')</script>";

            if (count($errors)==0){
            
                if($user_pass['email']==$uname AND $user_pass['password']==$password){
                    $_SESSION["email"]=$uname;
                    // echo "<script>alert('".$_SESSION["email"]."')</script>";
                    // header("Location: admin.html");
                    if($user_pass['custType']=="Admin"){
                        // echo "<script>alert('I am here')</script>";
                        // header("Location: admin.php");
                        
                    }
                    else if($user_pass['custType']=="Manager"){
                        // echo "<script>alert('".$_SESSION["email"]."')</script>";
                        // header("Location: manager.php");
                        
                
                    }
                    else if($user_pass['custType']=="User"){
                        // header("Location: user.php");
                        
                
                    }
                    else if($user_pass['custType']=="Visitor"){
                      // echo '<script>alert("'.$_SESSION['email'].'") </script>';
                        // header("Location: visitor.php");
                        
                
                    }
                }
                else{
                    // echo "<script>alert('".$user_pass['password']."')</script>";
                    //  echo "<script>alert('".$password."')</script>";
                    // header("Location: login_register.php?result=loginerror");
                    
                }
                  
            }
            else{
                // echo "<script>alert('".$error_count."')</script>";

            }
               
        }
    
        ?>  
            <div class="login-content">
                <div class="column left">
                    <div class="container">                
                        <form name="login_form"  action="login.php" method="POST"     style="width: 400px;"
                        >
                            <div class="text">Login</div>
                            <div class="fields"></div>
                            <div class="field">
                                    <input type="email" placeholder="Email" id="email" required name="email">
                            </div>
                            <div class="error">
                            
                            </div>
                            <div class="field">
                                <input type="password" placeholder="Password" id="password" required name="password">
                            </div>  
                            <div class="error">
                            
                            
                            </div>                         
                            <!-- <input type="radio" id="Admin" name="role" value="Admin" required> Admin
                            <input type="radio" id="Manager" name="role" value="Manager" required> Manager
                            <input type="radio" id="User" name="role" value="User" required> User
                            <input type="radio" id="Visitor" name="role" value="Visitor" required> Visitor<br/><br/>  -->
                            <br>
                            <div class="button">
                                <button type="submit" name='f'>Sign In</button>
                            </div>
                            <div class="error">
                            
                            
                            </div>                       
                            <div class="field"></div>
                            <div class="field">
                                <center>
                                    <span><a href="#"> Forgot Your Password? </a></span>
                                <center>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="column right">
                        <div class="container">
                            <form  action="" method="POST">
                                <div class="text">Register</div>
                                <div class="fields"></div>
                                <div class="fields">
                                    <div class="field name">
                                        <input type="text" placeholder="First Name" required name="firstName">
                                        
                                    </div>
                                    <div class="field name">
                                        <input type="text" placeholder="Last Name" required name="lastName">
                                    </div>
                                </div>
                                            <div class="error"> 
                                               <?php echo $fname_empt_err; ?>
                                                <?php echo $fname_alpha_err; ?>
                                                <?php echo $lname_empt_err; ?>
                                                <?php echo $lname_alpha_err; ?>
                                            </div>
                                <div class="field">
                                    <input type="Text" onfocus="(this.type = 'date')" onfocusout="(this.type = 'Text')"  placeholder="Date Of Birth" required name="dob">
                                </div>
                                <div class="field textarea">
                                    <textarea cols="30" rows="10" placeholder="Address" required name="address"></textarea>
                                </div>
                                <div class="field">
                                
                                    <input type="text"  placeholder="Phone Number" onkeypress="return (event.charCode !=8 && event.charCode ==0 || 
                                    (event.charCode >= 48 && event.charCode <= 57))" name="number"/> 
                                </div>
                                            <div class="error" > 
                                                 <?php echo $phone_req_err;  ?>
                                                <?php echo $phone_inv_err;  ?>
                                            </div >
                                <div class="field">
                                    <input type="email" placeholder="Email"required name="email">
                                </div>
                                
                                            <div class="error" > 
                                               <?php echo $email_empt_err; ?>
                                                <?php echo $email_exists_err; ?>
                                                <?php echo $email_invalid_err; ?>
                                            </div>
                                <div class="field">
                                    <input type="password" placeholder="Password" required name="password">
                                    <!-- <input type="checkbox" onclick="my_password_visibility()">Show Password -->
                                
                                            <div class="error" > 
                                                <?php echo  $pass_req_err; ?>
                                                <?php echo $pass_len_err; ?>
                                                <?php echo $pass_num_err; ?>
                                                <?php echo $pass_capslet_err; ?>
                                                <?php echo $pass_lowerlet_err; ?>
                                            </div>
                                </div>
                                <br/>
                                <input type="radio" name="reg_role" value="User" required> User
                            <input type="radio" name="reg_role" value="Visitor" required> Visitor<br/><br/> 
                                    <input type="checkbox"  required>Accept the Tearms and Condition
    
                                <div class="button">
                                    <br/><button name="Sign_up_button" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
  <script>
      const params = new URLSearchParams(window.location.search)
      if (params.get('result')=="sucess"){
        alert("You are register.!!!!!!!!!!\nWELCOME TO LMS ")
      }
      else if(params.get('result')=="error"){
        alert("You are already register with this email try to login...... ")
      }
      else if(params.get('result')=="loginerror"){
        alert("Incorrect Username or password")
      }
      else if(params.get('result')=="signout"){
        alert("Your are Signed out")
      }
  </script>
</div>
<!-- footer section start -->
    <footer>
        <span>Created For <a href="#">WDM Project</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>