<?php
	include 'config.php';
	if(isset($_GET["tender_id"])){
		$sql="UPDATE tender SET off_id = ".$_POST["off_id"]." WHERE tender_id = ".$_GET["tender_id"]."";
		if(!mysqli_query($con,$sql)){
			die ('Error: ' .mysqli_error($con));
		}
		else {
			echo "<script type='text/javascript'>alert('Officer has been assigned to the tender!')</script>";
			header('refresh:5;url=admintets.php');
		}
	}
?>