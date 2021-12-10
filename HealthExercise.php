<?php
			//Button that triggers redirection of page
			 if(isset($_POST["submit1"])){
					 	header("location: Diabetes_Exercise.php");
					 }


				 elseif (isset($_POST["submit2"])) {
				 		 header("location: Arthritis_Exercise.php");
				 }


				 elseif (isset($_POST["submit3"])) {
				 		 header("location: Pregnancy_Exercise.php");
				 }


				 elseif (isset($_POST["submit4"])) {
				 		 header("location: Cancer_Exercise.php");
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
	<p class="descriptiontext">Choose what condition applies to you</p>

	<!--Buttons to take you to another page-->
	<form action="" method="post">
		<input type="submit" name="submit1" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Diabetes">
		<input type="submit" name="submit2" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Arthritis">
		<input type="submit" name="submit3" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Pregnancy">
		<input type="submit" name="submit4" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Cancer">
	</form>



	</body>
</html>