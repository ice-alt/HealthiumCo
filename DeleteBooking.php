<?php



    //Connecting to database
	require("IndividualDatabaseConn.php");


	$id = $_GET['id']; // get id through query string

	$del = mysqli_query($conn,"DELETE FROM booking where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:Schedules.php"); // redirects to another page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}













?>