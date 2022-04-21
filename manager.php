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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
</head>
<body>

<?php
// require "./connection.php";

$email1 = $_POST['email'];
$password2 = $_POST['password'];

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
        <li><a href="#" onclick="mdiv1()">
          <span class="icon" >P/D</span>
          <span class="title">Pickup/Drop-off</span></a></li>
        <li><a href="#" onclick="mdiv2()">
          <span class="icon" >OD</span>
          <span class="title">Order Details</span>
          </a></li>
        <li><a href="#" onclick="mdiv3()">
          <span class="icon" >CD</span>
          <span class="title">Customer Details</span>
          </a></li>
        <li><a href="#" onclick="mdiv4()" >
          <span class="icon" >ED</span>
          <span class="title">Employee Details</span>
          </a></li>
        <li><a href="#" onclick="mdiv5()">
          <span class="icon" >MD</span>
          <span class="title">Machine Details</span>
          </a></li>
        <li><a href="#" onclick="mdiv6()">
          <span class="icon">VC</span>
          <span class="title">View Complain</span>
          </a></li>
        <li><a href="#" onclick="mdiv7()">
          <span class="icon">VF</span>
          <span class="title">View Feedback</span>
          </a></li>
    </ul>
  </div>
  <!-- <div class="main_container"> -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
              <div id="Div1" style="display: block;">
                  <div class="tbl2">
                      <h2>Manage Pick up/Drop off</h2>
                      <table  width= "90%" align="right">
                        <thead>
                        <tr>
                          <th  scope="col">Transaction ID</th>
                          <th  scope="col">Customer ID</th>
                          <th  scope="col">Customer First Name</th>
                          <th  scope="col">Customer Last Name</th>
                          <th  scope="col">Pick up</th>
                          <th  scope="col">Drop off</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-label="Transaction ID">90101876</td>
                          <td data-label="Customer ID">1010654</td>
                          <td data-label="Customer First Name">John</td>
                          <td data-label="Customer Last Name">Smith</td>
                          <td data-label="Pick up"><input type="checkbox"></td>
                          <td data-label="Drop Off"><input type="checkbox"></td>
                        </tr>
                        <tr>
                          <td scope="row" data-label="Transaction ID">90101576</td>
                          <td data-label="Customer ID">1010743</td>
                          <td data-label="Customer First Name">Alex</td>
                          <td data-label="Customer Last Name">Cross</td>
                          <td data-label="Pick up"><input type="checkbox"></td>
                          <td data-label="Drop Off"><input type="checkbox"></td>
                        </tr>
                      </tbody>
                      </table>
                  </div>
              </div>
              <div id="Div2" style="display: none;">
                  <div class="tbl2">
                  <h2>Order Details</h2>
                  <table width= "100%">
                    <thead>
                      <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Employee ID</th>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Role</th>
                        <th scope="col">Session</th>
                        <th scope="col">Services</th>
                        <th scope="col">Total</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      
                      $sql = "SELECT * FROM placeorder";
                      $result = $conn->query($sql);
                      $row = $result->fetch_all(MYSQLI_ASSOC);
                      foreach ($row as $oRow){
                      echo "
                      <tr>
                        <td data-label='Order ID'>".$oRow['orderID']."</td>
                        <td data-label='Employee ID'>2010432</td>
                        <td data-label='Customer ID'>".$oRow['custId']."	</td>
                        <td data-label='Customer Name'>".$oRow['username']."</td>
                        <td data-label='Customer Role'>".$oRow['role']."</td>
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
                  <div class="tbl2">
                      <h2>Customer Details</h2>
                      <table width= "90%" align="right">
                    <thead>
                      <tr>
                        
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Customer Type</th>
                        <th scope="col">Existing balance</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                        if(isset($_POST['button3'])) { 
                                
                                $uid = htmlentities($_POST['uid_val']);
                                $sql = "DELETE FROM login WHERE id=".$uid;
                                $result = $conn->query($sql);
                                // $row = $result->fetch_all(MYSQLI_ASSOC);
                                 
                    			echo "<script>alert(' Deleted customer record of cust ID = $uid')</script>"; 
                    		}
                    
                        $sql1 = "SELECT * FROM login where custType in ('User','Visitor')";
                        $result1 = $conn->query($sql1);
                        $row1 = $result1->fetch_all(MYSQLI_ASSOC);
                        
                        foreach ($row1 as $row11) {
                              $bill1 = "SELECT bill FROM placeorder where custId =".$row11['id']."";
                            $billresult1 = $conn->query($bill1);
                            $billrow1 = $billresult1->fetch_assoc();
                          
                              echo "<tr>
                              
                              <td data-label='First Name'>".$row11['firstName']."</td>
                              <td data-label='Last Name'>".$row11['lastName']."</td>
                              <td data-label='Number'>".$row11['number']."</td>
                              <td data-label='Email' style='word-wrap:break-word;'>".$row11['email']."</td>
                              <td data-label='Address'>".$row11['address']."</td>
                              <td data-label='Customer Type'>".$row11['custType']."</td>
                              <td data-label='Existing balance'>$".$billrow1['bill']."</td>
                              
                              <td data-label='Action'>
                                    <form method='post'> 
                                        <input type='text' name='uid_val' value=".$row11['id']." hidden></button>
                                        <input type='submit' name='button3' value='Delete'></button>
                                    </form>
                                </td>
                              
                            </tr>";
                            }?>

                      
                    </tbody>
                  </table>
                    </div>
              </div>
              <div id="Div4" style="display: none; overflow-x:auto;">
                  <div class="tbl2" >
                      <h2>Employee Details</h2>
                      <table  id="t" width= "80%" align="right">
                        <thead>
                        <tr>
                          <th scope="col">Employee ID</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Number</th>
                          <th scope="col">E mail</th>
                          <th scope="col">Address</th>
                          <th scope="col">Role</th>
                          <th scope="col">D.O.B.</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--<tr>-->
                        <!--  <td data-label="Employee ID">2010432</td>-->
                        <!--  <td data-label="First Name">Aditya</td>-->
                        <!--  <td data-label="Last Name">Khatri</td>-->
                        <!--  <td data-label="Number">345-678-9081</td>-->
                        <!--  <td data-label="Address">516 Greek row, apt 190, arlington</td>-->
                        <!--  <td data-label="Salary">$2500</td>-->
                        <!--  <td data-label="D.O.B.">01/01/1990</td>-->
                        <!--  <td data-label="Age">31</td>-->
                        <!--  <td data-label="Action"><button id="button1" type="button">Delete</button></td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--  <td data-label="Employee ID">2010521</td>-->
                        <!--  <td data-label="First Name">Khushboo</td>-->
                        <!--  <td data-label="Last Name">Patel</td>-->
                        <!--  <td data-label="Number">345-678-9081</td>-->
                        <!--  <td data-label="Address">516 Greek row, apt 190, arlington</td>-->
                        <!--  <td data-label="Salary">$2500</td>-->
                        <!--  <td data-label="D.O.B.">01/01/1990</td>-->
                        <!--  <td data-label="Age">31</td>-->
                        <!--  <td data-label="Action"><button id="button1" type="button">Delete</button></td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--  <td data-label="Employee ID">2010698</td>-->
                        <!--  <td data-label="First Name">Juhi</td>-->
                        <!--  <td data-label="Last Name">Patel</td>-->
                        <!--  <td data-label="Number">345-678-9081</td>-->
                          
                        <!--  <td data-label="Address">516 Greek row, apt 190, arlington</td>-->
                        <!--  <td data-label="Salary">$2500</td>-->
                        <!--  <td data-label="D.O.B.">01/01/1990</td>-->
                        <!--  <td data-label="Age">31</td>-->
                        <!--  <td data-label="Action"><button id="button1" type="button">Delete</button></td>-->
                        <!--</tr>-->
                        
                        <?php
                    
                        if(isset($_POST['button4'])) { 
                                
                                $uid = htmlentities($_POST['uid_val']);
                                $sql = "DELETE FROM login WHERE id=".$uid;
                                $result = $conn->query($sql);
                                // $row = $result->fetch_all(MYSQLI_ASSOC);
                                 
                    			echo "<script>alert(' Deleted employee record of emp ID = $uid')</script>"; 
                    		}
                            
                        $sql1 = "SELECT * FROM login where custType in ('admin','manager')";
                        $result1 = $conn->query($sql1);
                        $row1 = $result1->fetch_all(MYSQLI_ASSOC);
                        
                        foreach ($row1 as $row11) {
                          $bill1 = "SELECT bill FROM placeorder where custId =".$row11['id']."";
                            $billresult1 = $conn->query($bill1);
                            // $billrow1 = $billresult1->fetch_assoc();
                          // echo $row11[0];
                              echo "<tr>
                              
                              <td data-label='Employee ID'>".$row11['id']."</td>
                              <td data-label='First Name'>".$row11['firstName']."</td>
                              <td data-label='Last Name'>".$row11['lastName']."</td>
                              <td data-label='Number'>".$row11['number']."</td>
                              <td data-label='Email' style='word-wrap:break-word;'>".$row11['email']."</td>
                              <td data-label='Address'>".$row11['address']."</td>
                              <td data-label='Role'>".$row11['custType']."</td>
                              <td data-label='D.O.B.'>".$row11['dob']."</td>
                              
                              <td data-label='Action'>
                                    <form method='post'> 
                                        <input type='text' name='uid_val' value=".$row11['id']." hidden></button>
                                        <input type='submit' name='button4' value='Delete'></button>
                                    </form>
                                </td>
                              
                            </tr>";
                            }?>
                        
                        
                      </tbody>
                        </table>
                    </div>
              </div>
              <div id="Div5" style="display: none;">
                  <div class="tbl2">
                      <h2>Machine Details</h2>
                      <table width= "100%">
                    <thead>
                      <tr>
                        <th scope="col">Machine ID</th>
                        <th scope="col">Type</th>
                        <th scope="col">Working condition (Active/Out of order)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $sql = "SELECT * FROM machineinfo ";
                      $result = $conn->query($sql);
                      $row = $result->fetch_all(MYSQLI_ASSOC);
                      foreach($row as $mrow){
                        echo '
                        <tr>
                        <td data-label="Machine ID">'.$mrow['machineId'].'</td>
                        <td data-label="Type">'.$mrow['machineType'].'</td>
                        <td data-label="Working condition (Active/Out of order)">'.$mrow['workingCondition'].'</td>
                      </tr>
                        ';
                      }

                      ?>
                      
                    </tbody>
                  </table>
                    </div>
              </div>
               <div id="Div6" style="display: none;">
                <div class="tbl2">
                  <h2>View Complain</h2>
                  <table width= "90%" align="right">
                    <thead>
                      <tr>
                        
                        <th scope="col">Customer Id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Role</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Complain</th>
                        <th scope="col">Action</th>

                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                     function deletephp()
                            {
                              echo "<script>alert('hu php')</script>";
                            }
                        if(isset($_POST['button1'])) { 
                                
                                 $id = htmlentities($_POST['id_val']);
                                 $uid = htmlentities($_POST['uid_val']);
                                $sql = "DELETE FROM complain WHERE compID=".$id;
                                $result = $conn->query($sql);
                                // $row = $result->fetch_all(MYSQLI_ASSOC);
                                 
                    			echo "<script>alert(' Deleted complain of user ID = $uid')</script>"; 
                    		} 
                    
                        $sql1 = "SELECT * FROM complain where role in ('User','Visitor')";
                        $result1 = $conn->query($sql1);
                        $row1 = $result1->fetch_all(MYSQLI_ASSOC);
                        
                        foreach ($row1 as $row11) {
                          $usr1 = "SELECT firstName,lastName FROM login where id =".$row11['custId']."";
                            $usrresult1 = $conn->query($usr1);
                            $usrrow1 = $usrresult1->fetch_assoc();
                          // echo $row11[0];
                              echo "<tr>
                              <td data-label='Customer Id'>".$row11['custId']."</td>
                              <td data-label='Customer Name'>".$usrrow1['firstName']." ".$usrrow1['lastName']."</td>
                              <td data-label='Customer Role'>".$row11['role']."</td>
                              <td data-label='Topic'>".$row11['topic']."</td>
                              <td data-label='Complain' style='word-wrap:break-word;'>".$row11['complain']."</td>
                              <td data-label='Action'>
                                    <form method='post'> 
                                        <input type='text' name='id_val' value=".$row11['compID']." hidden></button>
                                        <input type='text' name='uid_val' value=".$row11['custId']." hidden></button>
                                        <input type='submit' id=$row11 name='button1' value='Delete'></button>
                                    </form>
                                </td>
                              
                            </tr>";
                                // deletephp();
                         
                            }
                           
                            ?>
                            

                      
                    </tbody>
                  </table>
                </div>

            </div>
            <div id="Div7" style="display: none;">
                <div class="tbl2">
                  <h2>View Feedback</h2>
                  <table width= "90%" align="right">
                    <thead>
                      <tr>
                        
                        <th scope="col">Custumer ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Customer Role</th>
                        <th scope="col">Feedback</th>
                        <th scope="col">Ratings</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    if(isset($_POST['button2'])) { 
                    			$id = htmlentities($_POST['id_val']);
                                 $uid = htmlentities($_POST['uid_val']);
                                $sql = "DELETE FROM feedback WHERE feebackID=".$id;
                                $result = $conn->query($sql);
                                 
                    			echo "<script>alert(' Deleted feedback of user ID = $uid')</script>"; 
                    		} 
                    		
                        $sql1 = "SELECT * FROM feedback where role in ('User','Visitor')";
                        $result1 = $conn->query($sql1);
                        $row1 = $result1->fetch_all(MYSQLI_ASSOC);
                        
                        foreach ($row1 as $row11) {
                          $usr = "SELECT * FROM login where id =".$row11['userId']."";
                            $usrresult1 = $conn->query($usr);
                            $usrrow1 = $usrresult1->fetch_assoc();
                          // echo $row11[0];
                              echo "<tr>
                              
                              <td data-label='Custumer ID'>".$usrrow1['id']."</td>
                              <td data-label='First Name'>".$usrrow1['firstName']."</td>
                              <td data-label='Last Name'>".$usrrow1['lastName']."</td>
                              <td data-label='Customer role'>".$row11['role']."</td>
                              <td data-label='Feedback'>".$row11['feedback']."</td>
                              <td data-label='Ratings'>".$row11['rating']."</td>
                              <td data-label='Action'>
                                    <form method='post'> 
                                        <input type='text' name='id_val' value=".$row11['feebackID']." hidden></input>
                                        <input type='text' name='uid_val' value=".$row11['userId']." hidden></input>
                                        <input type='submit' id=$row11 name='button2' value='Delete'></button>
                                    </form>
                                </td>
                            </tr>";
                            }?>

                      
                    </tbody>
                  </table>
                </div>

            </div>
            </div>
        </div>
    </section>
  <!-- </div> -->
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
 

<!-- <footer >
  <span>Created For <a href="#">WDM Project</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
</footer> -->
	
    <script src="script.js"></script>
</body>
</html>