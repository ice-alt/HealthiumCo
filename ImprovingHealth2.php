<?php



	require("IndividualDatabaseConn.php");


	if(isset($_POST["submit"])){
		$department = $_POST['department'];
		$pid = $_POST['pid'];
   		$diabetes = $_POST['diabets'];
		$arthritis = $_POST['arthritis'];
		$pregnancy = $_POST['pregnancy'];
		$cancer = $_POST['cancer'];
		
		$query = "INSERT INTO `health`(`healthid`, `contributorid`, `Diabetes`, `Arthritis`, `Pregnancy`, `Cancer`) VALUES ('$department','$pid','$diabetes','$arthritis','$pregnancy','$cancer')";




		mysqli_query($conn, $query);

		header("location: ThankYou.php");


		$conn->close();
	}


?>












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
			<li ><a href="admin_homepage.php">Home</a></li>
			<li ><a href="index2.php">Log In As User</a></li>
		</ul>

		<br><br><br>

	<p class="descriptiontext2">Note: exercise information goes with the department ID, 'HE' and diet information goes with the department ID, 'HD'</p><br><br>


	<form name="f2" method="post">
			<label class="userRegAndLogIntext">Department ID: </label>
			<select name="department">
				<option value="HE">HE</option>
				<option value="HD">HD</option>
			</select>
			<br><br>
			<label class="userRegAndLogIntext">Personal ID:  </label><input type="text" name="pid" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for Diabetes:   </label><input type="text" name="diabetes" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for Arthritis:   </label><input type="text" name="arthritis" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for Pregnancy:   </label><input type="text" name="pregnancy" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for Cancer:   </label><input type="text" name="cancer" size="60" required/><br><br>
			<input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "Submit">

		</form>
	</body>
