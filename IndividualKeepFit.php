<?php

		if(isset($_POST["submit"])){
				header("location: KeepFitExercise.php");
					}


		elseif (isset($_POST["submit1"])) {
				header("location: KeepFitDiet.php");
					}




			?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HealthiumCo</title>
	<link href="mystyle2.css" rel="stylesheet" type="text/css">
	<style>
		<?php include("mystyle2.css"); ?>

	</style>
	</head>


<body>

	<ul>
		<li ><a href="IndividualHomepg.php">Home</a></li>
		<li ><a href="IndividualContributors.php">Contributors</a></li>
		<li ><a href="IndividualFeedback.php">Feedback</a></li>
		<li ><a href="Schedules.php">Schedules</a></li>
	</ul>

	<br><br><br>

	<h3 class="letshelpyoutext">Let's help you keep fit!</h3>
	<p class="descriptiontext">Below are exercise and diet options to get you started</p>

	<form action="" method="post">
		<input type="submit" name="submit" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Exercises">
		<input type="submit" name="submit1" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Diet">
	</form>







   
 




















	</body>
</html>