<?php 

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
	
