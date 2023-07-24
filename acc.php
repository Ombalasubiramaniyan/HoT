<?php
include "config.php";

?>
             
             <?php include("header.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>eletronics</title>
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/fontawesome.min.css">
    <link rel='stylesheet'  href='css/acc.css'>


</head>

<body>
    <!--nav bar-->
   
        <div id="bg">
      
            
        </div>

  

    <!--nav bar end -->


    
    <div class="title">
        <h1>Younger Collections</h1><br>
    </div>
    <!--lap1-->

    <div class="container">
        <div class="row" >
            <?php
            $sql = "select * from acc";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '
                    <div class="col-sm-4 col-lg-3 col-md-3 text-center">
     <img src="images/acc/' . $row['PIC'] . '" alt="" class="img-responsive" width="60%" ><br>
     <strong style="color:blue; ">' . $row['PNAME'] . '</strong><br>
     <h4 class="text-danger"> Rs.' . $row['PRICE'] . '</h4>
	<p><a href="acc_product.php?id=' . $row['PID'] . '" class="btn btn-outline-primary" id="cart" target="_blank">View Details</a></p>
    
   </div>

   ';
                }
            }
            ?>
        </div>
    </div>
</section>
</body></html>
