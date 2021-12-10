




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HealthiumCo</title>
	<link href="mystyle2.css" rel="stylesheet" type="text/css">
	<link href="mystyle.css" rel="stylesheet" type="text/css">
	<style>
		<?php include("mystyle2.css"); ?>
		<?php include("mystyle.css"); ?>
	</style>
</head>





	<body>

		<?php
	//Start session
	//session_start();

	//Set session
	//if(isset($_POST["submit"])){
	//	$_SESSION['Name'] = $_POST["name"];
	//	$_SESSION['Profession'] = $_POST["profession"];
	//	$_SESSION['Email'] = $_POST["email"];
//}	
	
?>

		<ul>
			<li ><a href="admin_homepage.php">Home</a></li>
			<li ><a href="index2.php">Log In As User</a></li>
		</ul>

		<br><br><br><br>

		<p class="descriptiontext2">Please fill in the following details:</p><br><br>






		<form name="f2" method="post">




			<label class="userRegAndLogIntext">Name:  </label><input type="text" name="name" size="60" placeholder="Name" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : '';?>" required/><br><br>
			<label class="userRegAndLogIntext">Profession:   </label><input type="text" name="profession" size="60" placeholder="Profession" value="<?php echo (isset($_POST['profession'])) ? $_POST['profession'] : '';?>" required/><br><br>
			<label class="userRegAndLogIntext">Email:   </label><input type="email" name="email" size="60" placeholder="Email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : '';?>"required/><br><br>
			<input type="submit" name="submit" class="buttongetId buttongetId1" value= "Get Personal Id">

			<?php

		require ("IndividualDatabaseConn.php");

		if(isset($_POST["submit"])){

			$Name = $_POST['name'];
   			$Profession = $_POST['profession'];
			$Email = $_POST['email'];


			$query = "INSERT INTO `contributors`(`name`, `profession`, `email`) VALUES ('$Name','$Profession','$Email')";

			mysqli_query($conn, $query);


			$query1 = "SELECT `id` FROM `contributors` WHERE `name` = '".$Name."'";

			$result = mysqli_query($conn, $query1);

			//$row = mysqli_fetch_array($result);

			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo $row['id'];
				}
			//header("location: KeepingFit2.php");


			//$conn->close();
	
		}

	}


	?>
			
			<!-- <input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "Next"> -->

			

		</form>
		<br>


		<a href="KeepingFit2.php" class="next">Next</a>




	</body>