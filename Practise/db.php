<?php
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="final-21";
	
	$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
	
	if($conn){
		
			echo "Database Connected"."<br><br>";
		
	}
	else {
		echo "not connected";
	}
?>