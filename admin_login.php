<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>HealthiumCo</title>
	<link href="mystyle.css" rel="stylesheet" type="text/css">
	<style>

	/*Style for text box*/
	input[type=text] {
  		width: 40%;
  		padding: 12px 20px;
  		margin: 8px 0;
  		box-sizing: border-box;
}

	input[type=password] {
  		width: 40%;
  		padding: 12px 20px;
  		margin: 8px 0;
  		box-sizing: border-box;
}
</style>


</head>

	<body>

		
		


		
		
		<h1 class="HealthiumtextReg">HealthiumCo</h1>
		<h2 class="Registrationtext">Log In</h1>

			<!--Login Form-->
			<form name="f2" method="post">
				<label class="userRegAndLogIntext">Username:  </label><input type="text" name="username" size="60" placeholder="Username" required/><br><br>
				<label class="userRegAndLogIntext">Password:   </label><input type="password" name="pwd" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" title="Must contain at least number, once uppercase letter, one lowercase letter, and at least 8 or more characters" placeholder="Password" required><br><br>
			
				<input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "Log In">

			

			</form>



<?php


//Connecting to the database
require ("IndividualDatabaseConn.php");

	//Button that triggers query
   if(isset($_POST["submit"])){

   		$username = $_POST['username'];
   		$password = $_POST['pwd'];


   		//Query to count and compare data
   		$query = "SELECT COUNT(*) AS total FROM `admin_details` WHERE `username` = '".$username."' and `password` = '".$password."'";


   		//Executing query
   		$result = mysqli_query($conn, $query);

   		//Retrieving dara
   		$rw = mysqli_fetch_array($result);

   		//Checking username and password
   		if($rw['total'] > 0){
   			header("location: admin_homepage.php");

   		}

   		else{
   			echo "<script>alert('username or password is incorrect')</script>";
   		}




$conn->close();


   }



		?>






	</body>
</html>