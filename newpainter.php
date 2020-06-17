<!DOCTYPE html>
<html>
<head>
	<title>RD|New Painter</title>
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
			max-width: 20em;
		    margin: 0 auto;
		    padding: 1em 2em;
		    text-align: center;
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
			line-height: normal;
		    cursor: pointer;
		    background-color: black;
		    color: white;
		    text-transform: uppercase;
		    text-align: center;
		    letter-spacing: 0.14287em;
		    border: 1px solid transparent;
		    font-size: inherit;
		    margin: 0;
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
	.submit-button{
		  width: 275px;
    		margin-top: 30px;
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
		<h1 class="head">Add New Painter</h1><hr class="head-border">
		<form method="POST" action="addnewpainter.php">
			<table>
				<tr>

					<td>
						<input class='text-input' id='name' type="text" name="name" placeholder="Name" value="" required tabindex="1" pattern="^[a-zA-Z ]*$" onkeyup="saveValue(this);">
					</td>
				</tr>
				<tr>

					<td>
						<input type="text" name="mobile" placeholder="Mobile Number" value="" required tabindex="3" onkeyup="saveValue(this);">
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="city" placeholder="City" value="" required tabindex="4" pattern="^[a-zA-Z ]*$" onkeyup="saveValue(this);"><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="submit-button" name="submit" value="Add">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>