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

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">This is InstaWash</div>
                <div class="text-2">Get Your Clothes Washed and</div>
                <div class="text-3">Deliver in no Time.</div>
                <div class="text-3">InstaWash laundry is based in Arlington, TX.</div>
                <a href="#">Search</a>
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