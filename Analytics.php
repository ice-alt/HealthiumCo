<?php

	//Buttons that trigger redirection to other pages
	if(isset($_POST["submit"])){
				header("location: Analytics_Fitness.php");
					}


	elseif (isset($_POST["submit1"])) {
			header("location: Analytics_Health.php");
					}



?>








<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>HealthiumCo</title>
	<link href="mystyle2.css" rel="stylesheet" type="text/css">
	<link href="mystyle.css" rel="stylesheet" type="text/css">
	<style>
		<?php include("mystyle2.css"); ?>
	</style>
</head>




	<body>
		<!--Navigation bar-->
		<ul>
			<li ><a href="admin_homepage.php">Home</a></li>
			<li ><a href="index2.php">Log In As User</a></li>
		</ul>

		<br><br><br><br>

		<!--Buttons that take you to another page-->
		<form action="" method="post">
			<input type="submit" name="submit" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Number of Fitness Contributors">
			<input type="submit" name="submit1" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Number of Health Contributors">

		</form>


	
 

	


	</body>