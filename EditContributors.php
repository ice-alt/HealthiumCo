<?php




		require("IndividualDatabaseConn.php");

		
			$id = $_GET['id'];



			$query = "SELECT * FROM `booking` WHERE id = '".$id."'";
			// echo $query1;
			// return;


			//mysqli_query($conn, $query1);

			$result = mysqli_query($conn, $query);

			$row = mysqli_fetch_array($result);

			if(isset($_POST['submit'])){

			$Fname = $_POST['fname'];
			$Lname = $_POST['lname'];
			$Email = $_POST['email'];
			$ContributorName = $_GET['id'];
			$Date = $_POST['date'];
			$Time = $_POST['time'];

			$query1 = "UPDATE `booking` SET `fname`='$Fname',`lname`='$Lname',`email`='$Email',`contributor_name`='$ContributorName',`meeting_date`='$Date',`meeting_time`='$Time' WHERE fname= '".$Fname."'";

			//echo $query1;
			//return;

		//Execution of query
			$result1 = mysqli_query($conn, $query1);


			if($result1)
    	{

        //echo "<script>alert('Update successful!')</script>";
        header("location:Schedules.php");
        
    }
    else
    {
        echo "<script>alert('Update unsuccessful!')</script>";
    }    	





		
	}




			//header("location: Schedules.php");



		

		













?>






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
			<li ><a href="IndividualHomepg.php">Home</a></li>
			<li ><a href="IndividualContributors.php">Contributors</a></li>
			<li ><a href="IndividualFeedback.php">Feedback</a></li>
			<li ><a href="Schedules.php">Schedules</a></li>
		</ul>

<br><br><br><br>


<p class="descriptiontext2">Please fill in the following details:</p><br><br>


	<form action="" method="post">
			<label class="userRegAndLogIntext">First name: </label><input type="text" name="fname" size="60" placeholder="First name"  required/><br><br>
			<label class="userRegAndLogIntext">Last name:  </label><input type="text" name="lname" size="60" placeholder="Last name" required/><br><br>
			<label class="userRegAndLogIntext">Email:  </label><input type="email" name="email" size="60" placeholder="Email"  required/><br><br>
			<label class="userRegAndLogIntext">Name of Contributor:  </label><?php echo $_GET['id']?><br><br>
			<label class="userRegAndLogIntext">Meeting date: </label><input type="date" name="date" size="30"  required/><br><br>
			<label class="userRegAndLogIntext">Meeting time: </label><input type="time" name="time" size="30"  required/><br><br><br>
			<input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "Confirm">
		</form>





	</body>