<?php
include"database.php";
?>
<?php
if(isset($_POST['waterbtn']))
{
	$wateroper=$_POST['wateroper'];
	$watercusid=$_POST['watercusid'];
	$wateramo=$_POST['wateramo'];


	$sql="INSERT INTO water(WATER_OPER,WATER_CUS_ID,WATER_AMOUNT) VALUES('$wateroper','$watercusid','$wateramo')";
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
