<?php
include 'config2.php';
$sql="insert into tender (veh_type,veh_segment,veh_date) values ('$_POST[veh_type]','$_POST[veh_segment]','$_POST[veh_date]')";
if(!mysqli_query($conn,$sql)){
		die ('Error: ' .mysqli_error());
	}
	else {
echo "<script type='text/jscript'>alert('Tender has been submitted!')</script>";
header ('refresh: 1; url= tenderform2.php');
	}

?>