<?php 
	include "utilities.php";

	$id = $_GET['id'];

	reject($id);
	header("location:frontEnd.php");
 ?>
