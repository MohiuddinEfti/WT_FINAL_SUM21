<?php
	$s1="";
	$err_s1="";
	$s2="";
	$err_s2="";
	$s3="";
	$err_s3="";
	$OffName="";
	$err_OffName="";
	$OffPercen="";
	$err_OffPercen="";
	$CoCode="";
	$err_CoCode="";
	$SDate="";
	$err_SDate="";
	$EDate="";
	$err_EDate="";

	$error=true;
	include 'controllers/control.php';
	if(isset($_POST["addService"]))
	{
		
		if(empty($_POST["service1"]))
		{
			$err_s1="Service Required";
			$error=false;
		}
		else
		{
			$s1=$_POST["service1"];
		}
		if(empty($_POST["service2"]))
		{
			$err_s2="Service Required";
			$error=false;
		}
		else
		{
			$s2=$_POST["service2"];
		}
		if(empty($_POST["service3"]))
		{
			$err_s3="Service Required";
			$error=false;
		}
		else
		{
			$s3=$_POST["service3"];
		}
		if(!empty($_POST["service1"]&&!empty($_POST["service2"])&&!empty($_POST["service3"])))
		{
			$rs=insertService($_POST["service1"],$_POST["service2"],$_POST["service3"]);
			if($rs == true)
			{
			header("Location: RegisterService.php");
			}
			$db_err = $rs;
		}
	}
	else if(isset($_POST["updateServices"]))
	{
		
		if(empty($_POST["service1"]))
		{
			$err_s1="Service Required";
			$error=false;
		}
		else
		{
			$s1=$_POST["service1"];
		}
		if(empty($_POST["service2"]))
		{
			$err_s2="Service Required";
			$error=false;
		}
		else
		{
			$s2=$_POST["service2"];
		}
		if(empty($_POST["service3"]))
		{
			$err_s3="Service Required";
			$error=false;
		}
		else
		{
			$s3=$_POST["service3"];
		}
		if(!empty($_POST["service1"])&&!empty($_POST["service2"])&&!empty($_POST["service3"]))
		{
			$rs = updatemng($_POST["id"],$_POST["service1"],$_POST["service2"],$_POST["service3"]);
			if($rs == true)
			{
			header("Location: RegisterService.php");
			}
			$db_err = $rs;
		}
		
	}
	else if(isset($_POST["delete"]))
	{
		$rs = deleteMng($_POST["id"]);
		
			header("Location: RegisterService.php");
		$db_err = $rs;
	}
	else if(isset($_POST["no"]))
	{
			header("Location: RegisterService.php");
	}
	else if(isset($_POST["noconfirm"]))
	{
		$rs = updatebook($_POST["id"],'Booking Cancel');
			header("Location: BookedUserInfo.php");
	}
	else if(isset($_POST["confirms"]))
	{
			$rs = updatebook($_POST["id"],'Confirmed Booking');
			
			header("Location: BookedUserInfo.php");
			
			
	}
	else if(isset($_POST["pending"]))
	{
			$rs = updatebook($_POST["id"],'Pending...');
			
			header("Location: BookedUserInfo.php");
			
			
	}
	else if(isset($_POST["addOffer"]))
	{
		
		if(empty($_POST["offername"]))
		{
			$err_OffName="Offer Name Required";
			$error=false;
		}
		else
		{
			$OffName=$_POST["offername"];
		}
		if(empty($_POST["percentage"]))
		{
			$err_OffPercen="Offer Percentage Required";
			$error=false;
		}
		else
		{
			$OffPercen=$_POST["percentage"];
		}
		if(empty($_POST["coupon"]))
		{
			$err_CoCode="Coupon Required";
			$error=false;
		}
		else
		{
			$CoCode=$_POST["coupon"];
		}
		if(empty($_POST["sdate"]))
		{
			$err_SDate="Starting Date Required";
			$error=false;
		}
		else
		{
			$SDate=$_POST["sdate"];
		}
		if(empty($_POST["edate"]))
		{
			$err_EDate="Ending Date Required";
			$error=false;
		}
		else
		{
			$EDate=$_POST["sdate"];
		}
		if(!empty($_POST["offername"]&&!empty($_POST["percentage"])&&!empty($_POST["coupon"])&&!empty($_POST["sdate"])&&!empty($_POST["edate"])))
		{
			$rs=insertOffer($_POST["offername"],$_POST["percentage"],$_POST["coupon"],$_POST["sdate"],$_POST["edate"]);
			if($rs == true)
			{
			header("Location: SpecialOffer.php");
			}
			$db_err = $rs;
		}
	}
	else if(isset($_POST["updateOffer"]))
	{
		
		if(empty($_POST["offername"]))
		{
			$err_OffName="Offer Name Required";
			$error=false;
		}
		else
		{
			$OffName=$_POST["offername"];
		}
		if(empty($_POST["percentage"]))
		{
			$err_OffPercen="Offer Percentage Required";
			$error=false;
		}
		else
		{
			$OffPercen=$_POST["percentage"];
		}
		if(empty($_POST["coupon"]))
		{
			$err_CoCode="Coupon Required";
			$error=false;
		}
		else
		{
			$CoCode=$_POST["coupon"];
		}
		if(empty($_POST["sdate"]))
		{
			$err_SDate="Starting Date Required";
			$error=false;
		}
		else
		{
			$SDate=$_POST["sdate"];
		}
		if(empty($_POST["edate"]))
		{
			$err_EDate="Ending Date Required";
			$error=false;
		}
		else
		{
			$EDate=$_POST["sdate"];
		}
		if(!empty($_POST["offername"]&&!empty($_POST["percentage"])&&!empty($_POST["coupon"])&&!empty($_POST["sdate"])&&!empty($_POST["edate"])))
		{
			$rs = updateOff($_POST["id"],$_POST["offername"],$_POST["percentage"],$_POST["coupon"],$_POST["sdate"],$_POST["edate"]);
			if($rs == true)
			{
			header("Location: SpecialOffer.php");
			}
			$db_err = $rs;
		}
	}
	else if(isset($_POST["deleteoff"]))
	{
		$rs = deleteOff($_POST["id"]);
		if($rs == true)
			{
			header("Location: SpecialOffer.php");
			}
		$db_err = $rs;
	}
	else if(isset($_POST["nooff"]))
	{
			header("Location: SpecialOffer.php");
	}
	
	function insertService($s1,$s2,$s3)
	{
		$query = "insert into service values (NULL,'$s1','$s2','$s3','Pending...')";
		 return execute($query);
	}
	function insertOffer($OffName,$Percentage,$CoCode,$SDate,$EDate)
	{
		$query = "insert into offer values (NULL,'$OffName','$Percentage','$CoCode','$SDate','$EDate')";
		 return execute($query);
	}
	
	function getallMng()
	{
		$query = "select * from service";
		$rs = get($query);
		return $rs;
	}
	function getallOff()
	{
		$query = "select * from offer";
		$rs = get($query);
		return $rs;
	}
	function getallBooking()
	{
		$query = "select * from user";
		$rs = get($query);
		return $rs;
	}
	function getMng($id)
	{
		$query= "select Service1,Service2,Service3 from service where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	
	function getBook($id)
	{
		$query= "select * from user where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	
	function getOff($id)
	{
		$query= "select * from offer where ID=$id";
		$rs = get($query);
	return $rs[0];
	}
	
	function updatemng($id,$s1,$s2,$s3)
	{
		$query= "update service set Service1='$s1',Service2='$s2',Service3='$s3' where ID=$id";
		return execute($query);
	}
	
	function updateOff($id,$OffName,$Percentage,$CoCode,$SDate,$EDate)
	{
		$query= "update offer set Offer_Name='$OffName',Offer_Percentage='$Percentage',Coupon_Code='$CoCode',Staring_Date='$SDate',Ending_Date='$EDate' where ID=$id";
		return execute($query);
	}
	function updatebook($id,$con)
	{
		$query= "update user set Booking='$con' where ID=$id";
		return execute($query);
	}
	function deleteMng($id)
	{
		$query= "DELETE FROM service WHERE ID=$id";
		return execute($query);
	}
	function deleteOff($id)
	{
		$query= "DELETE FROM offer WHERE ID=$id";
		return execute($query);
	}
?>