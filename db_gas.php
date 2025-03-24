<?php
include"database.php";
?>
<?php
if(isset($_POST['gasbtn']))
{
	$gasagen=$_POST['gasagen'];
	$gascusid=$_POST['gascusid'];
	$gasamo=$_POST['gasamo'];


	$sql="INSERT INTO gas(GAS_AGEN,GAS_CUS_ID,GAS_AMOUNT) VALUES('$gasagen','$gascusid','$gasamo')";
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
