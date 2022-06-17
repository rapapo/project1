<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'project2';
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn -> error){
		die ("Connection failed: " . $conn -> connection_error);
  } 
?>

	