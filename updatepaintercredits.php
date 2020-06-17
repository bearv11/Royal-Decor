<?php 
if (isset($_POST['submit'])) {

	include 'db_connect.php';

	$painter = mysqli_real_escape_string($conn, $_POST['painter']);
	$newcredits = mysqli_real_escape_string($conn, $_POST['total']);

	$getcredit = "SELECT credit FROM painter WHERE name = '$painter'";
	$result = mysqli_query($conn, $getcredit);

	while($row = mysqli_fetch_array($result)) {
		$oldcredits = $row['credit'];
		$credits = $oldcredits + $newcredits;

		$update = "UPDATE painter SET credit = '$credits' WHERE name = '$painter'";
		if (mysqli_query($conn, $update)) {
			echo "<script>alert('Painter Credit Updated Successfully!'); location.href='evaluate.php';</script>";
	    } else {
			echo "<script>alert('Painter Credit Can't Be Updated!'); location.href='evaluate.php';</script>";
	    }
	}
}

?>