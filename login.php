<?php 
if (isset($_POST['submit'])) {
	include 'db_connect.php';
	session_start();

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$sql = "SELECT * FROM login_creds WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	$resultcheck = mysqli_num_rows($result);
	if($resultcheck == 1) {
		$login = 'success';
		$_SESSION["name"]=$username;
		header("Location: dashboard.php");
	} else {
		header("Location: index.php");
		echo "Invalid Credentials";
	}
} else {
	header("Location: index.php");
}
?>