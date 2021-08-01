<?php
	include 'controllers/control.php';
	include 'controllers/cat_control.php';
	$key = $_GET["key"];
	$products = search($key);
	
	if(count($products)>0)
	{
		foreach($products as $p)
		{
			echo "<p>".$p["cname"]."</p>";
			
		}
		
	}




?>