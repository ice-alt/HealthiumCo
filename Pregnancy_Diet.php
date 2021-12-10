<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>HealthiumCo</title>
	<link href="mystyle2.css" rel="stylesheet" type="text/css">
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

		<br><br><br>

		<p class="descriptiontext">Try out these recommended diets to improve your Pregnancy</p>

		<br><br>

		<!--Table-->
		<table border="2" id="contributors">
  			<tr>
    			<th>Contributors</th>
    			<th>Diets</th>
  			</tr>


	<?php

		//Connecting to the database
		require("IndividualDatabaseConn.php");

		//Query to retrieve data from the database
		$query = "SELECT contributors.name, health.Pregnancy FROM health LEFT JOIN contributors ON health.contributor_id = contributors.id  WHERE health.healthid = 'HD'";

		
		//Execution of query
		$result = mysqli_query($conn, $query);
			
			
		//Fetching infomation from the database in a tabular form
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){

	?>
		
		<!--Table-->
		<table id="contributors">
			<tr>
    			<td><a href="IndividualContributors.php" style="text-decoration: none;"><?php echo $row['name']; ?></a></td>
    			<td><?php echo $row['Pregnancy']; ?></td>
  			</tr>	
	<?php

				}


			}

		else {
					echo "<br>";
			}
	?>

		</table>



	</body>