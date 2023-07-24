<?php
include "config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobile-HOT</title>
    <!--bootstap-->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/mobile.css">
</head>

<body>
    <div class="container py-4 my-4 mx-auto d-flex flex-column">
        <div class="header">
        <?php
                            if (isset($_POST["addCart"])) {
                                if (isset($_SESSION["cart"])) {
                                    $pid_array = array_column($_SESSION["cart"], "pid");
                                    if (!in_array($_GET["id"], $pid_array)) {
                                        $index = count($_SESSION["cart"]);
                                        $item = array(
                                            'pid' => $_GET["id"],
                                            'pname' => $_POST["pname"],
                                            'price' => $_POST["price"],
                                            'qty' => $_POST["qty"]
                                        );
                                        $_SESSION["cart"][$index] = $item;
                                        echo "<script>alert('Product Added..');</script>";
                                        header("location:viewCart.php");
                                    } else {
                                        echo "<script>alert('Already Added..');</script>";
                                    }
                                } else {
                                    $item = array(
                                        'pid' => $_GET["id"],
                                        'pname' => $_POST["pname"],
                                        'price' => $_POST["price"],
                                        'qty' => $_POST["qty"]
                                    );
                                    $_SESSION["cart"][0] = $item;
                                    echo "<script>alert('Product Added..');</script>";
                                    header("location:viewCart.php");
                                }
                            }
                             $sql = "select * from ele  where pid='{$_GET["id"]}'";
                            $res = $conn->query($sql);
                            if ($res->num_rows > 0) {
                                echo '<form action="' . $_SERVER["REQUEST_URI"] . '" method="post">';
                                if ($row = $res->fetch_assoc()) {
                                    echo '
                                    <div class="row r1">
                                    <div class="col-md-9 abc">
                                        <h1>' . $row['PNAME'] . '</h1>
                                    </div>
                                </div>
                                    <div class="container-body mt-4">
                                    <div class="row r3">
                                        <div class="col-md-5 p-0 klo">
                                       
                                            <ul>
                            <li><strong>MODEL - ' . $row['MODEL'] . '</strong></li>
                            <li><strong>' . $row['RAM'] . '- Ram Capacity</strong></li>
                            <li><strong>' . $row['STORAGE'] . '- Internal Memary </strong></li>
                            <li><strong>' . $row['CAMERA'] . '-Camera Sepcs front+Rear </strong></li>
                            <li class="text-danger"><strong> Rs.' . $row['PRICE'] . '</strong> <h6 style="color:blue;">Orginal Price:Rs<s class="orgprice">'. $row['ORG PRICE'] . '</s></h6></li>
                        </ul>

                        <div class=units>
                        <div>High On Trend</div>
                        <div>High On Trend</div>
                      </div>
                        <ul class="detail">
                        <li><strong>Easy Returns</strong></li>
                        <li><strong>Free Delivery</strong></li>
                        <li><strong>EMI Available</strong></li>
                        <li><strong>Only Trusted Brands</strong></li>
                        <li><strong>Fast Delivery</strong></li>
                        </ul>
                        
                    </div>
                    <div class="col-md-2"> <img src="images/mob/' . $row['PIC'] . '"></div>
                </div>
            </div>
           
                <div class="row r8">
              
                <input type="text"  placeholder="Enter Qty" name="qty" value="1" min="1" max="10" class="qty">
                    <input type="submit" name="addCart" class="cart" value="Add to Cart">
                    <p><input type="hidden"  name="pname" value="' . $row['PNAME'] . '" class="form-control"></p>
	                <p><input type="hidden"  name="price" value="' . $row['PRICE'] . '" class="form-control"></p>
                </div>  
   ';
                                }
                            }
                            ?>
                            
            
                                
                          
                    </div>
                </div>
            </div>
</body>

</html>
</body>

</html>
