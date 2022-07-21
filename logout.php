<?php 
session_start();


if (isset($_SESSION['officer'])) {
	unset($_SESSION['officer']);
	header("Location:index.php");
}else if(isset($_SESSION['supplier'])){
	unset($_SESSION['supplier']);
	header("Location:index.php");
}else if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
	header("Location:index.php");
}



 ?>