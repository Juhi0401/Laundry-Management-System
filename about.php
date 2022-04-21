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

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/about1.jpeg" alt="">
                </div>
                <div class="column right">
                    <p >InstaWash provides customers with the best laundry service with both – in-store self-service, drop off and delivery service, and pick up and drop off services for your laundry. </p>
<br/>
<p>InstaWash is a modern and eco-friendly laundry store. </p>
<br/>
<p>Our equipment are designed to optimize water and reduce detergent usage for maximum cleaning power. Our machines also remove more water when finished meaning less drying time. This equates to less water, less energy, and less time, which is better for the environment and better for you.</p>
<br/>
<p>We accept debit and credit cards, and Apple pay.</p>
<br/>
<p>Our overall goal is to provide our guests with the best customer experience that they expect and deserve. Do laundry services quickly, easily, best in quality and with cleanliness. 
Customers will always be treated as a guest in a friendly and welcoming manner.</p>
<br/>
<p>
Why choose InstaWash?</p>
<ul>
<li>State of the art, high efficient washers and dryers</li>
<li> Multiple payment options including coins, card system, Apple Pay, debit and credit card</li>
<li>Free Wi-Fi</li>
<li>Convenient, large, well lit off street parking</li>
<li>Wide aisles with lots of large laundry carts/baskets</li>
<li>Lots of stainless steel folding tables</li>
<li>Long opening hours 7 days a week</li>
<li>Basket available for laundry</li>
</ul>
</p>
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