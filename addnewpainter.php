<?php 
if (isset($_POST['submit'])) {

	include 'db_connect.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);

	$sql = "INSERT INTO painter (name, mobile, city, credit) VALUES ('$name', '$mobile', '$city', '0')";
	if (mysqli_query($conn, $sql)) {
       echo "<script>alert('New Painter added successfully!'); location.href='newpainter.php';</script>";
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
} else {
	header("Location: newpainter.php");
}

?>