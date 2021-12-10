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

		
		<br><br><br><br>
		<p class="appointmentconfirmed">Thank you for your contribution!</p>

		<form action="" method="post">
			<input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "OK">
		</form>




	<?php



		if(isset($_POST["submit"])){
			header("location: admin_homepage.php");
		}





	?>
		</body>