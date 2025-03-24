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
<div class="pro">
	<h2>My Profile</h2>
	<div class="pro-1">
		<h3 style="padding-top: 22px;">Mobile Number : <?php echo $_SESSION['USER_MOB_NUM']; ?></h3>
		<h3>Username : <?php echo $_SESSION['USERNAME']; ?></h3>
		
	</div>
	
</div>
<!------------------------------------------------------------NAVBAR--------------------------------------------->
<div class="navbox">
	<div class="tab">
		<ul style="list-style-type: none;">
			<li id="b1">
				<i class="glyphicon glyphicon-phone"></i>
		  		<button class="tablinks" onclick="b1()">Mobile recharge</button>
		 	</li>
		 	<li id="b2">
		 		<i class="fa fa-television"></i>
		 		<button class="tablinks" onclick="b2()">DTH</button>
		 	</li>
		 	<li id="b3">
		 		<i class="fa fa-lightbulb-o"></i>
		 		<button class="tablinks" onclick="b3()">Electricity</button>
		 	</li>
		 	<li id="b4">
		 		<i class="fa fa-fire"></i>
		 	    <button class="tablinks" onclick="b4()">Gas Pay</button>
		 	</li>
		 	<li id="b5">
		 		<i class="fa fa-tint"></i>
		 		<button class="tablinks" onclick="b5()">Water Bill Pay</button>
		 	</li>
		</ul>
	</div>

