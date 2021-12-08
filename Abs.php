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


		


			<table border="2">
  		<tr>
    		<th>Contributors</th>
    		<th>Exercises</th>
   
  		</tr>


<?php

			//Connecting to the database
			require("IndividualDatabaseConn.php");

			//Query to retrieve data from the database
			$query = "SELECT contributors.name, keepfit.abs FROM keepfit LEFT JOIN contributors ON keepfit.contributorid = contributors.id  WHERE keepfit.keepfitid = 'KFE'";

		
			//Execution of query
			$result = mysqli_query($conn, $query);
			
			
			
			//Fetching infomation from the database in a tabular form
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
?>
		<table>
				<tr>
    				<td><?php echo $row['name']; ?></td>
    				<td><?php echo $row['abs']; ?></td>
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