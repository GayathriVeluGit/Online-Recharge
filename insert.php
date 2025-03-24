<?php
session_start();
include "database.php";

if (isset($_POST["adminsubmit"])){
	$sql="SELECT * FROM admin where ANAME='{$_POST["admin"]}' and APASS='{$_POST["adminpsw"]}'";
	$res=$con->query($sql);
	if ($res->num_rows>0){
		$row=$res->fetch_assoc();
		$_SESSION['AID']=$row['AID'];
		$_SESSION['ANAME']=$row['ANAME'];
		header("location:admin_home.php");
	}
	else{
		echo "<p>Invalid User Credentials</p>";
	}
}
?>
