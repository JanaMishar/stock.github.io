<?php

	session_start();

	if(!isset($_SESSION['name'])){
		header('location:../../stock/html/login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>User <?php echo $_SESSION['name']; ?></h1>

<a href="../../stock/php/logout.php">Logout</a>

<br>
<br>

<a href="../../stock/html/viewstocks.php">View Stock</a>

<br>
<br>
<br>
<br>

<div style="text-align: center; margin-left: 200px;">
	<table border="2">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>USER TYPE</td>
			<td>PASSWORD</td>
			
		</tr>

		<?php
			include '../../stock/php/connection.php';

			$query="select * from stocktbl where utype='user'";
			$processquery=mysqli_query($con,$query);

			while($result=mysqli_fetch_assoc($processquery)){


			

		?>

		<tr>
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['name']; ?></td>
					<td><?php echo $result['email']; ?></td>
					<td><?php echo $result['utype']; ?></td>
					<td><?php echo $result['password']; ?></td>
					
				</tr>
				<?php

					}
				?>
			</table>
</div>

</body>
</html>