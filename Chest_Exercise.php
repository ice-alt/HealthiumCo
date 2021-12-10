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


		<ul>
			<li ><a href="IndividualHomepg.php">Home</a></li>
			<li ><a href="IndividualContributors.php">Contributors</a></li>
			<li ><a href="IndividualFeedback.php">Feedback</a></li>
			<li ><a href="Schedules.php">Schedules</a></li>
		</ul>

		<br><br><br>

		<p class="descriptiontext">Try out these recommended exercises to get the Chest of your dreams!</p>

		<br><br>

			<table border="2" id="contributors">
  		<tr>
    		<th>Contributors</th>
    		<th>Exercises</th>
   
  		</tr>


  		<?php

			//Connecting to the database
			require("IndividualDatabaseConn.php");

			//Query to retrieve data from the database
			$query = "SELECT contributors.name, keepfit.chest FROM keepfit LEFT JOIN contributors ON keepfit.contributorid = contributors.id  WHERE keepfit.keepfitid = 'KFE'";

		
			//Execution of query
			$result = mysqli_query($conn, $query);
			
			
			
			//Fetching infomation from the database in a tabular form
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
?>
		<table id="contributors">
				<tr>
    				<td><a href="IndividualContributors.php" style="text-decoration: none;"><?php echo $row['name']; ?></a></td>
    				<td><?php echo $row['chest']; ?></td>
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