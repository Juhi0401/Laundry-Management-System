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
     </style>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <?php require 'header.php' ?>
    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <!-- <i class="fas fa-paint-brush"></i> -->
                        <div class="text">Wash & fold</div>
                        <p>Let us take some load off your shoulders. This service allows to wash, dry, and neatly fold your laundry. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <!-- <i class="fas fa-chart-line"></i> -->
                        <div class="text">Dry clean and laundry</div>
                        <p>We provide one of the best laundries and dry cleaning services. Drop it off before 9:00AM and you’ll pick it up the same day, we guarantee that it will be ready the next day. In any case, we will text you when it’s ready.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <!-- <i class="fas fa-code"></i> -->
                        <div class="text">Dry clean, laundry and press</div>
                        <p>This service allows to dry clean your suits, blouses and sweaters and launder your shirts, so you look as wonderful as you feel. Each item is professionally cleaned according to the care label, then hand finished to perfection at our store. Have confidence in crisp collars and perfect creases. This service also includes usage of high-quality ironing machines so that we can deliver you professionally pressed apparels to you. We take pride in how you look so we’ll carefully look over each piece to make sure everything looks smart and snappy just like you.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <!-- <i class="fas fa-code"></i> -->
                        <div class="text">Leather, fur & suede</div>
                        <p>Leather, fur, and suede cleaning requires professional settings for machines. One can choose the best cleaning method for a garment. One can inspect garments for any areas that might need repairing before cleaning. Let us help bring your garments back to life and look beautiful.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <!-- <i class="fas fa-code"></i> -->
                        <div class="text">Drop off</div>
                        <p>Shrink your laundry time to no more than 5 minutes you need to drop them off. A single stop for all your laundry needs, so you don’t need to make yet another trip to a Cleaners. Life is busy. How would you like to spend your free time? Doing laundry or enjoying the things you love? Bring in your laundry items and we’ll return them to you clean and folded. Drop it off before 9:00AM and you’ll be able to pick it up the same day or next day. We guarantee that clean laundry will be ready at the estimated time of pick up.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <!-- <i class="fas fa-code"></i> -->
                        <div class="text">Pick up & drop off</div>
                        <p>We can pick our laundry and deliver clean and fresh laundry to your home or place of business. Drop it off before 9:00AM and you’ll pick it up the same day. We guarantee that it will be ready at the end of the day or the next day. </p>
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
</div>
    
    <!-- footer section start -->
    <footer>
        <span>Created For <a href="#">WDM Project</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>