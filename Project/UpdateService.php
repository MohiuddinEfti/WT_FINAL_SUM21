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
						<input type="text" name="service1" value="<?php echo $c["Service1"];?>" placeholder="Service"><span><?php echo $err_s1;?><br>
						<input type="text" name="service2" value="<?php echo $c["Service2"];?>" placeholder="Service"><span><?php echo $err_s2;?><br>
						<input type="text" name="service3" value="<?php echo $c["Service3"];?>" placeholder="Service"><span><?php echo $err_s3;?><br>
						
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="updateServices" value="Update Service">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>