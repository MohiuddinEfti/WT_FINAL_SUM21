<?php
	include 'controllers/mng_control.php';
	$offer = getallOff(); 
	
?>
<html>
	<body>
	<h1 align="center">Offers</h1>
	<a target="" href="Manager.php">Manager Home</a>
	<table align="center" border="1">
		<tr>
			<td>ID</td>
			<td>Offer Name</td>
			<td>Offer Percentage</td>
			<td>Coupon Code</td>
			<td>Starting Date</td>
			<td>Ending Date</td>
			<td>Update Offer</td>
			<td>Delete Offer</td>
		</tr>
		<tbody>
				<?php
				$i=1;
					foreach($offer as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["Offer_Name"]."</td>";
							echo "<td>".$c["Offer_Percentage"]."</td>";
							echo "<td>".$c["Coupon_Code"]."</td>";
							echo "<td>".$c["Staring_Date"]."</td>";
							echo "<td>".$c["Ending_Date"]."</td>";
							echo '<td><a href="UpdateOffer.php?id='.$c['ID'].'">Update</a></td>';
							echo '<td><a href="DeleteOffer.php?id='.$c['ID'].'">Delete</a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
	
	</table>
	<p align="center"><a target="" href="AddOffer.php">Add New Offer</a></p>
	</body>
</html>