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
						<input type="text" name="offername" value="<?php echo $OffName;?>" placeholder="Offer Name"><span><?php echo $err_OffName;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="percentage" value="<?php echo $OffPercen;?>" placeholder="Percentage"><span><?php echo $err_OffPercen;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="coupon" value="<?php echo $CoCode;?>" placeholder="Coupon"><span><?php echo $err_CoCode;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="date" name="sdate" value="<?php echo $SDate;?>" placeholder="Starting Date"><span><?php echo $err_SDate;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="date" name="edate" value="<?php echo $EDate;?>" placeholder="Ending Date"><span><?php echo $err_EDate;?></span>
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="submit" name="addOffer" value="Add New Offer">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>