<?php

   // Database configuration    
   $hostname = "localhost"; 
   $username = "root"; 
   $password = ""; 
   $dbname   = "project2";
   $sqlport = "3307";
    
   // Create database connection 
   $con= new mysqli($hostname, $username, $password, $dbname, $sqlport); 
    
   // Check connection 
   if ($con->connect_error) { 
       die("Connection failed: " . $con->connect_error); 
   }

?>