<!---------------------- TAB ANSWER---------------------------->
	
	<div class="tabans">
		<?php  include"db_mobile.php"; ?>
		<?php  include"db_mobile_post.php"; ?>
		<?php  include"db_dth.php"; ?>
		<?php  include"db_ele.php"; ?>
		<?php  include"db_gas.php"; ?>
		<?php  include"db_water.php"; ?>
		<!---------------------- MOBILE---------------------------->    
		<div id="mob" class="tabcontent tab1 ">
			<img src="images/mobile.png" width="70px" height="70px"><br>
		    <span>
		    	
			    	<button type="submit"  class="rebtn" id="reb1" onclick="plans()">Prepaid</button>
			    	<button type="submit"  class="rebtn" id="reb2" onclick="plans2()">Postpaid</button>
			    
			</span>
		    <!-----------PREPAID---------->
			<div class="prepaid " id="prepaid">
			<form action="" method="POST">	
				<h4 class="tabansh4">Enter your mobile number</h4>
				<input type="text" name="premobnum" required="" class="tabansinput"><br>
				<select name="preoper" class="tabansselect" required="">
					<option value="">Select Your Operator</option>
					<option value="Airtel">Airtel</option>
					<option value="BSNL">BSNL</option>
					<option value="Tata Docomo">Tata Docomo</option>
					<option value="Reliance">Reliance</option>
					<option value="Jio">Jio</option>
					<option value="Vodafone">Vodafone</option>
					<option value="Idea">Idea</option>
				</select> <br>
				<select name="precircle" required="" class="tabansselect" required="">
					<option value="">Select Circle</option>
					<option value="Chennai">Chennai</option>
					<option value="Delhi NCR">Delhi NCR</option>
					<option value="Kolkata">Kolkata</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Maharashtra & Goa">Maharashtra & Goa</option>
					<option value="Assam">Assam</option>
					<option value="Bihar & Jharkhand">Bihar & Jharkhand</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jummu & Kashmir">Jummu & Kashmir</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="MP & Chattisgarh">MP & Chattisgarh</option>
					<option value="North East">North East</option>
					<option value="Orissa">Orissa</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Tamilnadu">Tamilnadu</option>
					<option value="UP East">UP East</option>
					<option value="UP West & Utterkhand">UP West & Utterkhand</option>
					<option value="West Bengal">West Bengal</option>
				</select>
				<h4 class="tabansh4">Enter Amount</h4>
				<input type="text" name="preamo" required=""  style="width: 200px;" class="tabansinput"><a href="viewplan.html">View all plans</a><br>
				<button type="submit" name="prebtn" class="tabansbtn">Recharge Now</button>
			</form>
			</div>    

    		<!-----------------------POSTPAID---------------------->
			<div class="postpaid" id="postpaid">
			<form action="" method="POST">
				<h4 class="tabansh4">Enter your mobile number</h4>
				<input type="text" name="postmobnum" required="" class="tabansinput"><br>
				<select name="postoper" class="tabansselect" required="">
					<option value="">Select Your Operator</option>
					<option value="Airtel">Airtel</option>
					<option value="BSNL">BSNL</option>
					<option value="Tata Docomo">Tata Docomo</option>
					<option value="Reliance">Reliance</option>
					<option value="Jio">Jio</option>
					<option value="Vodafone">Vodafone</option>
					<option value="Idea">Idea</option>
				</select><br>
				<select name="postcircle" required="" class="tabansselect" required="">
					<option value="">Select Circle</option>
					<option value="Select Circle">Select Circle</option>
					<option value="Chennai">Chennai</option>
					<option value="Delhi NCR">Delhi NCR</option>
					<option value="Kolkata">Kolkata</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Maharashtra & Goa">Maharashtra & Goa</option>
					<option value="Assam">Assam</option>
					<option value="Bihar & Jharkhand">Bihar & Jharkhand</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jummu & Kashmir">Jummu & Kashmir</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="MP & Chattisgarh">MP & Chattisgarh</option>
					<option value="North East">North East</option>
					<option value="Orissa">Orissa</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Tamilnadu">Tamilnadu</option>
					<option value="UP East">UP East</option>
					<option value="UP West & Utterkhand">UP West & Utterkhand</option>
					<option value="West Bengal">West Bengal</option>
				</select>
				<h4 class="tabansh4">How much to pay</h4>
				<input type="text" name="postamo" required=""  style="width: 200px;" class="tabansinput"> <br>
				<button type="submit" name="postbtn" class="tabansbtn">Pay bill</button>
			</form>
			</div>
		</div>
		<!-----------------------DTH---------------------->
		<div id="dth" class="tabcontent ">
			<img src="images/d1.png" width="80px" height="80px"><br>
			<div class="dth allt">
			<form action="" method="POST">
				<select name="dthoper" class="tabansselect" required="">
			  		<option value="">Select Your Operator</option>
					<option value="Airtel">Airtel</option>
					<option value="Dish Tv<">Dish Tv</option>
					<option value="Sun Direct">Sun Direct</option>
					<option value="Tata Sky">Tata Sky</option>
					<option value="Videocon">Videocon</option>
				</select>
				<h4 class="tabansh4">Enter Customer Name or ID</h4>
				<input type="text" name="dthcusid" required="" class="tabansinput">
				<h4 class="tabansh4">Enter Amount</h4>
				<input type="text" name="dthamo" required=""  style="width: 200px;" class="tabansinput"><br>
				<button type="submit" name="dthbtn" class="tabansbtn" >Recharge Now</button>
			</form>
			</div>
		</div>
		<!-----------------------ELECT---------------------->
		<div id="elebill" class="tabcontent ">
		  	<img src="images/e.png" width="80px" height="80px"><br>
		    <div class="elebill allt">
		    <form action="" method="POST">
				<select name="elecir" required="" class="tabansselect">
			  		<option value="">Select Your Circle</option>
					<option value="Operator 1">Operator 1</option >
					<option value="Operator 2">Operator 2</option>
					<option value="Operator 3">Operator 3</option>
					<option value="Operator 4">Operator 4</option>
				</select>
				<h4 class="tabansh4">Enter Customer Name or ID</h4>
				<input type="text" name="elecusid" required="" class="tabansinput">
				<h4 class="tabansh4">Enter Amount</h4>
				<input type="text" name="eleamo" required=""  style="width: 200px;" class="tabansinput"><br>
				<button name="elebtn" type="submit" class="tabansbtn">Recharge Now</button>
			</form>
			</div>
		</div>
		<!----------------------GAS---------------------->
		<div id="gaspay" class="tabcontent ">
			<img src="images/gas.png" width="80px" height="80px"><br>
			<div class="gas allt">
			<form action="" method="POST">
				<select name="gasagen" required="" class="tabansselect">
			  		<option value="">Select Your Agency</option>
					<option>Operator 1</option>
					<option>Operator 2</option>
					<option>Operator 3</option>
					<option>Operator 4</option>
				</select>
				<h4 class="tabansh4">Enter Customer Name or ID</h4>
				<input type="text" name="gascusid" required="" class="tabansinput">
				<h4 class="tabansh4">Enter Amount</h4>
				<input type="text" name="gasamo" required=""  style="width: 200px;" class="tabansinput"><br>
				<button type="submit" name="gasbtn" class="tabansbtn">Recharge Now</button>
			</form>
			</div>
		</div>

		<!-----------------------WATER---------------------->
		<div id="water" class="tabcontent ">
			<img src="images/w.png" width="80px" height="80px"><br>
			<div class="water allt">
			<form action="" method="POST">
				<select name="wateroper" required="" class="tabansselect">
			  		<option value="">Select Your Operator</option>
					<option>Operator 1</option>
					<option>Operator 2</option>
					<option>Operator 3</option>
					<option>Operator 4</option>
				</select>
				<h4 class="tabansh4">Enter Customer Name or ID</h4>
				<input type="text" name="watercusid" required="" class="tabansinput">
				<h4 class="tabansh4">Enter Amount</h4>
				<input type="text" name="wateramo" required=""  style="width: 200px;" class="tabansinput"><br>
				<button type="submit" name="waterbtn" class="tabansbtn">Recharge Now</button>
			</form>
			</div>
		</div>
	</div>
