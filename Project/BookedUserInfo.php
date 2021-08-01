<?php
	include 'controllers/mng_control.php';
	$booking = getallBooking(); 
	
?>
<html>
	<body>
	<h1 align="center">User Booking</h1>
	<a target="" href="Manager.php">Manager Home</a>
	<table align="center" border="1">
		<tr>
			<td align="center">Serial</td>
			<td align="center">User Name</td>
			<td align="center">User Email</td>
			<td align="center">User Phone Number</td>
			<td align="center">User Bus Selection</td>
			<td align="center">Departure From</td>
			<td align="center">Departure Time</td>
			<td align="center">Arrival To</td>
			<td align="center">Arrival Time</td>
			<td align="center">Booking Status</td>
			<td align="center">Confirmation</td>
		</tr>
		<tbody>
				<?php
				$i=1;
					foreach($booking as $c)
					{
						echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$c["Name"]."</td>";
							echo "<td>".$c["Email"]."</td>";
							echo "<td>".$c["Phone"]."</td>";
							echo "<td>".$c["Bus Name"]."</td>";
							echo "<td>".$c["From"]."</td>";
							echo "<td>".$c["From Time"]."</td>";
							echo "<td>".$c["To"]."</td>";
							echo "<td>".$c["To Time"]."</td>";
							echo "<td>".$c["Booking"]."</td>";
							echo '<td><a href="ConfirmedBookedUser.php?id='.$c['ID'].'">Confirm Booking</a></td>';
						echo "</tr>";
						$i++;
					}
				?>
			</tbody>
	
	</table>

	</body>
</html>