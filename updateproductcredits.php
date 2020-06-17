<!DOCTYPE html>
<html>
<head>
	<title>RD|Update</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<style type="text/css">
		body{
		    display: flex;
		    -webkit-box-align: center;
		    -ms-flex-align: center;
		    align-items: center;
		    margin: 0;
		    padding: 0;
		    height: 100vh;
			font-weight: lighter;
			font-family: "Montserrat", sans-serif;
			-webkit-font-smoothing: subpixel-antialiased;
			overflow: hidden;
		}
		form {
			max-width: 50em;
		    margin: 0 auto;
		    padding: 1em 2em;
		    text-align: center;		    
		     margin-top: 90px; 
		}
		input {
		    margin: 0 0 1em 0;
		    overflow: visible;
		    border: 1px solid transparent;
		    border-bottom-color: rgba(0, 0, 0, 0.3);
		    padding: 1em 1.5em 1em 0;
		    font-size: 20px;
		}
		select {
			width: 65%;
			margin: 0 0 1em 0;
		    overflow: visible;
		    border: 1px solid transparent;
		    border-bottom-color: rgba(0, 0, 0, 0.3);
		    padding: 1em 1.5em 1em 0;
		    font-size: 20px;
		}
		input[type='submit'] {
			padding: 1em 1.5em;
		    width: 37%;
		    line-height: normal;
		    cursor: pointer;
		    background-color: black;
		    color: white;
		    text-transform: uppercase;
		    text-align: center;
		    letter-spacing: 0.14287em;
		}
		input:focus {
			outline: -webkit-focus-ring-color auto 0;
		}
			ul {
		list-style: none;
		padding-left: 0;
		margin-left: 0;
		font-size: 28px;
		    padding-top: 20px;
	}
	li {
		
		font-size: 21px;
		padding: 1em 1em;
		color: white;
	}
	li:hover{
		    background-color: #4d4d7c;
	}
	a {
		text-decoration: none;
		color: inherit;
	}
	a:hover {
		text-decoration: none;
		color: inherit;
	}
	.sidenav{
		height: 100vh;
		background-color: #222471;
		padding: 0;
		max-width: 20.5%;
	}
	.sidenav-heading{
		    font-size: 30px;
    padding-left: 25px;
    color: white;
	}
	.sidenav-heading-bold{
		font-size: 55px;
		font-weight: 400;
		color: #8BC34A;
	}
	.ruler{
		border: 2px solid white;
	}
	.head {
			    text-transform: uppercase;
    text-align: center;
    letter-spacing: 0.13287em;
    margin-top: 32px;
    margin-left: 50px;
    color: #222471;
    font-weight: 900;
		}
	.main-body{
		height: 100vh;
		padding: 0;
		margin:0;
	}
	.head-border{
		width: 696px;
    border: 2px solid #4CAF50;
    margin-top: 19px;
	}
	.active{
		background-color: #171733;
	}
	.sub-head{
	    margin-left: 124px;
    margin-top: 45px;
    margin-bottom: -47px;
	}
	.dashboard{
		    text-decoration: none;
    color: #222471;
    font-size: 28px;
    position: absolute;
    margin: 71px 0 0 52px;
	}
	</style>
</head>
<body>
	<div class="col-sm-9 col-md-9 col-lg-12 main-body container-fluid">
		<a class="dashboard" href="dashboard.php?login"><i class="material-icons">chevron_left</i>Dashboard</a>
		<h1 class="head">Update</h1><hr class="head-border">
		<div class="row">
						<div class="col-lg-6">
							<h3 class="sub-head">Update Credits</h3>
						<form method="POST" action="updatecredits.php">
							<select name="name" required>
								<option value="" disabled selected tabindex="1">Select Product</option>
								<?php 
									include 'db_connect.php';
									$product = "SELECT name FROM product";
									$product_result = mysqli_query($conn, $product);
									if (mysqli_num_rows($product_result) > 0) {
							            while($product_data = mysqli_fetch_assoc($product_result)) {
							               echo "<option style='opacity: 0.7;' value='".$product_data['name']."'>".$product_data['name']."</option>";
							            }
							         } else {
							            echo "<option value=''></option>";
							         }
								?>
							</select> <br>
							<select name="field" required>
							<option value="" disabled selected tabindex="1">Select Detail to Edit</option>
							<?php 
								include 'db_connect.php';
								$product = "SELECT name, credits FROM product";
								$product_result = mysqli_query($conn, $product);
								if (mysqli_num_rows($product_result) > 0) {
						            while($product_data = mysqli_fetch_field($product_result)) {
						               echo "<option style='opacity: 0.7;' value='".$product_data->name."'>".$product_data->name."</option>";
						            }
						         } else {
						            echo "<option value=''></option>";
						         }
							?>
						</select> <br>

							<input class='text-input' type="text" name="product_detail" placeholder="Enter the value" value="" required tabindex="2" onkeyup="saveValue(this);"><br>

							<input type="submit" name="submit" value="Update"><br>
						</form>
						</div>





			<div class="col-lg-6">


						<h3 class="sub-head">Update Details</h3>
						<form method="POST" action="updatedetails.php">
						<select name="name" required>
							<option value="" disabled selected tabindex="1">Select Name</option>
							<?php 
								include 'db_connect.php';
								$product = "SELECT name FROM painter";
								$product_result = mysqli_query($conn, $product);
								if (mysqli_num_rows($product_result) > 0) {
						            while($product_data = mysqli_fetch_assoc($product_result)) {
						               echo "<option style='opacity: 0.7;' value='".$product_data['name']."'>".$product_data['name']."</option>";
						            }
						         } else {
						            echo "<option value=''></option>";
						         }
							?>
						</select> <br>

						<select name="field" required>
							<option value="" disabled selected tabindex="1">Select Detail to Edit</option>
							<?php 
								include 'db_connect.php';
								$product = "SELECT name, aadhar, mobile, city FROM painter";
								$product_result = mysqli_query($conn, $product);
								if (mysqli_num_rows($product_result) > 0) {
						            while($product_data = mysqli_fetch_field($product_result)) {
						               echo "<option style='opacity: 0.7;' value='".$product_data->name."'>".$product_data->name."</option>";
						            }
						         } else {
						            echo "<option value=''></option>";
						         }
							?>
						</select> <br>

						<input class='text-input' type="text" name="value" placeholder="Enter the value" value="" required tabindex="2" onkeyup="saveValue(this);"><br>

						<input type="submit" name="submit" value="Update"><br>
					</form>
					</div>


		</div>
	</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>