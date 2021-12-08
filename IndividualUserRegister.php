
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HealthiumCo</title>
  <link href="mystyle.css" rel="stylesheet" type="text/css">




</head>


<body> -->

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









<!-- </body>
</html> -->