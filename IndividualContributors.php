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

<br><br><br><br>


		<p class="descriptiontext">Book a session with professionals in the health and fitness field today!</p>
<br><br>

		<table id="contributors">
  		<tr>
    		<th>Name</th>
    		<th>Profession</th>
    		<th>Email</th>
    		<th>Action</th>
   
   
  		</tr>


<?php

			//Connecting to the database
			require("IndividualDatabaseConn.php");

			//Query to retrieve data from the database
			$query = "SELECT name, profession, email FROM  contributors";

		
			//Execution of query
			$result = mysqli_query($conn, $query);
			
			
			
			//Fetching infomation from the database in a tabular form
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
?>
		<table id="contributors">
				<tr>
    				<td><?php echo $row['name']; ?></td>
    				<td><?php echo $row['profession']; ?></td>
    				<td><?php echo $row['email']; ?></td>
    				<td><a href="BookContributors.php?id=<?php echo $row['name']; ?>">Book</a></td>
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