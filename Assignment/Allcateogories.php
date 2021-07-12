<?php
	include 'controllers/cat_control.php';
	$categories = getallcat(); 
	
?>

<html>
	<body>
	<h1><?php echo $db_err;?></h1>
		<form action="" method="POST">
			<table align="center">
			<tr align="center" >
				<td colspan="2">
					All Category
				</td>
			</tr>
			<tbody>
				<?php
				$i=1;
					foreach($categories as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["cname"]."</td>";
							echo '<td><a href="Edit_cateogories.php?id='.$c['id'].'">Edit</a></td>';
							echo '<td><a href="Delete_cateogories.php?id='.$c['id'].'">Delete</a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
			</table>
		</form>
	</body>
</html>