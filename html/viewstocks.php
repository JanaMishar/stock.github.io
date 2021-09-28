<div style="text-align: center;">
	<h1>Stock Details</h1>
<table border="2">
		<tr>
			<td>ID</td>
			<td>Date</td>
			<td>X axis</td>
			<td>Y Axis</td>
			
		</tr>

		<?php
			include '../../stock/php/connection.php';

			$query="select * from stock";
			$processquery=mysqli_query($con,$query);

			while($result=mysqli_fetch_assoc($processquery)){


			

		?>

		<tr>
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['date']; ?></td>
					<td><?php echo $result['xaxis']; ?></td>
					<td><?php echo $result['yaxis']; ?></td>
					
				</tr>
				<?php

					}
				?>
			</table>
</div>