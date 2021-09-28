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
	<link rel="stylesheet" type="text/css" href="../../stock/html/style1.css">
</head>
<body>
	<h1>Admin <?php echo $_SESSION['name']; ?></h1>

<a href="../../stock/php/logout.php">Logout</a>

<br>
<br>
<br>
<br>

<a href="../../stock/html/addstock.php">Add Stock</a>

<br>
<br>
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
			<td>Action</td>
		</tr>

		<?php
			include '../../stock/php/connection.php';

			$query="select * from stocktbl";
			$processquery=mysqli_query($con,$query);

			while($result=mysqli_fetch_assoc($processquery)){


			

		?>

		<tr>
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['name']; ?></td>
					<td><?php echo $result['email']; ?></td>
					<td><?php echo $result['utype']; ?></td>
					<td><?php echo $result['password']; ?></td>
					<td>
						<a href="../../stock/html/edit.php?idu=<?php echo $result['id']; ?>">Update</a>
						<a href="../../stock/php/delete.php?idd=<?php echo $result['id']; ?>">Delete</a>
					</td>
				</tr>
				<?php

					}
				?>
			</table>
</div>
		
</body>
</html>