<?php
include("connect.php");

if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	//var_dump($_POST);
	$product_id = $_POST['product_id'];
	$sql = "SELECT * FROM products WHERE pid='$product_id'";
	$result = mysqli_query($conn, $sql);
	if($result)
	{
		if ( mysqli_num_rows($result) == 1)
		{
			$product = mysqli_fetch_assoc($result);
			$invoice_no = $product['pid'] . time();
			$total  = $product['price'];
			$created_at = date('Y-m-d H:i:s');
			$query = "INSERT INTO orders(product_id,invoice_no, total, status, created_at )
					VALUES( '$product_id','$invoice_no', '$total', 0, '$created_at')";
			if( !mysqli_query($conn, $query))
			{
				die('Error!');
			}
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check out page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
			<div class="pt-md-5">
				<div class="col-md-12">
					<h2>Order Details</h2>
					<div class="row">
				
						<div class="col-md-4">
							<div class="card" stylea="width: 18rem;">
								<div class="imagecontainer" style="height: 400px;">
									<img src=" <?php echo $product['image']?>" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
								</div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $product['productName'];?></h5>
								<p class="card-text">$ <?php echo $product['price'];?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h3>Pay with</h3>
						<ul class="list-group">
						<li class="list-group-item">
						<form action="https://uat.esewa.com.np/epay/main" method="POST">
							<input value="<?php echo $total;?>" name="tAmt" type="hidden">
										<input value="<?php echo $total;?>" name="amt" type="hidden">
										<input value="0" name="txAmt" type="hidden">
										<input value="0" name="psc" type="hidden">
										<input value="0" name="pdc" type="hidden">
										<input value="epay_payment" name="scd" type="hidden">
										<input value="<?php echo $invoice_no;?>" name="pid" type="hidden">
										<input value="http://kritish.com.np/esewa/esewa_payment_success?q=su" type="hidden" name="su">
   									 	<input value="http://kritish.com.np/esewa/esewa_payment_failed?q=fu" type="hidden" name="fu">
									<input type="image" src="image/esewa.png">
									</li>
						<li class="list-group-item"><input type="image" src="image/fonepay.png"></li>
						<li class="list-group-item"><input type="image" src="image/khalti.png"></li>
						<li class="list-group-item"><input type="image" src="image/connectips.png"></li>
						<li class="list-group-item"><input type="image" src="image/hbl.png"></li>
						</ul>
					</div>
</body>
</html>