<?php
session_start();
include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <section id="header">
        <a href="#"><img src="image/logo.png"class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="homepage.php" >Home</a></li> 
                <li><a href="shoop.php">Shop</a></li>
                <li><a href="ShopCart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </section>

    <section id="hero" class="hero">
        <h4>Trade-in-Office</h4>
        <h2>Super Value Deals</h2>
        <h1>On All products</h1>
        <p>Save more Time with 50% off</p>
        <button>Shop Now</button>
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

    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image/products/f1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/f2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/f3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/f4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/f5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/f6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/f7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
        </div>

    </section>



    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image/products/n1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/n3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/n4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/n5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/n6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/n7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/f7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <div class="pro">
                <img src="image/products/n3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
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

    



 <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
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
    
      <a href="logout.php">Logout</a>


    <script src="script.js"></script>
    

</body>
</html>