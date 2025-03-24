<?php
include "database.php";

session_start();
if(!isset($_SESSION['UID']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Recharge</title> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/user_style.css" >
	<link rel="stylesheet" media="screen and (max-width: 1140px)" href="css/s1.css">
	<link rel="stylesheet" media="screen and (max-width: 985px)" href="css/s2.css">
	<link rel="stylesheet" media="screen and (max-width: 863px)" href="css/s3.css">
	<link rel="stylesheet" media="screen and (max-width: 815px)" href="css/s4.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/script.js"></script>

</style>
</head>
<body onscroll="proclose()">


<!------------------------------------------------------------HEADER----------------------------------------------------->
<header>
	<div class="headcon">
		<div class="logo">
			<h4 title="Online Recharge">Online Recharge</h4>
		</div>

		<div class="log-box">
			<img src="images/user_pro.png" onmouseover="pro()"><h5>Welcome  <?php echo $_SESSION['USERNAME']; ?></h5>	
		</div>        
		<div class="drop-box" id="drop" onmouseleave="proclose()">
			<ul style="list-style: none">
				<li>
					<a href="userhome.php">Profile</a>
				</li>
				<li>
					<a href="t_mob_pre.php"> My Transaction</a>
				</li>
				<li>
					<a href="logout.php">logout</a>
				</li>
			</ul>
		</div>	
		<script type="text/javascript">
			function pro(){
				document.getElementById("drop").style.cssText="display:block;";
			}
			function proclose(){
				document.getElementById("drop").style.cssText="display:none;";	
			}
		</script>
		
</header>
<div class="tran-box">
	<h1>My Transaction</h1>
	<div class="tran-1">
		<ul style="list-style: none;">
			<li>
				<a href="t_mob_pre.php">Prepaid</a>
			</li>
			<li>
				<a href="t_mob_post.php">Postpaid</a>
			</li>
		</ul>
	</div>
	<div class="tran-2">
		<h1>Prepaid</h1>



<?php
include"database.php";
$num=$_SESSION['USER_MOB_NUM'];
$sql="SELECT * FROM mobile_pre where PRE_MOB_NUM='$num' ";

$res=$con->query($sql);
if($res->num_rows > 0)
{
	echo "<table border='1px' width='500px;'>
		<tr>
			<th>SNO</th>
			<th>MOBILE NUMBER</th>
			<th>OPERATOR</th>
			<th>AMOUNT</th>
		</tr>";	
	$i=0;
	while ($row=$res->fetch_assoc())
    {
		$i++;
		echo "<tr>";
		echo "<td>{$i}</td>";
		echo "<td>{$row['PRE_MOB_NUM']}</td>";
		echo "<td>{$row['PRE_OPER']}</td>";
		echo "<td>{$row['PRE_AMOUNT']}</td>";
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
