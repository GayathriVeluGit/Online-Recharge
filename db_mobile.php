<?php
include"database.php";
?>

<?php
if(isset($_POST['prebtn']))
{
	$premobnum=$_POST['premobnum'];
	$preoper=$_POST['preoper'];
	$precircle=$_POST['precircle'];
	$preamo=$_POST['preamo'];
	
	$sql="INSERT INTO  mobile_pre(PRE_MOB_NUM,PRE_OPER,PRE_CIRCLE,PRE_AMOUNT) VALUES('$premobnum','$preoper','$precircle','$preamo')";
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
