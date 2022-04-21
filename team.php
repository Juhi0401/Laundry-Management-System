<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <?php require 'header.php' ?>
    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Team</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/admin.jpg" alt="">
                        <div class="text">Juhi Patel</div>
                        <p>Position: Admin/CEO</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/manager.jpeg" alt="">
                        <div class="text">Aditya Khatri</div>
                        <p>Position: Manager</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/employee.jpeg" alt="">
                        <div class="text">Khushboo Patel</div>
                        <p>Position: Employee</p>
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
</div>
    <!-- footer section start -->
    <footer>
        <span>Created For <a href="#">WDM Project</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>