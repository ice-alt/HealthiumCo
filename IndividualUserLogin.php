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

			<!--Login form-->
			<form name="f2" method="post">
				<label class="userRegAndLogIntext">Username:  </label><input type="text" name="username" size="60" placeholder="Username" required/><br><br>
				<label class="userRegAndLogIntext">Password:   </label><input type="password" name="pwd" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" title="Must contain at least number, once uppercase letter, one lowercase letter, and at least 8 or more characters" placeholder="Password" required><br><br>	
				<input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "Log In">
			</form>





<?php

	//Connects to the database
	require ("IndividualDatabaseConn.php");

	//Button that triggers insertion of data
   if(isset($_POST["submit"])){

   		$username = $_POST['username'];
   		$password = md5($_POST['pwd']);

   		//Query for counting and comparing data
   		$query = "SELECT COUNT(*)  AS total  FROM userregister WHERE Username = '".$username."' and Password = '".$password."'";


   		//Execution of query
   		$result = mysqli_query($conn, $query);

   		//Retrieving data
   		$rw = mysqli_fetch_array($result);


   		//Check for username and password
   		if($rw['total'] > 0){
   			header("location: IndividualHomepg.php");

   		}

   		else{
   			echo "<script>alert('username or password is incorrect')</script>";
   		}




		$conn->close();


   }



		?>






	</body>
</html>