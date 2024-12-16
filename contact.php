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
                <li><a href="about.php">About Us</a></li>
                <li><a class="active"href="contact.php">Contact</a></li>
                <li><a href="shopCart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                <li><a  href="index.php">Login</a></li>
            </ul>
        </div>
    </section>

   <section id="page-header" class="about-header">
    <h2>#Let's talk</h2>
    <p>Leave a Essage, WE love to hear from you!r</p>
   </section>

   <section id="contact-details" class="section-p1">
    <div class="details">
        <span>Get In Touch</span>
        <h2>Visit one of our agency locations or cantact us today</h2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>Thecho, Street Glassgow,Lalitpur</p>
            </li>
            <li>
                <i class="far fa-envelope"></i>
                <p>contact@example</p>
            </li>
             <li>
                <i class="fas fa-phone-alt"></i>
                <p>kritish@gmail.com</p>
            </li>
            <li>
                <i class="far fa-clock"></i>
                <p>Monday To Sunday: 9am to 10pm</p>
            </li>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.0361875295!2d-74.
        30934563260514!3d40.69753994303477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
        1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2snp!4v1729357970088!5m2!1sen!2snp"
         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

   </section> 

   <section id="form-details">
    <form action="">
        <span>Leave A message</span>
        <h2>We Love to Hear You</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="Your Email">
        <input type="text" placeholder="Your Subject">
        <textarea name=""id="" cols="30" rows="10" placeholder="Your message"></textarea>
        <button class="normal">Submit</button>
    </form>
    <div class="people">
        <div>
            <img src="image/people/1.png" alt="">
            <p><span>John Doe</span>Senior Marketing Manger <br> Phone: +00105570 <br>
            Email:kritish@gmail.com</p>
        </div>
        <div>
            <img src="image/people/2.png" alt="">
            <p><span>William Smith</span>Senior Marketing Manger <br> Phone: +00105570 <br>
            Email:kritish@gmail.com</p>
        </div>
        <div>
            <img src="image/people/3.png" alt="">
            <p><span>Emma Stone</span>Senior Marketing Manger <br> Phone: +00105570 <br>
            Email:kritish@gmail.com</p>
        </div>
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
