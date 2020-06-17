<?php 
require('db_connect.php');
$alldata= 'SELECT name, mobile, city FROM painter';
$alldataquery=mysqli_query($conn, $alldata);
?>
<!DOCTYPE html>
<html>
<head>
	<title>RD|View</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="jquery.tabletoCSV.js"></script>
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
		.button-all{
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
			text-align: center;
			margin-left: 153px;
		}
		.button-credit{
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
			text-align: center;
			margin-left: 100px;
		}
		li:hover{
			background-color: #4d4d7c;
		}
		.active{
			background-color: #171733;
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
			position: fixed;
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
		.download{
			margin-left: 320px;
			padding: 0.3em 1.5em;
			border-radius: 110px;
			line-height: normal;
			cursor: pointer;
			background-color: green;
			color: white;
			text-transform: ;
			text-align: center;
			letter-spacing: 0.1em;
			border: 1px solid transparent;
			font-size: inherit;
			text-align: center;
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
			overflow-x: hidden;
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
		.dashboard{
					    text-decoration: none;
			    color: #222471;
			    font-size: 28px;
			    position: absolute;
			    margin: 71px 0 0 52px;
	}
		table {

			margin-top: 49px;
			padding: 0;
			width: 100%;
			table-layout: fixed;
			background-color: #b0b1d847;
			border-radius: 20px;
		}


		table tr {
			background-color: transparent;
			padding: .35em;
		}

		table th,
		table td {
			padding: .625em;
			text-align: center;
		}

		table th {
			font-size: .85em;
			letter-spacing: .1em;
			text-transform: uppercase;
			border-bottom: 0.2px inset #222471
		}

		@media screen and (max-width: 600px) {
			table {
				margin-top: 
				border: 0;
			}

			table caption {
				font-size: 1.3em;
			}

			table thead {
				border: none;
				clip: rect(0 0 0 0);
				height: 1px;
				margin: -1px;
				overflow: hidden;
				padding: 0;
				position: absolute;
				width: 1px;
			}

			table tr {
				border-bottom: 3px solid #ddd;
				display: block;
				margin-bottom: .625em;
			}

			table td {
				border-bottom: 1px solid #ddd;
				display: block;
				font-size: .8em;
				text-align: right;
			}

			table td::before {
				content: attr(data-label);
				float: left;
				font-weight: bold;
				text-transform: uppercase;
				}

				table tr:last-child {
					border-bottom: 0;
				}
				.alldata{
					padding-left: 74px;

				}
	</style>
	<script type="text/javascript">
		function shownames(){
			var x=document.getElementById("names");
			var y=document.getElementById("export");
			if((x.style.display=="none")&&(y.style.display=="none"))
			{
				x.style.display= "";
				y.style.display= "";
			}
			else
			{
				x.style.display="none";
				y.style.display= "none";
			}
		}
		function showcredits(){
			var x=document.getElementById("credits");
			var y=document.getElementById("export1");
			if((x.style.display=="none")&&(y.style.display=="none"))
			{
				x.style.display= "";
				y.style.display= "";
			}
			else
			{
				x.style.display="none";
				y.style.display= "none";
			}
		}
	</script>
</head>
<body>
	<div class="col-sm-9 col-md-9 col-lg-12 main-body">
		<a class="dashboard" href="dashboard.php?login"><i class="material-icons">chevron_left</i>Dashboard</a>
		<h1 class="head">View Details</h1><hr class="head-border">
		<div class="row" style="height: 80vh;">
			<div class="col-lg-7" style="padding-left: 74px;">
				<button onclick=shownames() class="button-all">Show Names</button><br><br>
				<button class="download" id="export" class="names" data-export="export" style="display: none;">Download</button>
				<table style="display: none; " id="names">
					<tr>
						<thead>
							<th>Name</th>
							<th>Mobile Number</th>
							<th>City</th>
						</thead>
					</tr>
					<tbody>
						<?php
						while ($row = mysqli_fetch_assoc($alldataquery))
						{
							echo '<tr>
							<td>'.$row['name'].'</td>
							<td>'.$row['mobile'].'</td>
							<td>'.$row['city'].'</td>

							</tr>';
						}?> 
					</tbody>
				</table>
			</div>
			<div class="col-lg-5 box">
				<button onclick=showcredits() class="button-credit">Show Credits</button><br><br>
				<button class="download" id="export1" class="credits" data-export="export" style="display: none;">Download</button>
				<table style="display: none; " id="credits">
					<tr>
						<th>Name</th>
						<th>Credits</th>
					</tr>
					<?php
					require('db_connect.php');
					$credits='SELECT name, credit FROM painter ORDER BY credit DESC';
					$creditquery=mysqli_query($conn, $credits);
					while ($row = mysqli_fetch_array($creditquery,MYSQLI_ASSOC))
					{
						echo '<tr>
						<td>'.$row['name'].'</td>
						<td>'.$row['credit'].'</td>
						</tr>';
					}?>
				</table>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.js"></script>
	<script>
		$("#export").click(function(){
			$("#names").tableToCSV();
		});

		$("#export1").click(function(){
			$("#credits").tableToCSV();
		});
	</script>
</body>
</html>