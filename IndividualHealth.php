<?php

		//Button that triggers redirection of page
		if(isset($_POST["submit"])){
				header("location: HealthExercise.php");
					}


		elseif (isset($_POST["submit1"])) {
				header("location: HealthDiet.php");
					}




?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>HealthiumCo</title>
	<link href="mystyle2.css" rel="stylesheet" type="text/css">
	<style>
		<?php include("mystyle2.css"); ?>

	</style>
</head>


	<body>

		<!--Navigation bar-->
		<ul>
			<li ><a href="IndividualHomepg.php">Home</a></li>
			<li ><a href="IndividualContributors.php">Contributors</a></li>
			<li ><a href="IndividualFeedback.php">Feedback</a></li>
			<li ><a href="Schedules.php">Schedules</a></li>
		</ul>

		<br><br><br>

		<h3 class="letshelpyoutext">Let's help you keep fit!</h3>
		<p class="descriptiontext">Below are exercise and diet options to get you started</p>

		<!--Buttons to take you to another page-->
		<form action="" method="post">
			<input type="submit" name="submit" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Exercises">
			<input type="submit" name="submit1" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Diet">
		</form>







   
 




















	</body>
</html>