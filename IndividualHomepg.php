<?php

					 if(isset($_POST["submit"])){
					 		header("location: IndividualKeepFit.php");
					 }


					 elseif (isset($_POST["submit1"])) {
					 		header("location: IndividualHealth.php");
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
	<!--<header>-->
		<!--<nav>
			<center>-->
				<ul>
					<li ><a href="IndividualHomepg.php">Home</a></li>
					<li ><a href="IndividualContributors.php">Contributors</a></li>
					<li ><a href="IndividualFeedback.php">Feedback</a></li>
					<li ><a href="Schedules.php">Schedules</a></li>
				</ul>


			<!--</header>-->


<br><br>



<h2 class="titletext">HealthiumCo</h2>
<p class="welcometext">Hello! Please choose which applies to you so we can tailor to your needs.</p>

<form action="" method="post">
	<input type="submit" name="submit" class="buttonChoice buttonChoice1" value= "I want to keep fit">


	<input type="submit" name="submit1" class="buttonChoice buttonChoice1" value= "I have health issues">
</form>
			


			







</body>
</html>