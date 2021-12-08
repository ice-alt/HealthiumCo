<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HealthiumCo</title>
	<link href="mystyle.css" rel="stylesheet" type="text/css">


</head>

<body>

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

	<h1 class="HealthiumtextReg">HealthiumCo</h1>
	<h2 class="Registrationtext">Registration</h1>

	<form name="f1" action="" method="post" onsubmit="return PasswordMatch()">
		<label class="userRegAndLogIntext">First name: </label><input type="text" name="fname" size="60" placeholder="First name" required/><br><br>
		<label class="userRegAndLogIntext">Last name:  </label><input type="text" name="lname" size="60" placeholder="Last name" required/><br><br>
		<label class="userRegAndLogIntext">Email:  	   </label><input type="email" name="email" size="65" placeholder="Email" required/><br><br>
		<label class="userRegAndLogIntext">Username:  </label><input type="text" name="username" size="60" placeholder="Username" required/><br><br>
		<label class="userRegAndLogIntext">Password:   </label><input type="password" name="pwd" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" title="Must contain at least number, once uppercase letter, one lowercase letter, and at least 8 or more characters" placeholder="Password" required><br><br>
		<label class="userRegAndLogIntext">Confirm Password:   </label><input type="password" name="pwd2" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" title="Must contain at least number, once uppercase letter, one lowercase letter, and at least 8 or more characters" placeholder="Confirm Password" required><br><br>
		<input type="submit" name="submit" class="buttonRegister buttonRegister1" value="Register">


		<a href="IndividualUserLogin.php"><p class="logintext">Log In</p></a>

	</form>



	<?php

require ("IndividualDatabaseConn.php");
    

//Inserting data

if(isset($_POST["submit"])){

$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Email = $_POST['email'];
$Username = $_POST['username'];
//$Password = password_hash($_POST['pwd'], PASSWORD_DEFAULT) ;
$Password = md5($_POST['pwd']);



$query = "INSERT INTO userregister (Fname,Lname,Email,Username,Password) VALUES('$Fname', '$Lname', '$Email', '$Username', '$Password')";



mysqli_query($conn, $query);

header("location: IndividualUserLogin.php");


$conn->close();

}


?>

</body>
</html>