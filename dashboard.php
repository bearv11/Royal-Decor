<!-- <?php 
	session_start();
?> -->
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
	<style type="text/css">
		body {
			font-family: "Montserrat", sans-serif;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
			color: white;
			overflow: hidden;
		}
		.main-title {
			font: 400 15rem Montserrat, sans-serif;
			letter-spacing: 20px;
			animation: anim 5s alternate ease-in-out;
			z-index: 99;
			text-shadow: 0 0 20px black;
		}
		@keyframes anim {
			from {
				opacity: 0;
			}
			to {
				opacity: 1;
			}
		}
		.menu-toggle {
			z-index: 99;
			position: fixed;
			top: 50px;
			left: 50px;
			color: white;
			font-size: 30px;
			cursor: pointer;
			text-shadow: 0 0 20px rgba(0, 0, 0, 1);
			transition: 0.5s;
		}
		.menu-toggle:hover {
			text-shadow: 0 0 25px black;
			transform: rotateY(180deg);
		}
		.sidenav {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 999;
			top: 0;
			left: 0;
			overflow: hidden;
			background-color: #222471;
			transition: 0.5s;
		}
		.sidenav a {
			text-decoration: none;
			font-size: 30px;
			color: white;
			display: block;
			transition: 0.3s;
			white-space: nowrap;
		}
		.sidenav a:hover {
			color: #f1f1f1;
		}
		ul {
			list-style: none;
			padding-left: 0;
			margin-left: 0;
			font-size: 28px;
			white-space: nowrap;
		}
		li {        
			font-size: 21px;
			padding: 0.8em 0.8em;
			color: white;
		}
		.sidenav-heading{
			font-size: 30px;
			padding-left: 25px;
			color: white;
		}
		.sidenav-heading:hover{
			text-decoration: none;
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
		.close-arrow-toggle {
			position: relative;
			top: 5px;
			left: 5px;
			cursor: pointer;
			transition: 0.5s ease-in-out;
			font-size: 20px;
		}
		.close-arrow-toggle:hover {
			color: red;
		}
		.menu-grid-blocks {
			display: none;
			transition: 5s;
		}
		.menu-grip-blocks-after {
			z-index: 999;
			display: block;
			background: rgba(0, 0, 0, 0.7);
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100vh;
		}
		.close-button-toggle {
			z-index: 999;
			position: fixed;
			top: 50px;
			left: 50px;
			color: white;
			font-size: 30px;
			cursor: pointer;
			text-shadow: 0 8px 20px rgba(0, 0, 0, 1);
			transition: 0.5s;
		}
		.close-button-toggle:hover {
			transform: rotate(-90deg);
			color: red;
		}
		.row {
			padding: 10%;
			text-align: center;
		}
		h3 {
			padding-top: 29%;
		}
		.col-sm-4, .col-md-4, .col-lg-4 {
			width: 29%;
			background: white;
			height: 250px;
			margin-left: 3.5%;
			box-sizing: border-box;
			border: transparent;
			border-radius: 15px;
			color: black;
			transition: 0.5s;
		}
		.col-sm-4:hover , .col-md-4:hover , .col-lg-4:hover {
			box-shadow: 0 0 20px rgba(255, 255, 255, 1); 
			background-color: rgba(0, 0, 0, 1);
			color: white;
		}
		.row1 {
			padding: 5% 10% 0 10%;
		}
		.row2 {
			padding: 2% 10% 10% 10%;
		}
		a, a:hover {
			color: inherit;
			text-decoration: none;
		}
		.glyphicon-user, .glyphicon-off, .ion-md-color-fill, .ion-md-cash, .ion-md-calculator, .ion-md-eye {
			font-size: 50px;
			color: white;
			transition: 0.5s;
		}
		.glyphicon-off:hover {
			color: red;
			transform: rotate(360deg);
		}
		.glyphicon-user:hover {
			transform: rotate(360deg);
		}
		i:hover {
			transform: rotate(360deg);
		}
		h1 {
			color: white;
			transition: 1s;
		}
		@media (-webkit-min-device-pixel-ratio:0) {
			h1 {
				background-image: -webkit-linear-gradient(left, hotPink 0%, orange 50%, yellow 50%);
				background-position: 100% 0;
				background-size: 200% 200%;
				-webkit-transition: 0.5s;
				-webkit-background-clip: text;
			}
			h1:hover {
				background-position: 0 0;
				color: transparent;
				transition: 1s 0;
			}
		}
	</style>
</head>
<body>
	<!-- <?php 
		if($_SESSION["name"]){
	 ?> -->
	<span id="open-menu" class="glyphicon glyphicon-menu-hamburger menu-toggle" data-toggle="tooltip" data-placement="right" title="Open Menu" aria-hidden="true" onclick="openNav()"></span>
	<ul class="cb-slideshow" onclick="openNav()">
		<li><span>Image 01</span></li>
		<li><span>Image 02</span></li>
		<li><span>Image 03</span></li>
		<li><span>Image 04</span></li>
		<li><span>Image 05</span></li>
		<li><span>Image 06</span></li>
	</ul>
	<h1 class="main-title" onclick="openNav()">Royal Decor</h1>
	<div id="menu-grid-blocks" class="container-fluid menu-grid-blocks">
		<span class="glyphicon glyphicon-remove close-button-toggle" data-toggle="tooltip" data-placement="right" title="Close Menu" aria-hidden="true" onclick="closeNav()"></span>
		<div class="row row1">
			<div class="col-sm-4 col-md-4 col-lg-4">
				<a href="newpainter.php">
					<h3>Add New Painter</h3>
					<span class="glyphicon glyphicon-user"></span>
				</a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<a href="newproduct.php">
					<h3>Add New Product</h3>
					<i class="icon ion-md-color-fill"></i>
				</a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<a href="updateproductcredits.php">
					<h3>Update Credits</h3>
					<i class="icon ion-md-cash"></i>
				</a>
			</div>
		</div>
		<div class="row row2">
			<div class="col-sm-4 col-md-4 col-lg-4">
				<a href="evaluate.php">
					<h3>Evaluate Credits</h3>
					<i class="icon ion-md-calculator"></i>
				</a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<a href="view.php">
					<h3>View Details</h3>
					<i class="icon ion-md-eye"></i>
				</a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<a href="logout.php">
					<h3>Logout</h3>
					<span class="glyphicon glyphicon-off"></span>
				</a>
			</div>
		</div>
	</div>
	<script>
		function openNav() {
			document.getElementById("menu-grid-blocks").classList.add("menu-grip-blocks-after");
			document.getElementById("open-menu").style.display = "none";
		}
		function closeNav() {
			document.getElementById("menu-grid-blocks").classList.remove("menu-grip-blocks-after");
			document.getElementById("open-menu").style.display = "block";
		}
	</script>
	<script src="https://unpkg.com/ionicons@4.2.0/dist/ionicons.js"></script>
	<!-- <?php 
		}
		else
			echo "<h1>Please login first</h1>"
	 ?> -->
</body>
</html>