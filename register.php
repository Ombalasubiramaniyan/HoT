<?php

$uname = $_POST['uname'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$servername = "localhost";
$database= "project";
$username= "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
  die("connection faild:".mysqli_connect_errno());
  
}
  $check = "SELECT email From register Where email ='$email' Limit 1";
  $cemail = mysqli_query($conn, $check);
  $sql= "INSERT Into register values ('$uname','$email','$pass1','$pass2')";
  $re = '/[A-Za-z0-9.]+@gmail+.com/';
  if (mysqli_num_rows($cemail) > 0)
   {
    echo "eamil id allready installed";
  } 
  elseif (preg_match($re, $_POST["email"]) and $_POST["pass1"] === $_POST["pass2"] )
  {
    mysqli_query($conn, $sql);
    echo "<script>alert('Successfully Registeed!');</script>";
    header("location:index.php");
;
  }
   else
    {
    echo "Fail";
    
  }
mysqli_close($conn);
?>
