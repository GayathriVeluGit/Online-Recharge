
<?php
include "database.php";
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
		table{
			width: 40%;
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
		<h1>Viewing  Subscribers</h1>
		<?php 
			$sql="SELECT * FROM subscribe";
			$res=$con->query($sql);
			if($res->num_rows > 0)
			{
				echo "<table border='1px'>
					<tr>
						<th>SNO</th>
						<th>SUBSCRIBERS MAIL ID</th>
					</tr>";	
				$i=0;
				while ($row=$res->fetch_assoc())
			    {
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row['SUBSCRIBER_MAIL_ID']}</td>";
					echo "</tr";
					echo "</table>";
				}
						
			}     
			else
			{
			echo "<p class='error'>No User Records Found</p> ";
			}

		?>

	</div>
</div>
</body>
</html>