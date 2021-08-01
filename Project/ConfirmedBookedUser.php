<?php
	include 'controllers/mng_control.php';
	$id = $_GET["id"];
	$c = getBook($id);
	
?>

<html>
	<body>
	<h1><?php echo $db_err;?></h1>
		<a target="" href="Manager.php">Manager Home</a>
		<h1 align="center">Ticket Confirmation</h1>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
					<input type="hidden" value="<?php echo $id?>" name="id">	
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="confirms" value="Confirm Booking">
						<input type="submit" name="pending" value="Pending">
						<input type="submit" name="noconfirm" value="Confirmation Cancel">
						
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>