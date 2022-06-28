<?php
include 'config.php';
$sql="insert into proposal (pro_price, pro_date, veh_colour,veh_engine,pro_brand,veh_condition,supp_name,supp_num,supp_email, subject,supp_state) values 
('$_POST[pro_price]','$_POST[pro_date]','$_POST[veh_colour]','$_POST[veh_engine]','$_POST[pro_brand]','$_POST[veh_condition]','$_POST[supp_name]','$_POST[supp_num]','$_POST[supp_email]','$_POST[subject]','$_POST[supp_state]')";
if(!mysqli_query($con,$sql)){
		die ('Error: ' .mysqli_error($con));
	}
	else {
echo "<script type='text/jscript'>alert('Proposal has been submitted!')</script>";
header('refresh:0 url=proposalfinal.php');
	}

?>