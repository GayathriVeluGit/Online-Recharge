<?php
include"database.php";
?>

<?php
if(isset($_POST['dthbtn']))
{
	$dthoper=$_POST['dthoper'];
	$dthcusid=$_POST['dthcusid'];
	$dthamo=$_POST['dthamo'];


	$sql="INSERT INTO dth(DTH_OPER,DTH_CUS_ID,DTH_AMOUNT) VALUES('$dthoper','$dthcusid','$dthamo')";
	if($con->query($sql))
	{
		header("location:card/card.php");
	}
}
?>

<style type="text/css">
	.suc{
		color:green;
		margin-bottom:5px;
	}
</style>
