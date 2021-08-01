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
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="offername" value="<?php echo $c["Offer_Name"];?>" placeholder="Offer Name"><span><?php echo $err_OffName;?></span>
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="text" name="percentage" value="<?php echo $c["Offer_Percentage"];?>" placeholder="Percentage"><span><?php echo $err_OffPercen;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="coupon" value="<?php echo $c["Coupon_Code"];?>" placeholder="Coupon"><span><?php echo $err_CoCode;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="date" name="sdate" value="<?php echo $c["Staring_Date"];?>" placeholder="Starting Date"><span><?php echo $err_SDate;?></span>
					</td>
				</tr>
				<tr>
					<td>
						<input type="date" name="edate" value="<?php echo $c["Ending_Date"];?>" placeholder="Ending Date"><span><?php echo $err_EDate;?></span>
					</td>
				</tr>
				
				<tr>
					<td align="center">
						<input type="submit" name="updateOffer" value="Update Offer">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>