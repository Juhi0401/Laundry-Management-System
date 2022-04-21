<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/> -->

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <?php require 'header.php' ?>

    
    

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title"><a href="http://kxp3935.uta.cloud/p3/blog-2/">Blog</a></h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <!-- <img src="images/admin.jpg" alt=""> -->
                        <div class="text"><a href="http://kxp3935.uta.cloud/p3/sample-page/">Advantages</a></div>
                        <!-- <p>Position: Admin/CEO</p> -->
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <!-- <img src="images/manager.jpeg" alt=""> -->
                        <div class="text"><a href="http://axk7791.uta.cloud/wdm/sample-page-2/">Disadvantages</a></div>
                        <!-- <p>Position: Manager</p> -->
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <!-- <img src="images/employee.jpeg" alt=""> -->
                        <div class="text"><a href="http://jdp3249.uta.cloud/wdm-p-3/sample-page/">Room for improvements</a></div>
                        <!-- <p>Position: Employee</p> -->
                    </div>
                </div>
                <!-- <div class="card">
                    <div class="box">
                        <img src="images/1.ppng" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div> -->
                <!-- <div class="card">
                    <div class="box">
                        <img src="images/2.jpg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Chat box -->
 <img src="images/img.png" class="open-button" width="60px" onclick="openForm()"></img>

<div class="chat-popup" id="myForm">
  <form action="#" class="form-container">
    <h1 style="color:crimson">Chat With US!!!!!!</h1>
    <hr><br>
    <label for="msg"><b>Name</b></label><br>
    <input type="text" placeholder="Name" name="msg" required></input>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
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