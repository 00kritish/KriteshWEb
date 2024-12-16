<?php
session_start();
include("connect.php"); // Make sure this file includes the correct database connection

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to find the user with the given email
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $query);
    $user = mysqli_fetch_assoc($result);
}
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
<body class="body">
    <section id="header">
        <a href="#"><img src="image/logo.png"class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="home.php" >Home</a></li> 
                <li><a  href="shop.php">Shop</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a  href="shopCart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                <li><a  class="active" href="index.php">Login</a></li>
            </ul>
        </div>
    </section>
  
    <div class="container" id="signup" style="display:none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
          <div class="input-group">
             <i class="fas fa-user"></i>
             <input type="text" name="fName" id="fName" placeholder="First Name" required>
             <label for="fName">First Name</label>
          </div>
          <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" name="lName" id="lName" placeholder="Last Name" required>
              <label for="lName">Last Name</label>
          </div>
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
         <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Already Have Account ?</p>
          <button id="signInButton">Sign In</button>
        </div>
      </div>
  
      <div class="container" id="signIn">
          <h1 class="form-title">Sign In</h1>
          <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
              <a href="#">Recover Password</a>
            </p>
           <input type="submit" class="btn" value="Sign In" name="signIn">
          </form>
          <p class="or">
            ----------or--------
          </p>
          <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
          </div>
          <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
          </div>
        </div>
    
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
