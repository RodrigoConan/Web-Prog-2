<?php 
	include "utilities.php";
	$id = $_GET['id'];

	approve($id);
	header("location:frontEnd.php");
 ?>
