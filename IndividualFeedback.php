<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HealthiumCo</title>
	<link href="mystyle2.css" rel="stylesheet" type="text/css">
	<link href="mystyle.css" rel="stylesheet" type="text/css">
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
		<p class="descriptiontext">We would love to hear from you!</p>

		<br><br>

		<form action="" method="post">
			<label class="userRegAndLogIntext">Email: </label><input type="email" name="email" size="60" placeholder="Email" required/><br><br>
			<textarea name="user_feedback" rows="20" cols="80" class="textarea">Write feedback here...</textarea><br><br>
			<input type="submit" name="submit" class="buttonRegister buttonRegister1" value="Submit">
		</form>



		<?php

		require ("IndividualDatabaseConn.php");



		if(isset($_POST["submit"])){
			$email = $_POST["email"];
			$user_feedback = $_POST["user_feedback"];


			$query = "INSERT INTO `feedback` (`email`, `user_feedback`) VALUES ('$email', '$user_feedback')";

			mysqli_query($conn, $query);

			echo "<script>alert('Thank you for your feedback!')</script>";
		}







		$conn->close();





		?>





	</body>