
<?php

		//Button that trigggers redirection to other pages
		if(isset($_POST["submit"])){
				header("location: KeepingFit.php");
					}


		elseif (isset($_POST["submit1"])) {
				header("location: ImprovingHealth.php");
					}


		elseif (isset($_POST["submit2"])) {
				header("location: SchedulesAdmin.php");
					}

		elseif (isset($_POST["submit3"])) {
				header("location: Analytics.php");
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

		<br><br>


		<h1 class="HealthiumtextReg">HealthiumCo</h1>
		<p class="descriptiontext">Thank you for being part of the team!</p>

		<!--Buttons that redirect to another page-->
		<form action="" method="post">
		<input type="submit" name="submit" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Keeping Fit">
		<input type="submit" name="submit1" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Improving Health">
		<input type="submit" name="submit2" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Schedules">
		<input type="submit" name="submit3" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Analytics">
	</form>

	</body>