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
			<li ><a href="admin_homepage.php">Home</a></li>
			<li ><a href="index2.php">Log In As User</a></li>
		</ul>

		<br><br><br><br>


		<p class="descriptiontext">Number of Health Contributors:</p>


		<!--Table-->
		<table id="contributors">
  			<tr>
    			<th>Exercise Experts</th>
    			<th>Diet Experts</th>
    			<th>Total</th>
   
  			</tr>


	<?php

		//Connecting to database
		require("IndividualDatabaseConn.php");

		//Query to retrieve data from the database
		$query = "SELECT (SELECT COUNT(`healthid`) FROM `health` WHERE `healthid` = 'HE') AS Exercise_Experts, (SELECT COUNT(`healthid`) FROM `health` WHERE `healthid` = 'HD') AS Diet_Experts, (SELECT COUNT(`healthid`) FROM `health`) AS Total";

		//Execution of query
		$result = mysqli_query($conn, $query);

		//Fetching infomation from the database in a tabular form
		if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){

				
	?>

		<!--Table-->
		<table id="contributors">
				<tr>
    				<td><?php echo $row['Exercise_Experts']; ?></td>
    				<td><?php echo $row['Diet_Experts']; ?></td>
    				<td><?php echo $row['Total']; ?></td>
  				</tr>	


  	<?php

  	}

	  }

	  

  		?>


</body>