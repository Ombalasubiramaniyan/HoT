<?php
include "config.php";

?>




<!DOCTYPE html>
<html>

<head>
    <title>eletronics</title>
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel='stylesheet'  href='css/ele.css'>
    <link rel="stylesheet" href="css/header.css">

</head>

<body>
    <!--nav bar-->
   
    <div id="bg">
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
               
            </div>
            <p class="banner">Latest collections and accessories 20% off using credit card</p>
           

    <!--nav bar end -->

<section>
    
    <div class="title">
        <h1>Top brand mobiles</h1><br>
    </div>
    <!--lap1-->

    <div class="container">
        <div class="row" >
            <?php
            $sql = "select * from ele";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '
                    <div class="col-sm-4 col-lg-3 col-md-3 text-center">
     <img src="images/mob/' . $row['PIC'] . '" alt="" class="img-responsive" ><br>
     <strong style="color:blue; ">' . $row['PNAME'] . '</strong><br>
     <h4 class="text-danger"> Rs.' . $row['PRICE'] . '</h4>
	<p><a href="mobile.php?id=' . $row['PID'] . '" class="btn btn-outline-primary" id="cart" >View Details</a></p>
    
   </div>

   ';
                }
            }
            ?>
        </div>
    </div>
</section>
    <!--LAPTOP-->
    <div class="title">
        <h1>Top brand laptops</h1><br>
    </div>
    <section id="laptop">
    <div class="container" >
        <div class="row" >
            <?php
            $sql = "select * from laptop";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '
                    
   <div class="col-sm-4 col-lg-3 col-md-3 text-center">
     <img src="images/lap/' . $row['PIC'] . '" alt="" class="img-responsive" style="width:90%"><br>
     <strong style="color:blue;">' . $row['PNAME'] . '</strong>
     <h4 class="text-danger"> Rs.' . $row['PRICE'] . '</h4>
	<p><a href="laptop.php?id=' . $row['PID'] . '" class="btn btn-outline-primary" id="cart">View Details</a></p>
   </div>
    '; 
                }
            }
            ?>

        </div>
    </div>
    </section>

<!--cam-->

<div class="title">
        <h1>Top brand cameras</h1><br>
    </div>
    <section id="camera">
    <div class="container" >
        <div class="row" >
            <?php
            $sql = "select * from camera";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '
                    
   <div class="cam">
     <img src="images/cam/' . $row['PIC'] . '" alt="" class="img"><br>
     <strong style="color:blue;">' . $row['PNAME'] . '</strong>
     <h4 class="text-danger"> Rs.' . $row['PRICE'] . '</h4>
	<p><a href="camera.php?id=' . $row['PID'] . '" class="btn btn-outline-primary" id="cart" >View Details</a></p>
   </div>
    '; 
                }
            }
            ?>

        </div>
    </div>
    </section>
</body>

    


</html>
