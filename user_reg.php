<?php

include "database.php";
?>

<?php
if(isset($_POST['reg_user']))
{
	$uname=$_POST["uname"];
	$unum=$_POST["unum"];
	$upsw=$_POST["upsw"];
	$ucpsw=$_POST["ucpsw"];

	if($uname !="" && $unum!="" && $upsw!="" && $ucpsw!="")
	{
		if($upsw==$ucpsw)
		{	
			$sql_email = "SELECT * FROM user WHERE USER_MOB_NUM='$unum'";
			$res=$con->query($sql_email);
			//print_r($res);
			if($res->num_rows>0)
			{
				echo "<p class='err'>Already Registered</p>";
			}
			
			else 
			{
				$ucpsw=md5($ucpsw);
				$sql="INSERT INTO  user(USERNAME,USER_MOB_NUM,PASSWORD,CPASSWORD) VALUES('$uname','$unum','$upsw','$ucpsw')";
				$result=$con->query($sql);
				echo "<p class='suc'>Succesfully Registered.Please log in</p>";
			}
		}
		else
		{
			echo"<p class='err'>Password must be same.</p>";
		}
	}
	else
	{
		echo "<p class='err'>All fields required</p>";
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














