<?php
session_start();
include 'connect.php'; // Include your database connection file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Spot</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <style>
     .pro-container{
    display:flex;
    justify-content: space-between;
    padding-top: 20px;
    flex-wrap: wrap;
}
 .pro{
    width: 23%;
    min-width: 250px;
    padding: 10px 12px;
    border: 1px solid #cce7d0;
    border-radius: 20px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0,0,0,0.02);
    margin: 15px 0;
    transition: 0.2s ease;
    position: relative;
}
 .pro:hover{
    box-shadow: 20px 20px 30px rgba(0,0,0,0.06);
}

 .pro img{
    width: 100%;
    border-radius: 20px;
}
 .pro span{
    color:#606063;
    font-size: 12px;
}
 .pro h5{
    padding-top: 7px;
    color: #1a1a1a;
    font-size: 14px;

}
 .pro i{
    font-size: 12px;
    color: rgba(243, 181,25);
}
 .pro h4{
    padding: 7px;
    font-size: 14px;
    font-weight: 700;
    color: #088178;
}
 .pro .cart{
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    background-color: #e8f6ea;
    font-weight: 500;
    color: #088178;
    border: 1px solid #cce7d0;
    position: absolute;
    bottom: 20px;
    right: 10px;
}
 </style>
</head>
<body>
    <!-- Header Section -->
    <section id="header">
        <a href="#"><img src="image/logo.png"class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="homepage.php" >Home</a></li> 
                <li><a class="active" href="shoop.php">Shoop</a></li>
                <li><a href="ShopCart.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </section>
    <!-- Page Header Section -->
    <section id="page-header">
        <h2>#Stay Home</h2>
        <p>Save more Time with 50% off</p>
    </section>

    <!-- Product Section -->
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <?php
            // Fetch products from the database
            $query = "SELECT pid, productName, image, price FROM products";
            $result = mysqli_query($conn, $query);

            // Check if products are available
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Retrieve each product's details
                    $pid = $row['pid'];
                    $productName = $row['productName'];
                    $price = $row['price'];
                    $imagePath = $row['image']; // Path to the image file
            
                    echo '
                    <div class="pro" onclick="redirectToProductPage(' . $pid . ')">
                        <img src="' . $imagePath . '" alt="' . $productName . '" class="small-img">
                        <h3>' . $productName . '</h3>
                        <div class="star">
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                        </div>
                        <h4>$' . $price . '</h4>
                        <div>
                            <a href="shopCart.php?add=' . $pid . '"><i class="fa fa-shopping-cart cart"></i></a>
                        </div>
                    </div>';
                }
            } else {
                echo '<p>No products found.</p>';
            }
            ?>
        </div>
    </section>

    <!-- Additional Sections (Pagination, Newsletter, Footer) -->
    <script>
        // Function to redirect to sproduct page with product ID in the URL
        function redirectToProductPage(pid) {
            window.location.href = `sproduct.php?id=${pid}`;
        }
    </script>

</body>
</html>
