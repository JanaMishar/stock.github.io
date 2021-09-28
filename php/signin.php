<?php
	session_start();
	include 'connection.php';

	if(isset($_POST['submit'])){

		$email=$_POST['email'];
		$password=$_POST['password'];

		$query="select * from stocktbl where email ='$email'";

		$processquery=mysqli_query($con,$query);

		$fetchdata=mysqli_fetch_assoc($processquery);

		$dbpass=$fetchdata['password'];

		$utype=$fetchdata['utype'];

		$name=$fetchdata['name'];



		$_SESSION['name']=$name;

		$checkpass=password_verify($password,$dbpass);

		if($checkpass && $utype=='admin'){
			header('location:../../stock/html/admin.php');

		}elseif($checkpass && $utype=='user'){
			header('location:../../stock/html/user.php');
		}else{
			header('location:../../stock/index.php');
			echo 'user not registered';
		}


	}


?>