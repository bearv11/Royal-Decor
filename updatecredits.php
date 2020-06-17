<?php 
if (isset($_POST['submit'])) {

	include 'db_connect.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$field = mysqli_real_escape_string($conn, $_POST['field']);
	$value = mysqli_real_escape_string($conn, $_POST['product_detail']);

	$sql = "UPDATE product SET $field = '$value' WHERE name = '$name'";
	if (mysqli_query($conn, $sql)) {
       echo "<script>alert('Product Detail Updated Successfully!'); location.href='updateproductcredits.php';</script>";
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
} else {
	header("Location: updateproductcredits.php");
}

?>