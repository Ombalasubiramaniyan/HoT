<?php
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>your cart</title>

	<!--bootstap-->
	<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
	<link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link rel="stylesheet" href="css/header.css">
	
</head>

<body>
	<!--nav par -->
   
            <nav class="nav">
                    <h2 class="brand">
                        High On Trend
                    </h2>
                    <ul class="menu">
                        <li class="home">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="home">
                            <a href="fashion.php">Fashion</a>
                        </li>
                        <li class="home">
                            <a href="electronics.php">Eletronics</a>
                        </li>
                        <li class="home">
                            <a href="about.php" style="margin-right:300px">About</a>
                        </li>

                        <li class="logo">
                            <a href="viewcart.php"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                        <li class="login">
                            <a href="reg.html">
                                <i class="fa-solid fa-user"></i></a>
                        </li>
                    </ul>
                </nav>

                <!--nav end-->
	<div id="bg"></div>
	<div class="container">
		<div class="row">
			<h1>Your Products</h1>
			<a href='index.php' id="home"> <i class="fa fa-home"></i></a>
			<hr>
			
			
			<table class='table'>
				<tr>
					<th class="tit">Item Name</th>
					<th class="tit">Qty</th>
					<th class="tit">Price</th>
					<th class="tit">Total</th>
					<th class="tit">Remove</th>
				</tr>
				<?php
				if (isset($_GET["del"])) {
					foreach ($_SESSION["cart"] as $keys => $values) {
						if ($values["pid"] == $_GET["del"]) {
							unset($_SESSION["cart"][$keys]);
						}
					}
				}
				if (!empty($_SESSION["cart"])) {
					$total = 0;
					foreach ($_SESSION["cart"] as $keys => $values) {
						$amt = (int) $values["qty"] * (int) $values["price"];
						$total += $amt;
						echo "
									<tr >
										<td>{$values["pname"]}</td>
										<td>{$values["qty"]}</td>
										<td>{$values["price"]}</td>
										<td>{$amt}</td>
										
										<td><a href='viewCart.php?del={$values["pid"]}'>Remove</a></td>
									</tr>
							";
					}
					echo "
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td>Total</td>
												<td>{$total}</td>
											</tr>";
				}
				?>
			</table>

		</div>
	</div>
			</body>
			<script>
//taking value to increment decrement input value
var valueCount
//taking price value in variable
var price = document.getElementById("price").innerText;
//price calculation function
function priceTotal() {
	var total = valueCount * price;
	document.getElementById("price").innerText = total
}
//plus button
document.querySelector(".plus-btn").addEventListener("click", function () {
	//getting value of input
	valueCount = document.getElementById("quantity").value;
	//input value increment by 1
	valueCount++;
	//setting increment input value
	document.getElementById("quantity").value = valueCount;
	if (valueCount > 1) {
		document.querySelector(".minus-btn").removeAttribute("disabled");
		document.querySelector(".minus-btn").classList.remove("disabled")
	}
	//calling price function
	priceTotal()
})
//plus button
document.querySelector(".minus-btn").addEventListener("click", function () {
	//getting value of input
	valueCount = document.getElementById("quantity").value;
	//input value increment by 1
	valueCount--;
	//setting increment input value
	document.getElementById("quantity").value = valueCount
	if (valueCount == 1) {
		document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
	}
	//calling price function
	priceTotal()
})
			</script>
</html>
