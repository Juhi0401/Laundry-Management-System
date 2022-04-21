<?php
require "./connection.php";
session_start();
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
  <style>
     #placeorder{
      width: 100%;
      height: 100%;
      border: 2px solid crimson;
      background: crimson;
      color: #fff;
      outline: none;
      font-size: 20px;
      font-weight: 500;
      border-radius: 6px;
      cursor: pointer;
      transition: all 0.3s ease;
}
  </style>
</head>
<body>

<?php
// require "./connection.php";

$email1 = $_POST['email'];
$password2 = $_POST['password'];
// session_start();

$loginUser = "SELECT * FROM login where email='".$_SESSION['email']."'";
$loginResult = $conn->query($loginUser);
$line = $loginResult->fetch_assoc();
?>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <?php require "./header1.php"; ?>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="#" onclick="uplaceorder()" >
          <span class="icon">PO</span>
          <span class="title" id="menu" value="Div1" >Place Order</span></a></li>
        <li><a href="#" onclick="uvieworder()">
          <span class="icon">OD</span>
          <span class="title" id="menu" value="Div2">Order Details</span>
          </a></li>
        <li><a href="#" onclick="ufeedback()">
          <span class="icon">F</span>
          <span class="title">Feedback</span>
          </a></li>
        <li><a href="#"  onclick="ucomplain()">
          <span class="icon">C</span>
          <span class="title">Complain</span>
          </a></li>
        
    </ul>
  </div>
  
  <div class="main_container">
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
              <div id="Div1" style="display: block;">
                <div class="text-1">New Order</div>
                <form name="order_form"  action="placeorder.php" method="POST">
                <table>
                <tr>
                  <td >
                      <tr><td>Type of session</td></tr>
                      <tr ><td align="left"><input type="radio" name="session" value="Pickup"> Pickup </td></tr>
                      <tr><td align="left"><input type="radio" name="session" value="Pickup and Drop off"> Pickup and Drop off </td></tr>
                      <tr><td align="left"><input type="radio" name="session" value="Self-Service"> Self-Service  </td></tr>
                </tr>
                
                <tr>
                  <td>
                    <tr><td>Type of Services</td></tr>
                      <tr ><td align="left"><input type="checkbox" name="service1" value="Washer and Dryer"> Washer and Dryer </td></tr>
                      <tr><td align="left"><input type="checkbox" name="service2" value="Dry Cleaning"> Dry Cleaning</td></tr>
                      <tr><td align="left"><input type="checkbox" name="service3" value="Iron and Fold"> Iron and Fold </td></tr>
                      <tr><td align="left"><input type="checkbox" name="service4" value="Leather, fur & suede"> Leather, fur & suede </td></tr>
                  </td>
                </tr>
                
                
                <tr>
                  <td>
                    <tr><td>Date</td></tr>
                    <tr ><td align="left"><input type="Text" onfocus="(this.type = 'date')" 
                    style="background:transparent ;width:100%;" name="dateT" onfocusout="(this.type = 'Text')"  placeholder="Session Date" required></td></tr>
                  </td>
                </tr>
                <tr>
                  <td>
                  <div class="button">
                    <button type="submit" id="placeorder" >Place Order</button>
                  </div>
                    <!-- <input type="submit"><a>Place Order</a></input> -->
                  </td>
                </tr>

                </table>
              </form>
              </div>
              <div id="Div2" style="display: none;">
                <div class="tbl2">
                  <h2>Order Details</h2>
                  <table width= "90%" align="right">
                    <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Employee ID</th>
                        
                        <th scope="col">Date</th>
                        
                        <th scope="col">Session</th>
                        <th scope="col">Services</th>
                        <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      
                      $sql = "SELECT * FROM placeorder where custId=".$line['id']."";
                      $result = $conn->query($sql);
                      $row = $result->fetch_all(MYSQLI_ASSOC);
                      foreach ($row as $oRow){
                      echo "
                      <tr>
                        <td data-label='Order ID'>".$oRow['orderID']."</td>
                        <td data-label='Employee ID'>2</td>
                        
                        <td data-label='Date'>".$oRow['date']."</td>
                        
                        <td data-label='Session'>".$oRow['session']."</td>
                        <td data-label='Services'>".$oRow['service']."</td>
                        <td data-label='Total'>".$oRow['bill']."</td>
                       
                      </tr> 
                      ";
                    }
                      ?>
                    
                  </tbody>
                  </table>
                </div>
              </div>
              <div id="Div3" style="display: none;">
                  <!-- FEEDBACK -->
                  <section class="login" style="
    padding-top: 0px;" id="login">
                    <div class="max-width">
                    <br><br>
                        <div class="column right">
                            <div class="container">
                                <form  action="feedback.php" method="POST">
                                    <div class="text"><h2>Feedback</h2></div>
                                    <div class="fields"></div>
                                    <br>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                      </div>
                                      <br><br><br>

                                    <div class="field textarea">
                                        <textarea cols="70" rows="20" placeholder="Write feedback here" required name="feed_back"></textarea>
                                    </div>
                                    <div class="button">
                                        <br><button type="submit">Submit</button><br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
              </div>
              <div id="Div4" style="display: none;">
                <section class="login"  style="
    padding-top: 0px;" id="login">
                  <div class="max-width">
                  <br><br>
                  <!--complain -->
                      <div class="column right">
                          <div class="container">
                              <form action="complain.php" method="POST">
                                  <div class="text"><h2>Complain</h2></div>
                                  <div class="fields"></div>
                                  
                                  <div class="field textarea">
                                      <textarea cols="70" rows="20" placeholder="Write complain here" required name="complains"></textarea>
                                  </div>
                                  Complain for which service(s)?<br><br>
                                  <input type="checkbox" name="compType1" value="Wash & Dry" > Wash & Dry<br/>
                                  <input type="checkbox" name="compType2" value="Dry Cleaning" > Dry Cleaning<br/>
                                  <input type="checkbox" name="compType3" value="Iron & Fold" > Iron & Fold<br/>
                                  <input type="checkbox" name="compType4" value="Leather, fur & suede" > Leather, fur & suede<br/>
              
                                  <div class="button">
                                      <br><button type="submit">Submit</button><br>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </section>
              <script>
                const params = new URLSearchParams(window.location.search)
                if (params.get('result')=="cmpfiled"){
                  alert("Your complain is filed")
                }
                if (params.get('result')=="orderplaced"){
                  alert("Your order is placed")
                }
                if (params.get('result')=="ordererror"){
                  alert("Please try again an ERROR occured ")
                }
                if (params.get('result')=="fdgiven"){
                  alert("Your Feedback is submitted")
                }
                else if(params.get('result')=="error"){
                  alert("Please try again an ERROR occured ")
                }
                else if(params.get('result')=="signout"){
                  alert("Your are Signed out")
                }
            </script>
              </div>
                
            </div>
        </div>
    </section>
<!-- Chat box -->
 <img src="images/img.png" class="open-button" width="60px" onclick="openForm()">

<div class="chat-popup" id="myForm">
  <form action="#" class="form-container">
    <h1 style="color:crimson">Chat With US!!!!!!</h1>
    <hr><br>
    <label for="msg"><b>Name</b></label><br>
    <input type="text" placeholder="Name" name="msg" required>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
   
  </div>
</div>

    <!-- footer section start -->
    
  <!--  <footer>-->
  <!--    <span>Created For <a href="#">WDM Project</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>-->
  <!--</footer> -->
    <script src="script.js"></script>
  </body>

</html>