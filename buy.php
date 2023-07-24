<?php
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>your Orders</title>

	<!--bootstap-->
	<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
	<link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/buy.css">
</head>

<body>
			<h1 style="text-align:center;">Your Products</h1>
			<div class="logo">
			<a href='index.html' id="home"> <i class="fa fa-home"></i></a>
			</div>
			<hr>
				<?php
				if (isset($_GET["del"])) {
					foreach ($_SESSION["buy"] as $keys => $values) {
						if ($values["pid"] == $_GET["del"]) {
							unset($_SESSION["buy"][$keys]);
						}
					}
				}
				if (!empty($_SESSION["buy"])) {
					$total = 0;
					foreach ($_SESSION["buy"] as $keys => $values) {
						$amt = (int) $values["qty"] * (int) $values["price"];
						$total += $amt;
						echo '
                        <div class="order">
                        
                      <br>
                       <br>
                        <br>
                        
                       
							
                        
                        </div>
						<div class="container">
						<div class="item">
						<h2 class="pid">'.$values["pname"].'</h2>
							<ul class="product">
								<li> product:- '.$values["pname"].'</li><br>
								<li> Quantity:-'.$values["qty"].'</li><br>
								<li>Price:-'.$values["price"].'</li>
							</ul>
			
						</div>
						<div class="data">
							<ul class="detail">
								<li>Fast Devivery </li>
								<li> Minimum 3 Days </li>
								<li>Easy to Returns</li>
								<li>Cash On Develary</li>
								<li>Emi Available</li>
								<li>Thanks For Your Orders</li>
							</ul>
							<div class="button">
							<a href="buy.php?del='.($values["pid"]).'">Cancel</a>
							
						</div>
						
						</div>
					</div>

							';
					}
					

				}
				?>
			
		
</body>

</html>
