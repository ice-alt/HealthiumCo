<?php


     define("servername", "localhost");
     define("username", "root");
     define("password", "");
     define("database", "healthiumco");




  $conn = new mysqli(servername, username, password, database);




    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);

  
   }
   //else{
    //echo "Connected successfully";

//}
    
?>