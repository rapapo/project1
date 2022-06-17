<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'procurement_system';
 
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn -> error){
		die ("Connection failed: " . $conn -> connection_error);
  } 
?>

	