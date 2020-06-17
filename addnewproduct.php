<?php 
if (isset($_POST['submit'])) {

	include 'db_connect.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$name = preg_replace("/[\s]/", "-",$name);	
	$credit = mysqli_real_escape_string($conn, $_POST['credit']);

	$sql = "INSERT INTO product (name, credits) VALUES ('$name', '$credit')";
	if (mysqli_query($conn, $sql)) {
       echo "<script>alert('New Product added successfully!'); location.href='newproduct.php';</script>";
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
} else {
	header("Location: newproduct.php");
}

?>