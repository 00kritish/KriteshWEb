<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Spot</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="image/logo.png"class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="home.php" >Home</a></li> 
                <li><a  href="shop.php">Shop</a></li>
                <li><a class="active"href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="shopCart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                <li><a  href="index.php">Login</a></li>
            </ul>
        </div>
    </section>

   <section id="page-header" class="about-header">
    <h2>#KnowUs</h2>
    <p>LOrem ipsum dolor sit amet, consectetur</p>
   </section>

   <section id="about-head" class="section-p1">
    <img src="image/about/a6.jpg" alt="">
    <div>
        <h2>Who We are?</h2>
        <p>The crisp morning air whispered through the trees as 
            the leaves, casting playful shadows on the ground. 
            Birds chirped softly in the distance, 
            their songs blending with the rustle of the wind. 
            A sense of calmness hung in the atmosphere, 
            as if time itself had slowed down  allowing the world to breathe. 
            In the clearing ahead,a small brook meandered lazily, its waters</p>

            <abbr title="">A sense of calmness hung in the atmosphere, as if 
            time itself,its waters</abbr>
            <br><br>
            <marquee bgColor="#ccc" loop="-1" scrollamount="5" width="100%">
             A small brook meandered lazily, its waters their songs blending with the rustle of the wind. </marquee>
    </div>
   </section>

   <section id="about-app" class="section-p1">
    <h1>Download My <a href="#">App</a></h1>
    <div class="video">
        <video autoplay muted loop src="image/about/1 (2).mp4"></video>
    </div>
   </section>

   <section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="image/features/f1.png"alt="">
        <h6>Free Shipping</h6>
    </div>

    <div class="fe-box">
        <img src="image/features/f2.png"alt="">
        <h6>ONline Order</h6>
    </div>

    <div class="fe-box">
        <img src="image/features/f3.png"alt="">
        <h6>Save Money</h6>
    </div>

    <div class="fe-box">
        <img src="image/features/f4.png"alt="">
        <h6>Promotion</h6>
    </div>

    <div class="fe-box">
        <img src="image/features/f5.png"alt="">
        <h6>Happy Sell</h6>
    </div>
</section>
<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newslettrs</h4>
        <p>Get Email Updates about our latest shop and <span>Speical offers</span> </p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your Email Address">
        <button class="normal">Sign Up</button>
    </div>
</section>

    <footer class="section-p1">
        <div class="col">
            <img src="image/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong>Thecho,Lalitpur,Street 32</p>
            <p><strong>Phone:</strong>+977 9861904707 /015570440</p>
            <p><strong>Hours:</strong>10:00am T0 9pm</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About Us</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
            <a href="#">Terms & Conditions</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign IN</a> 
            <a href="#">View Cart</a>
            <a href="#">My wishList</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img class="logo"src="image/pay/app.jpg" alt="">
                <img src="image/pay/play.jpg" alt="">
            </div>
            <p>Secure Payment GateWay</p>
            <img src="image/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>@2021, Shoe Spot -Ecomerce Platform</p>
        </div>
    </footer>



    <script src="script.js"></script>
    
</body>
</html>
