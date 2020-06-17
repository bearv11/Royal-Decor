<!DOCTYPE html>
<!-- Connect to the database first! -->
<?php
	include 'db_connect.php';
	$sql = "SELECT * FROM product"; //SQL query to fetch the data from the database
	$result = mysqli_query($conn, $sql); //$result variable to execute the SQL query
	$names = array(); //Create an array to store the names of all the products in the database
	$ids = array(); //Create an array to store the ids of all the products in the database
	$productcredits = array(); //Create an array to store the credits of all the products in the database
    while($row = mysqli_fetch_assoc($result))
    {
        $names[] = $row['name']; //Fetch all the names from the $row array
        $ids[] = $row['id']; //Fetch all the ids from the $row array
        $productcredits[] = $row['credits']; //Fetch all the credits from the $row array
    }
?>
<!-- PHP script dealing with the database ends here -->
<!-- The main HTML page begins from here -->
<html>
<head>
	<title>Evaluate | Royal Decor</title>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<!-- CSS to the HTML elements -->
	<style type="text/css">
		body {
		    -webkit-box-align: center;
		    -ms-flex-align: center;
		    align-items: center;
		    margin: 0;
		    height: 100vh;
			font-weight: lighter;
			font-family: "Montserrat", sans-serif;
			-webkit-font-smoothing: subpixel-antialiased;
		}
		.text {
			font-size: 45px;
			height: 100%;
			width: 100%;
			display: flex;
			position: fixed;
			align-items: center;
			justify-content: center;
		}
		form {
			max-width: 70em;
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
		    float: left;
		}
		select {
			margin: 0 0 1em 0;
		    overflow: visible;
		    border: 1px solid transparent;
		    border-bottom-color: rgba(0, 0, 0, 0.3);
		    padding: 1em 1.5em 1.1em 0;
		    font-size: 20px;
		    float: left;
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
		input[type='button'] {
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
		button {
			padding: 1em 1.5em;
			line-height: normal;
		    cursor: pointer;
		    background-color: black;
		    color: white;
		    text-transform: uppercase;
		    text-align: center;
		    letter-spacing: 0.14287em;
		    border: 1px solid transparent;
		}
		table {
			width: 100%;
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
		position: fixed;
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
		#addMoreProducts, #removeProduct {
			padding: 1em 1.5em;
			line-height: normal;
		    cursor: pointer;
		    background-color: black;
		    color: white;
		    text-transform: uppercase;
		    text-align: center;
		    letter-spacing: 0.14287em;
		    border: 1px solid transparent;
		}
		.row {
			width: 100%;
			margin: 0;
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
	<!-- CSS ends here -->
</head>
<!-- Main content starts from here -->
<body>
	<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12 main-body">
		<a class="dashboard" href="dashboard.php?login"><i class="material-icons">chevron_left</i>Dashboard</a>
		<h1 class="head">Evaluate Credits</h1><hr class="head-border">
		<form action="updatepaintercredits.php" method="POST">
			<table id="controlTable">
				<tr>
					<td>
						<input list="painter" name="painter">
							<datalist id="painter">
							 	<?php 
								$painter = "SELECT name FROM painter";
								$painter_result = mysqli_query($conn, $painter);
								if (mysqli_num_rows($painter_result) > 0) {
						            while($painter_data = mysqli_fetch_assoc($painter_result)) {
						               echo "<option value='".$painter_data['name']."'>".$painter_data['name']."</option>";
						            }
						         } else {
						            echo "<option value=''></option>";
						         }
							?>	
							</datalist>
						<!-- <select name="painter" value="" required>
							<option value="" disabled selected>Select Painter</option>
							<?php 
								$painter = "SELECT name FROM painter";
								$painter_result = mysqli_query($conn, $painter);
								if (mysqli_num_rows($painter_result) > 0) {
						            while($painter_data = mysqli_fetch_assoc($painter_result)) {
						               echo "<option value='".$painter_data['name']."'>".$painter_data['name']."</option>";
						            }
						         } else {
						            echo "<option value=''></option>";
						         }
							?>
						</select> -->
					</td>
					<td style="padding: 0">
						<a href="#" id="addMoreProducts">Add Product</a>
					</td>
					<td style="padding: 0">
						<a href="#" id="removeProduct">Remove Product</a>
					</td>
				</tr>
			</table>
			<table id="productTable"></table>
			<table>
				<tr>
					<td>
						<input style="float: left;" id="total" name="total" class="text-input" type="text" placeholder="Total" required>
					</td>
					<td>
						<input type="button" value="total" onclick="calculate()">
					</td>
					<td>
						<input type="submit" name="submit" value="Save">
					</td>
				</tr>
			</table>
		</form>
	</div>
	</div>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
	<script type="text/javascript">
		var maxRows, text, i, j = -1;
		var products = <?php echo json_encode($names) ?>; //Transform PHP array to JavaScript array
		var ids = <?php echo json_encode($ids) ?>; //Transform PHP array to JavaScript array
		text = "<option value='' disabled selected>Select Product</option>";
		for (var i = 0; i < products.length; i++) {
			text += "<option value="+ids[i]+">" + products[i] + "</option>"; //Create the <option> tags for select menu
		}
		$(document).ready(function(){
		maxRows = products.length; //Set the variable for the number of products
		var xyz = 1; //Temporary variable to prevent addition of rows more than the number of products
			$('#addMoreProducts').click(function(){
				if(xyz <= maxRows) {
					j++;
					$('#productTable').append('<tr> <td> <select id="product'+ids[j]+'" class="productNames" value="" required>'+text+'</select> </td> <td> <input class="text-input" type="text" name="quantity" id="quantity'+ids[j]+'" placeholder="Product Quantity" value="" pattern="^[0-9]*$" required> </td></tr>');
					xyz++;
				}
			});
			$('#controlTable').on('click','#removeProduct',function(e){
				$('#quantity'+ids[j]).parent('td').parent('tr').remove();				
				if (j > -1){
					j--;
				}
				if (xyz > 1){
					xyz--;
				}
			});
		});
		function calculate() {  
			var i = 0;
			var productcredits = <?php echo json_encode($productcredits) ?>; //Transform PHP array to JavaScript array
			var quantities = new Array(); //Create an array to store all the quantities
			var reqcredits = new Array(); //Create an array to store all the required product credits
			var temp = new Array(); //Create an temporary array to store the multiplication of credits and quantities
			var sum = 0; //Variable to store the final sum of credits
			var length = productcredits.length;
			for (i = 1; i <= length; i++) {
				if(document.getElementById("quantity"+i)) {
					quantities[i-1] = Number(document.getElementById("quantity"+i).value);
				}
			}
			for (i = 1; i <= length; i++) {
				if(document.getElementById("product"+i)) {
					reqcredits[i-1] = Number(document.getElementById("product"+i).value);
				}
			}
			for (i = 0; i < quantities.length; i++) {
				temp[i] = quantities[i] * productcredits[reqcredits[i]-1];
			}
			for (i = 0; i < temp.length; i++) {
				sum = sum + temp[i];
			}
			document.getElementById("total").value = sum;
		}
	</script>							
	<script src="js/bootstrap.js"></script>
</body>
<!-- Main content ends here -->
</html>