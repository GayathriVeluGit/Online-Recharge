<?php

include"database.php";
?>

<?php
if(isset($_POST['postbtn']))
{
	$postmobnum=$_POST['postmobnum'];
	$postoper=$_POST['postoper'];
	$postcircle=$_POST['postcircle'];
	$postamo=$_POST['postamo'];
	$sql="INSERT INTO  mobile_post(POST_MOB_NUM,POST_OPER,POST_CIRCLE,POST_AMOUNT) VALUES('$postmobnum','$postoper','$postcircle','$postamo')";
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
