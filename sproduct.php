<?php
session_start();
include 'connect.php'; // Ensure this file connects to your database

// Check if 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch the product details from the database
    $query = "SELECT * FROM products WHERE pid = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found!";
        exit();
    }
} else {
    echo "No product selected!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Spot - <?php echo htmlspecialchars($product['productName']); ?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header Section -->
    <section id="header">
        <a href="#"><img src="image/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="homepage.php">HomePage</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="cart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
    </section>

    <!-- Product Details Section -->
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
        <img src="<?php echo htmlspecialchars($product['image']); ?>" width="100%" id="MainImg" alt="<?php echo htmlspecialchars($product['productName']); ?>">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="image/products/f2.jpg,<?php echo base64_encode($product['image']); ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="image/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="image/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="image/products/f5.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home / <?php echo htmlspecialchars($product['productName']); ?></h6>
            <h4><?php echo htmlspecialchars($product['productName']); ?></h4>
            <h2>$<?php echo htmlspecialchars($product['price']); ?></h2>
            <select>
                <option required>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <a href="shopCart.php?add=<?php echo $product['pid']; ?>"><button class="normal">Add to Cart</button></a>
            <h4>Product Details</h4>
            <span>This is and original tshirt imported from America.Due to Which
                    it has life time warrenty.This is and original tshirt imported 
                    from America.Due to Which it has life time warrenty.This is and original
                     tshirt imported from America.Due to Which it has life time warrenty.This 
                     is and original tshirt imported from America.Due to Which it has life time warrenty.
            </span> 
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
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
                <a href="shopCart.php"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <!-- Add more featured products as needed -->
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
                    <h4>$79</h4>
                </div>
                <a href="shopCart.php"><i class="fa fa-shopping-cart cart"></i></a>
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
                    <h4>$80</h4>
                </div>
                <a href="shopCart.php"><i class="fa fa-shopping-cart cart"></i></a>
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
                    <h4>$81</h4>
                </div>
                <a href="shopCart.php"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get Email Updates about our latest shop and <span>Special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email Address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="section-p1">
        <div class="col">
            <img src="image/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Thecho, Lalitpur, Street 32</p>
            <p><strong>Phone:</strong> +977 9861904707 / 015570440</p>
            <p><strong>Hours:</strong> 10:00am to 9:00pm</p>
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
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="image/pay/app.jpg" alt="">
                <img src="image/pay/play.jpg" alt="">
            </div>
            <p>Secure Payment Gateway</p>
            <img src="image/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>@2021, Shoe Spot - Ecommerce Platform</p>
        </div>
    </footer>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>
</body>
</html>