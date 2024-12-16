<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "project");
if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['cart'])) {
        $session_array_id = array_column($_SESSION['cart'], "id");
        if (!in_array($_GET['id'], $session_array_id)) {
            $session_array = array(
                "id" => $_GET['id'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']
            );
            $_SESSION['cart'][] = $session_array;
        }
    } else {
        $session_array = array(
            "id" => $_GET['id'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity']
        );
        $_SESSION['cart'][] = $session_array;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylecss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .product-grid {
            margin-top: 20px;
        }
        .product-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .product-card .card-body {
            text-align: center;
        }
        .product-card .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

<section id="header">
    <a href="#"><img src="image/logo.png" class="logo" alt="Shop Spot Logo"></a>
    <ul id="navbar">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="shoop.php">Shop</a></li>
        <li><a class="active" href="shopCart.php"><i class="fa fa-cart-arrow-down"></i></a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</section>

<div class="container">
    <div class="row product-grid">
        <?php
        include("connect.php");
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        while ($product = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-4 col-sm-6">
                <div class="card product-card">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['productName']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['productName']; ?></h5>
                        <p class="card-text">$ <?php echo $product['price']; ?></p>
                        <form method="post" action="checkout.php">
                            <input type="hidden" name="product_id" value="<?php echo $product['pid']; ?>">
                            <input type="submit" name="submit" value="Buy Now" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>
