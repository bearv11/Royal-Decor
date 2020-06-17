<?php 
if(isset($_POST['submit'])){ 

	require('db_connect.php');

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$field = mysqli_real_escape_string($conn, $_POST['field']);
	$value = mysqli_real_escape_string($conn, $_POST['value']);

	$sql="UPDATE painter set $field = '$value' where name = '$name'";
	if (mysqli_query($conn, $sql)) {
       echo "<script>alert('Product Credit Updated Successfully!'); location.href='updateproductcredits.php';</script>";
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
  }
 else {
	header("Location: updateproductcredits.php");
}
 ?>