</div>

<!------------------------------------------------------------ADDS--------------------------------------------->
<div class="add">
	<h1>We are accepted at</h1>
	<div class="add1">
		<span><img src="images/lg.png" width="7%" height="7%"></span>
		<span><img src="images/lg1.png" width="7%" height="7%"></span>
		<span><img src="images/lg2.png" width="7%" height="7%"></span>
		<span><img src="images/lg3.png" width="7%" height="7%"></span>
		<span><img src="images/lg4.png" width="7%" height="7%"></span>
	</div>
	<div class="add2">
		<span><img src="images/lg5.png" width="7%" height="7%"></span>
		<span><img src="images/lg6.png" width="7%" height="7%"></span>
		<span><img src="images/lg7.png" width="7%" height="7%"></span>
		<span><img src="images/lg8.png" width="7%" height="7%"></span>
		<span><img src="images/lg9.png" width="7%" height="7%"></span>
	</div> 
</div>

<!------------------------------------------------------------JOIN US--------------------------------------------->
<div class="joinus">
	<h2>Join Us</h2>
	<span>
		<img src="images/f.png">
		<img src="images/i.jpg">
		<img src="images/t.jpg">
		<img src="images/g.png">
	</span>
	
	<div class="subc">
		<h3>Subscribe to our Website</h3>

		<?php include"db_subscribe.php"; ?>

		<form action="" name="subform" autocomplete="off" method="POST" onsubmit="return myFunction()" >
			<input type="email" name="subsemail" placeholder="Enter Your Email...."  />
			<button type="submit" name="subsbtn" id='sub'>Subcribe</button>
		</form>
		<script type="text/javascript">

		document.getElementById("sub").addEventListener("onsubmit", myFunction);

		function myFunction() {
		var semail = document.forms["subform"]["subsemail"];
		if (semail.value!="") {
		document.getElementById("sub").innerHTML = "Subcribed";
		document.getElementById('sub').style.cssText=" font-size:19px;background-color:#2ec962;"
		}
		else{
		alert("Enter Your Email to Subcribe")

		}
		}
	</script>
	</div>
</div>

<!------------------------------------------------------------FOOTER--------------------------------------------->
<div class="foot">
	<div class="c1 footc">
		<span><h4>COMPANY</h4></span>
		<ul>
			<li>
				<a href="about.html">About Us</a>
			</li>
			<li>
				<a href="support.html">Support</a>
			</li>
			<li>
				<a href="term.html">Terms&Conditions</a>
			</li>
			<li>
				<a href="gallery.html">Gallery</a>
			</li>
			<li>
				<a href="contact.html">Contact</a>
			</li>
			<li>
				<a href="location.html">Sitemap</a>
			</li>
		</ul>
	</div>

	<div class="c2 footc">
		<h4 >MOBILES</h4>
		<ul>
			<li>
				<a href="https://www.airtel.in/dth/Bangalore" target="_blank">Airtel</a>
			</li>
			<li>
				<a href="http://www.bsnl.co.in/" target="_blank">BSNL</a>
			</li>
			<li>
				<a href="https://www.vodafone.in/blog" target="_blank">Vodafone</a>
			</li>
			
			<li>
				<a href="https://www.ideacellular.com/" target="_blank">idea</a>
			</li>
			<li>
				<a href="https://www.jio.com/" target="_blank">Jio</a>
			</li>
		</ul>
	</div>


	<div class="c3 footc">
		<h4>DTH </h4>
		<ul>
		<li>
			<a href="https://www.sundirect.in/about-us" target="_blank">Sun Direct</a>
		</li>
		<li>
			<a href="https://www.dishtv.in/" target="_blank">Dish TV</a>
		</li>
		<li>
			<a href="https://www.tatasky.com/dth/about-us" target="_blank">Tata Sky</a>
		</li>
		
		
		<li>
			<a href="https://www.airtel.in/digital-tv/interactive_services_allpop/summary_of_rights_of_subscriber" target="_blank">Airtel DTH</a>
		</li>
	</ul>

	</div>

	<div class="c4 footc">
		<h4>PAYMENT OPTIONS</h4>
		<ul>
		<li>
			<a href="">Credit Cards</a>
		</li>
		<li>
			<a href="">Debit Cards</a>
		</li>
		<li>
			<a href="">Visa Debit Cards</a>
		</li>
		<li>
			<a href="">Direct Bank</a>
		</li>
		</ul>
	</div>
</div> 

<div class="bottomfooter">
	<h2>ONLINE RECHARGE</h2>
	<h4>&copy; 2020  Online Recharge | All Rights Reserved </h4>
</div>
</body>
</html>
