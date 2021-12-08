<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HealthiumCo</title>
	<link href="mystyle.css" rel="stylesheet" type="text/css">
	<style>
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

			<form name="f2" method="post" >
				<label class="userRegAndLogIntext">Username:  </label><input type="text" name="username" size="60" placeholder="Username" required/><br><br>
				<label class="userRegAndLogIntext">Password:   </label><input type="password" name="pwd" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" title="Must contain at least number, once uppercase letter, one lowercase letter, and at least 8 or more characters" placeholder="Password" required><br><br>
			
				<input type="submit" name="submit" class="buttonRegister buttonRegister1" value= "Log In">

			

			</form>



<?php



require ("IndividualDatabaseConn.php");


   if(isset($_POST["submit"])){

   		$username = $_POST['username'];
   		//$password = password_verify($_POST['pwd'], hash);
   		$password = md5($_POST['pwd']);


   		$query = "SELECT COUNT(*)  AS total  FROM userregister WHERE Username = '".$username."' and Password = '".$password."'";


   		$result = mysqli_query($conn, $query);

   		$rw = mysqli_fetch_array($result);

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