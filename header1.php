<?php 
require "./connection.php";
$email1 = $_POST['email'];
$password2 = $_POST['password'];
session_start();


?>

<nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="index.php"><img src="images/1.png" alt=""></a>
            </div>
            <ul class="menu">
                <li><a href="index.php" class="menu-btn">Home</a></li>
                <li><a href="about.php" class="menu-btn">About</a></li>
                <li><a href="services.php" class="menu-btn">Services</a></li>
                <li><a href="team.php" class="menu-btn">Team</a></li>
                <li><a href="blog.php" class="menu-btn">Blog</a></li>
                <li><a href="contact.php" class="menu-btn">Contact</a></li>
                <li><a href="#" class="menu-btn" style="font-weight:bold;"><?=$line['firstName']?> <?=$line['lastName']?></a></li>
                <li><a href="signout.php" onclick="signout.php" class="menu-btn">Sign out</a></li>
            </ul>
            <div class="menu-btn">
                <i>MENU</i>
            </div>
        </div>
    </nav>