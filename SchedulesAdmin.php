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

		<br><br>
		

	<p class="letshelpyoutext">Schedules</p>
	
		<table id="contributors">
  		<tr>
    		<th>Name</th>
    		<th>Contributor</th>
    		<th>Date</th>
    		<th>Time</th>
   
   
  		</tr>



  	<?php

			//Connecting to the database
			require("IndividualDatabaseConn.php");

			//Query to retrieve data from the database
			$query = "SELECT * FROM  booking";

		
			//Execution of query
			$result = mysqli_query($conn, $query);
			
			
			
			//Fetching infomation from the database in a tabular form
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
?>
		<table id="contributors">
				<tr>
    				<td><?php echo $row['fname']. ' ' . $row['lname']; ?></td>
    				<td><?php echo $row['contributor_name']; ?></td>
    				<td><?php echo $row['meeting_date']; ?></td>
    				<td><?php echo $row['meeting_time']; ?></td>
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