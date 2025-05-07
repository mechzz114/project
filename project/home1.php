<html>
<head>
	<title> Rate MyProfessor - Template </title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/stylemenu.css">

</head>

<body>

<style>
.hero-image {
  background-image: url("bg.png");
  background-color: #cccccc;
  height: 350px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
</style>
</head>
<body>


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'admin/dbcon.php';
?>

	<header class="banner">
	<img src="images/logo.svg">  

		<div class="panel panel-nav">
			<center>
				<div class="dropdown">
				<button class="dropbtn"><A href=home1.php ><B> HOME </B></A></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><A href=admin/index1.html ><B> Login </B></A></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><A href=contactus.php ><B> ContactUs </B></A></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><A href=details.php ><B> Details </B></A></button>
				</div>
			</center>
		</div>
	
	</header>
	
	<main>
<?php

				

?>	
				
				<article>
				<Center>
				<div class="hero-image">
					<div class="hero-text">
					<image src=bglogo.svg />
					<p>Search professor</p>
					<div>
					<Form action="search.php">
					&nbsp;&nbsp;&nbsp;<input type="text" name="search" size="155" height="24">
					<input type="image" src="images/search.png" alt="Submit" width="24" height="24">
					</Form>
				</div>	
				</div>
				</div>
	
				</article>
				
	</main>
	
	<footer>
		<center>
			Footer information
		</center>
	</footer>
</body>
</html>