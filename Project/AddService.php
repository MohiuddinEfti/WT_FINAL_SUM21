<?php
session_start();
	include 'controllers/mng_control.php';
	
?>

<html>
	<body>
	<h1>Welcome <?php echo $_SESSION["loggeduser"];?></h1>
		<a target="" href="Manager.php">Manager Home</a>
	<h1><?php echo $db_err;?></h1>
		<form action="" method="POST">
			<table align="center">
				<tr>
					<td>
						<input type="text" name="service1" value="<?php echo $s1;?>" placeholder="Service"><span><?php echo $err_s1;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="service2" value="<?php echo $s2;?>" placeholder="Service"><span><?php echo $err_s2;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="service3" value="<?php echo $s3;?>" placeholder="Service"><span><?php echo $err_s3;?></span>
					</td>
				</tr>
				
				<tr>
					<td align="center">
						<input type="submit" name="addService" value="Register Services">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>