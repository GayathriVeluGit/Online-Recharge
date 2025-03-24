<?php
include "database.php";

if(isset($_POST['login_user']))
{
	
	$unum=$_POST["unum"];
	$upsw=$_POST["upsw"];
	if($unum!="" && $upsw!="")
	{
		$sql="SELECT UID,USERNAME,USER_MOB_NUM,PASSWORD FROM user WHERE USER_MOB_NUM='$unum' AND PASSWORD='$upsw'";
		$res=$con->query($sql);
		//print_r($res);
		if($res->num_rows>=1)
		{	
			//print_r($res);
			$sv=$res->fetch_assoc();
			$_SESSION['UID']=$sv['UID'];
			$_SESSION['USERNAME']=$sv['USERNAME'];
			$_SESSION['USER_MOB_NUM']=$sv['USER_MOB_NUM'];
			header("location:userhome.php");
		}
		else
		{
			echo "<p class='err'>Invalid mobile no or password";
		}
	}
	else
	{
		echo "<p class='err'>Invalid credentials";
	}
}
?>


<style type="text/css">
	
.suc{
  color: green;
  margin-left:20px;
  font-size: 17px;
  margin-bottom: -25px;
}
.err{
  color: red;
  margin-left:20px;
  font-size: 17px;
  margin-bottom: -25px; 
}
</style>