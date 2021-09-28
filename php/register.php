<?php

	include '../../stock/php/connection.php';

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$utype=$_POST['utype'];
		$password=$_POST['password'];
		

		$selectquery="select * from stocktbl where email='$email'";

		$processselectquery=mysqli_query($con,$selectquery);

		$countmail=mysqli_num_rows($processselectquery);

		$hashpass=password_hash($password,PASSWORD_BCRYPT);

		if($countmail>0){

			echo 'mail already registered';
		}else{

		$query="insert into stocktbl(name,email,utype,password) values('$name','$email','$utype','$hashpass')";
		$processquery=mysqli_query($con,$query);

		if($processquery){
			header('location:../../stock/index.php');
		}
	}
}

?>