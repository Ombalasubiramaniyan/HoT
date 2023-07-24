<?php
include "config.php";
?>


<!DOCTYPE html>
<html>

<head>
    <title>fashion</title>
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel='stylesheet'  href='css/fashion.css'>
    <link rel="stylesheet" href="css/header.css">

</head>

<body>
<div class="par">
        <header>
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
        </header>
        </div>
        <p class="banner">New Trending Collections ,Saree and Traditional wears for everyone Are Available start From Rs.199/-</p>
   
           
       
    <!--LAPTOP-->
    <div class="title">
        <h1>New Kids Specials</h1><br>
    </div>
    <br>
    <section id="kids">
    <div class="container" >
        <div class="row" >
            <?php
            $sql = "select * from kids";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '
                    
   <div class="col-sm-4 col-lg-3 col-md-3 text-center">
     <img src="images/kids/' . $row['PIC'] . '" alt="" class="img-responsive" style="width:70%"><br>
     <strong style="color:blue;">' . $row['PNAME'] . '</strong>
     <h4 class="text-danger"> Rs.' . $row['PRICE'] . '</h4>
	<p><a href="kids.php?id=' . $row['PID'] . '" class="btn btn-outline-primary" id="cart" >View Details</a></p>
   </div>
    '; 
                }
            }
            ?>

        </div>
    </div>
    </section>
    <div class="title">
        <h1>New mens Specials</h1><br>
    </div>
    <br>
    <section id="kids">
    <div class="container" >
        <div class="row" >
            <?php
            $sql = "select * from mens";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '
                    
   <div class="col-sm-4 col-lg-3 col-md-3 text-center">
     <img src="images/mens/' . $row['PIC'] . '" alt="" class="img-responsive" style="width:70%"><br>
     <strong style="color:blue;">' . $row['PNAME'] . '</strong>
     <h4 class="text-danger"> Rs.' . $row['PRICE'] . '</h4>
	<p><a href="mens.php?id=' . $row['PID'] . '" class="btn btn-outline-primary" id="cart" >View Details</a></p>
   </div>
    '; 
                }
            }
            ?>

        </div>
    </div>
    </section>

    <div class="title">
       
    </div>
    <br>
    <section id="kids">
    <div class="container" >
        <div class="row" >
            <?php
            $sql = "select * from womens";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '
 
   <div class="col-sm-4 col-lg-3 col-md-3 text-center">
     <img src="images/girls/' . $row['PIC'] . '" alt="" class="img-responsive" style="width:70%"><br>
     <strong style="color:blue;">' . $row['PNAME'] . '</strong>
     <h4 class="text-danger"> Rs.' . $row['PRICE'] . '</h4>
	<p><a href="womens.php?id=' . $row['PID'] . '" class="btn btn-outline-primary" id="cart" >View Details</a></p>
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
