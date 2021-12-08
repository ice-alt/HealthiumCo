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
		<br><br><br><br>
		<p class="appointmentconfirmed">Appointment confirmed!</p>

		<form action="" method="post">
			<input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "Go to Schedules">
		</form>




	<?php



		if(isset($_POST["submit"])){
			header("location: Schedules.php");
		}





	?>

		</body>