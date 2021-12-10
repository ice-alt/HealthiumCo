<?php



	require("IndividualDatabaseConn.php");

		
	//$id = $_GET['id'];

	//$query = "SELECT id FROM  contributors WHERE id = '".$id."'";

	//$result = mysqli_query($conn, $query);

	//$row = mysqli_fetch_array($result);

	//echo $row;
	//return;



	if(isset($_POST["submit"])){
		$department = $_POST['department'];
		$pid = $_POST['pid'];
   		$abs = $_POST['abs'];
		$chest = $_POST['chest'];
		$biceps = $_POST['biceps'];
		$calves = $_POST['calves'];
		$glutes = $_POST['glutes'];
		$allround = $_POST['allround'];

		$query = "INSERT INTO `keepfit`(`keepfitid`, `contributorid`, `abs`, `chest`, `biceps`, `calves`, `glutes`, `all_round`) VALUES ('$department','$pid','$abs','$chest','$biceps','$calves','$glutes','$allround')";




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

	<p class="descriptiontext2">Note: exercise information goes with the department ID, 'KFE' and diet information goes with the department ID, 'KFD'</p><br><br>

	<!-- <form method="post">
		<label class="userRegAndLogIntext">Assigned Personal ID: </label><?php echo $row['id']?><br><br>
	</form> -->
	

	

		<form name="f2" method="post">
			<label class="userRegAndLogIntext">Department ID: </label>
			<select name="department">
				<option value="KFE">KFE</option>
				<option value="KFD">KFD</option>
			</select>
			<br><br>
			<label class="userRegAndLogIntext">Personal ID:  </label><input type="text" name="pid" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for Abs:   </label><input type="text" name="abs" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for Chest:   </label><input type="text" name="chest" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for Biceps:   </label><input type="text" name="biceps" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for Calves:   </label><input type="text" name="calves" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for Glutes:   </label><input type="text" name="glutes" size="60" required/><br><br>
			<label class="userRegAndLogIntext">Exercise or Diet for All-round workout:   </label><input type="text" name="allround" size="60" required/><br><br>
			
			<input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "Submit">

		</form>
	</body>