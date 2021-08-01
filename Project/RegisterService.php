<?php
	include 'controllers/mng_control.php';
	$manager = getallMng(); 
	
?>
<html>
	<body>
	<h1 align="center">Register Service</h1>
	<a target="" href="Manager.php">Manager Home</a>
	<table align="center" border="1">
		
		<tbody>
				<?php
				$i=1;
					foreach($manager as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["Service1"]."</td>";
							echo "<td>".$c["Service2"]."</td>";
							echo "<td>".$c["Service3"]."</td>";
							echo "<td>".$c["Request"]."</td>";
							echo '<td><a href="UpdateService.php?id='.$c['ID'].'">Update</a></td>';
							echo '<td><a href="DeleteService.php?id='.$c['ID'].'">Delete</a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
	
	</table>
	<p align="center"><a target="" href="AddService.php">Register Service</a></p>
	</body>
</html>