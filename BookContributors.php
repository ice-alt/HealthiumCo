<?php
		
		//Connecting to database
		require("IndividualDatabaseConn.php");

		//Button that triggers redirection to other pages
		if(isset($_POST["submit"])){
			$Fname = $_POST['fname'];
			$Lname = $_POST['lname'];
			$Email = $_POST['email'];
			$ContributorName = $_GET['id'];
			$Date = $_POST['date'];
			$Time = $_POST['time'];


			//Query to retrieve data from the database
			$query1 = "INSERT INTO `booking`(`fname`, `lname`, `email`, `contributor_name`, `meeting_date`, `meeting_time`) VALUES ('$Fname','$Lname','$Email','$ContributorName','$Date','$Time')";

			//Execution of query
			mysqli_query($conn, $query1);

			//Redirects to another page
			header("location: ConfirmBooking.php");



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
			<li ><a href="IndividualHomepg.php">Home</a></li>
			<li ><a href="IndividualContributors.php">Contributors</a></li>
			<li ><a href="IndividualFeedback.php">Feedback</a></li>
			<li ><a href="Schedules.php">Schedules</a></li>
		</ul>

		<br><br><br><br>




		<p class="descriptiontext2">Please fill in the following details:</p><br><br>


	<?php

		

		//Query to retrieve data from the database
		$query = "SELECT name FROM  contributors";

		
			//Execution of query
		$result = mysqli_query($conn, $query);




	?>

		<!--Form-->
		<form action="" method="post">
			<label class="userRegAndLogIntext">First name: </label><input type="text" name="fname" size="60" placeholder="First name" required/><br><br>
			<label class="userRegAndLogIntext">Last name:  </label><input type="text" name="lname" size="60" placeholder="Last name" required/><br><br>
			<label class="userRegAndLogIntext">Email:  </label><input type="email" name="email" size="60" placeholder="Email" required/><br><br>
			<label class="userRegAndLogIntext">Name of Contributor:  </label><?php echo $_GET['id']?><br><br>
			<label class="userRegAndLogIntext">Meeting date: </label><input type="date" name="date" size="30"  required/><br><br>
			<label class="userRegAndLogIntext">Meeting time: </label><input type="time" name="time" size="30"  required/><br><br><br>
			<input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "Confirm">
		</form>







	</body>