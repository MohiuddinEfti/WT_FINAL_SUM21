<?php
	include 'controllers/mng_control.php';
	$id = $_GET["id"];
	$c = getOff($id);
	
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
					<p>Do you want to Delete this Offer?</p>
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="deleteoff" value="Delete">
						<input type="submit" name="nooff" value="No">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>