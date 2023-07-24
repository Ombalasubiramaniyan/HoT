<?php

 
if (!isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];

    $servername = "localhost";
    $database = "project";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("connection faild:" . mysqli_connect_errno());
  
    }
  

    $sql = "SELECT * from register WHERE email='$email' and pass1='$pass1'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck > 0) {
        
    header('location:index.php');

    } else {
        echo "incorrect";
    }
}
?>
