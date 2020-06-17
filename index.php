<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
	<style type="text/css">
		body{
			 font-family: "Montserrat", sans-serif;
			 font-size: 14px;
			 font-weight: 300;
			background-image: url("images/s3.jpg");
			background-size: cover;
			display: flex;
		}
		.login-box{
			border-top-right-radius: 20%;
		    border-bottom-left-radius: 10%;
		    border-bottom-right-radius: 10%;
		    text-align: center;
		    margin: 0 auto;
		    width: 20%;
		    padding: 130px 35px 83px 35px;
		    top: 30%;
		    left: 38%;
		    position: absolute;
		    border-top-left-radius: 20%;
		    background-color: #c5dafb;
		}
		.logo{
			height: 37%;
		    width: 41%;
		    top: -65px;
		    left: 98px;
		    border-radius: 50%;
		    z-index: 123;
		    position: absolute;
		}
		::placeholder{
			color: black;
		}
		input[type=text], input[type=password]{
			font: inherit;
		    margin-bottom: 24px;
		    border: none;
		    color: black;
		    border-bottom: 2px solid #10100f;
		    background-color: transparent;
		    outline: none;
		    width: 246px;
		    /* text-align: center; */
		    font-size: 18px;
		    height: 34px;
		}
		input[type=submit]{
			font: inherit;
		    line-height: normal;
		    cursor: pointer;
		    background-color: black;
		    color: white;
		    text-transform: uppercase;
		    text-align: center;
		    letter-spacing: 0.14286em;
		    /* border-radius: 39px; */
		    border: none;
		    height: 53px;
		    width: 165px;
		    margin-top: 15px;
		}

	</style>
</head>
<body>
	<div class="login-box">
		<img src="images/royaldecor.jpg" class="logo">
		<form action='login.php' class='form' method="POST">
			<input id='name' name='username' required type='text' placeholder="Username"><br>
			<input id='password' name='password' required type='password' placeholder="Password"><br>
			<input type="submit" name="submit" value="submit">
		</form>
	</div>
</body>
  <script src='js/xgrmnr.js'></script>
  <script src="js/index.js"></script>
</html>