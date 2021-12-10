<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>HealthiumCo</title>
	<link href="mystyle.css" rel="stylesheet" type="text/css">
	<link href="mystyle2.css" rel="stylesheet" type="text/css">
	<style>
		<?php include("mystyle2.css"); ?>
	</style>

</head>

<body>

<!--Confirm Password Validation-->
	<script>
		function PasswordMatch(){
			var firstpass=document.f1.pwd.value;
			var secondpass=document.f1.pwd2.value;

			if(firstpass===secondpass){
				return true;
				}
			else{
				alert("Passwords must be the same!");
				return false;
		}

	}
	</script>


<!--Link to Admin Login page-->
	<ul>
		<li ><a href="admin_login.php">Log In As Admin</a></li>
	</ul>


	<br><br>


	<h1 class="HealthiumtextReg">HealthiumCo</h1>
	<h2 class="Registrationtext">Registration</h1>

<!--Registration form-->
	<form name="f1" action="" method="post" onsubmit="return PasswordMatch()">
		<label class="userRegAndLogIntext">First name: </label><input type="text" name="fname" size="60" placeholder="First name" required/><br><br>
		<label class="userRegAndLogIntext">Last name:  </label><input type="text" name="lname" size="60" placeholder="Last name" required/><br><br>
		<label class="userRegAndLogIntext">Email:  	   </label><input type="email" name="email" size="65" placeholder="Email" required/><br><br>
		<label class="userRegAndLogIntext">Username:  </label><input type="text" name="username" size="60" placeholder="Username" required/><br><br>
		<label class="userRegAndLogIntext">Password:   </label><input type="password" name="pwd" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" title="Must contain at least number, once uppercase letter, one lowercase letter, and at least 8 or more characters" placeholder="Password" required><br><br>
		<label class="userRegAndLogIntext">Confirm Password:   </label><input type="password" name="pwd2" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" title="Must contain at least number, once uppercase letter, one lowercase letter, and at least 8 or more characters" placeholder="Confirm Password" required><br><br>
		<input type="submit" name="submit" class="buttonRegister buttonRegister1" value="Register">


<!--Link to Login page-->
		<a href="IndividualUserLogin.php"><p class="logintext">Log In</p></a>

	</form>



	<?php

		//Connects to the database
		require ("IndividualDatabaseConn.php");
    

		//Button that triggers insertion of data
		if(isset($_POST["submit"])){

		$Fname = $_POST['fname'];
		$Lname = $_POST['lname'];
		$Email = $_POST['email'];
		$Username = $_POST['username'];
		$Password = md5($_POST['pwd']);


		//Query for inserting data
		$query = "INSERT INTO userregister (Fname,Lname,Email,Username,Password) VALUES('$Fname', '$Lname', '$Email', '$Username', '$Password')";


		//Execution of query
		mysqli_query($conn, $query);


		//Redirects to another page
		header("location: IndividualUserLogin.php");


		$conn->close();

		}


	?>

</body>
</html>