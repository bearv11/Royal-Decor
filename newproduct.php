<!DOCTYPE html>
<html>
<head>
	<title>RD|New Product</title>
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
		    height: 100vh;
			font-weight: lighter;
			font-family: "Montserrat", sans-serif;
			-webkit-font-smoothing: subpixel-antialiased;
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
	<div class="col-sm-9 col-md-9 col-lg-12 main-body">
		<a class="dashboard" href="dashboard.php?login"><i class="material-icons">chevron_left</i>Dashboard</a>
		<h1 class="head">Add New Product</h1><hr class="head-border">
		<form method="POST" action="addnewproduct.php">
			<input class='text-input' id='name' type="text" name="name" placeholder="Product's Name" value="" required tabindex="1" onkeyup="saveValue(this);"> <br>

			<input class='text-input' type="text" name="credit" placeholder="Product's Credits" value="" required tabindex="2" pattern="^[0-9]*$" onkeyup="saveValue(this);"><br>

			<input type="submit" name="submit" value="Add"><br>
		</form>
	</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>