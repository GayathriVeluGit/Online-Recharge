<?php
include"database.php";
?>
<?php
if(isset($_POST['subsbtn']))
{
	$subsemail=$_POST['subsemail'];
	$sql="INSERT INTO subscribe(SUBSCRIBER_MAIL_ID) VALUES('$subsemail')";
	if($con->query($sql))
	{
		
	}
}
?>
