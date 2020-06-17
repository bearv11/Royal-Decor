<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "mysql";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (mysqli_connect_errno()) {
  echo "Failed to connect to Database: " . mysqli_connect_error();
 }
?>