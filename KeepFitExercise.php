<?php

			 if(isset($_POST["submit1"])){
					 		header("location: Abs.php");
					 }


				 elseif (isset($_POST["submit2"])) {
				 		 header("location: Chest.php");
				 }


				 elseif (isset($_POST["submit3"])) {
				 		 header("location: Biceps.php");
				 }


				 elseif (isset($_POST["submit4"])) {
				 		 header("location: Calves.php");
				 }


				 elseif (isset($_POST["submit5"])) {
				 		 header("location: Glutes.php");
				 }

				 elseif (isset($_POST["submit6"])) {
				 		 header("location: All-round.php");
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
	<p class="descriptiontext">You can choose a target area on your body that you want to focus on or choose all-round
	to work out your whole body at once</p>

	<form action="" method="post">
		<input type="submit" name="submit1" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Abs">
		<input type="submit" name="submit2" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Chest">
		<input type="submit" name="submit3" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Biceps">
		<input type="submit" name="submit4" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Calves">
		<input type="submit" name="submit5" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="Glutes">
		<input type="submit" name="submit6" class="buttonKeepFitchoice buttonKeepFitchoicehover" value="All-round">
	</form>


	<!-- <table border="2">
  <tr>
    <td>ID</td>
    <td>Departure time</td>
    <td>Departure date</td>
    <td>Destination</td>
    <td>Phone number of Companion</td>
    <td>Expected return date</td>
    <td>Status</td>
  </tr> -->



	





	</body>
</html>