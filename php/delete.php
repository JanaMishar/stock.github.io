<?php
	include 'connection.php';
	$id=$_GET['idd'];
	$query="delete from stocktbl where id='$id'";
	$processquery=mysqli_query($con,$query);
	if($processquery){
		header('location:../../stock/html/admin.php');
	}

?>