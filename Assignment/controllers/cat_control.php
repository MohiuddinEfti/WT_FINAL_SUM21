<?php

	$cname="";
	$err_cname="";
	
	include 'controllers/control.php';
	if(isset($_POST["addcategory"]))
	{
		$rs=insertCategory($_POST["cname"]);
		if($rs === true)
		{
			header("Location: Allcateogories.php");
		}
		$db_err = $rs;
	}
	else if(isset($_POST["editcategory"]))
	{
		$rs = updatecat($_POST["name"],$_POST["id"]);
		
		if($rs === true)
		{
			header("Location: Allcateogories.php");
		}
		$db_err = $rs;
	}
	else if(isset($_POST["delete"]))
	{
		$rs = deletecat($_POST["id"]);
		
		if($rs === true)
		{
			header("Location: Allcateogories.php");
		}
		$db_err = $rs;
	}
	
	function insertCategory($name)
	{
		$query = "insert into category values (NULL,'$name')";
		 return execute($query);
	}
	
	function getallcat()
	{
		$query = "select * from category";
		$rs = get($query);
		return $rs;
	}
	function getCat($id)
	{
		$query= "select cname from category where id=$id";
		$rs = get($query);
	return $rs[0];
	}
	function updatecat($name,$id)
	{
		$query= "update category set cname='$name' where id=$id";
		return execute($query);
	}
	function deletecat($id)
	{
		$query= "DELETE FROM category WHERE id=$id";
		return execute($query);
	}
?>