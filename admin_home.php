<?php
include "database.php";
function countRecord($sql,$db)
{
	$res=$db->query($sql);
	return $res->num_rows;	
}
session_start();
if (!isset($_SESSION["AID"]))
{
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home</title>
	<link rel="stylesheet" type="text/css" href="admin_hom_style.css">
	<style type="text/css">
		
.details{
	width: 50%;
	background-color: ;
	margin-top: 40px;
	margin-left:400px;
	font-size: 22px;
}
	</style>
</head>
<body>
<div class="header">
	<div class="admin_head">
		<h2>Online Recharge</h2>	
	</div>
	<div class="logout">
		<a href="logout.php">logout</a>
	</div>
</div>
<div class="container">
	<div class="admin_navbar">
		<ul>
			<li><a href="admin_home.php">Home</a></li>
			<li><a href="user.php">User</a></li>
			<li><a href="mobile_pre.php">Mobile Prepaid</a></li>
			<li><a href="mobile_post.php">Mobile Postpaid</a></li>
			<li><a href="dth.php">DTH</a></li>
			<li><a href="ele.php">Electricity</a></li>
			<li><a href="gas.php">Gas</a></li>
			<li><a href="water.php">Water</a></li>
			<li><a href="sub.php">Subscribers</a></li>

		</ul>
	</div>
	<div class="details">
		<h1>Home</h1>
		<ul>
			<li>No of Users in website   : <?php echo countRecord("select * from user",$con); ?></li>
			<li>No of Mobile Prepaid   : <?php echo countRecord("select * from mobile_pre",$con); ?></li>
			<li>No of Mobile Postpaid  : <?php echo countRecord("select * from mobile_post",$con); ?></li>
			<li>No of DTH Recharged    : <?php echo countRecord("select * from dth",$con); ?></li>
			<li>No of Electricity :<?php echo countRecord("select * from ele",$con); ?></li>
			<li>No of Gas Recharged    :<?php echo countRecord("select * from gas",$con); ?></li>
			<li>No of Water Recharged  :<?php echo countRecord("select * from water",$con); ?></li>			
			<li>No of Subscribers      :<?php echo countRecord("select * from subscribe",$con); ?></li>

		</ul>
	</div>
</div>
</body>
</html>
<!--<?php 
			$pre="select count(*) from admin";
			$post="select count(*) from subscribe";
			echo $pre+$post; ?>  -->