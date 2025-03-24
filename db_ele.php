<?php
include"database.php";
?>
<?php
if(isset($_POST['elebtn']))
{
	$elecir=$_POST['elecir'];
	$elecusid=$_POST['elecusid'];
	$eleamo=$_POST['eleamo'];


	$sql="INSERT INTO ele(ELE_CIRCLE,ELE_CUS_ID,ELE_AMOUNT) VALUES('$elecir','$elecusid','$eleamo')";
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
