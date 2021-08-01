<?php
	include 'controllers/mng_control.php';
	$id = $_GET["id"];
	$c = getMng($id);
	
?>

<html>
	<body>
	<h1><?php echo $db_err;?></h1>
		<a target="" href="Manager.php">Manager Home</a>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">
					<p>Do you want to Delete this Services?</p>
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="delete" value="Delete">
						<input type="submit" name="no" value="No">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>