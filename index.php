<?php
include "database.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Recharge</title> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<link rel="stylesheet" media="screen and (max-width: 1140px)" href="css/s1.css">
	<link rel="stylesheet" media="screen and (max-width: 985px)" href="css/s2.css">
	<link rel="stylesheet" media="screen and (max-width: 863px)" href="css/s3.css">
	<link rel="stylesheet" media="screen and (max-width: 815px)" href="css/s4.css">
	
	
	
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>

<!------------------------------------------------------------SLIDE SHOW--------------------------------------------->
<div class="ss ss-media">
		<img class="mySlides" src="images/1.jpg" >
  		<img class="mySlides" src="images/3.jpg" >
  		<img class="mySlides" src="images/4.jpg" >


  		<div class="w_ss-1"><a href="#" >GET UNLIMITED CALLS</a>
  			<h2>Amazing ......!!! Airtel Offers unlimited call Rs.249 </h2>
  		</div>
  		<div class="w_ss-2">
  			<h2>Exclusive App and web Offers | To enjoy extra data</h2>
  			<a href="#">Recharge Now......!</a>
  		</div>
  		<div class="w_ss-3">
  			<h2>How to Start Online recharges......!!!!</h2>
  			<a href="#">CLICK HERE</a>
  		</div>

</div>
<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  for (i = 0; i < x.length; i++) {
	    x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1}    
	  x[myIndex-1].style.display = "block";  
	  setTimeout(carousel, 3500);  
	}
</script>

<!------------------------------------------------------------HEADER----------------------------------------------------->
<header>
	<div class="headcon">
		<div class="logo">
			<h4 title="Online Recharge" style="font-family:arial;">Online Recharge</h4>
		</div>
		<div class="log-box">
			<button  onclick="openForm()">
				<i class="glyphicon glyphicon-user"></i>LOGIN/REGISTER
			</button>
			<button onclick="adminloginbox()">
				Admin
			</button>
		</div>        
<!--------------------------------------------------------- ADMIN  LOGIN--------------------------------------------->
<div id="adminloginbox">
	<h4> Admin Login</h4>
	<?php
		include"insert.php";
	?>
	<form action="" method="POST" name="adminloginform" autocomplete="off">
		<i class="glyphicon glyphicon-user"></i><input type="text" name="admin" placeholder="admin" required="">
		<i class="glyphicon glyphicon-lock"></i><input type="password" name="adminpsw" placeholder="password" required="">
		<button type="submit" name="adminsubmit">
			Login
		</button>
	</form>
</div>
<!---------------------------------------------------------LOGIN AND REGISTER--------------------------------------------->
<div id="myForm">
<div class="log-res">
	
	<div class="box-1">
		<div class="con-hol">
			<img src="images/ph1.png">
			<h1>This is a Register Button from here you can create New account</h1>
			<button class="btn-1" onclick="signup()">Sign up</button>
			<button class="btn-2" onclick="login()">Login</button>
		</div>
	</div>	
	<div class="box-2">
		<i class="glyphicon glyphicon-remove" title="Close" onclick="closeForm()" ></i>
		<div class="login">
			<?php include"user_login.php";	?>

			<h1>Login</h1>
			<form action="" method="POST" autocomplete="off">
				<input type="text" name="unum" placeholder="Enter mobile no" class="input-field1" required=""><br><br>
				<input type="password" name="upsw" placeholder="Enter password" class="input-field1" required=""><br><br>
				<button class="login-button" name="login_user">Login</button>
			</form>
		</div>

		<div class="reg">
			<?php include"user_reg.php";?>
			<h1>Sign Up</h1>
			<form action="" method="POST" autocomplete="off">
				Enter Your Name<br><input type="text" name="uname"  class="input-field" required=""><br><br>
				Enter Your Mobile No<br><input type="text" name="unum"   class="input-field" required=""><br><br>
				Enter Your Password<br><input type="password" name="upsw"   class="input-field" required=""><br><br>
				Confirm Your Password<br><input type="password" name="ucpsw"  class="input-field" required=""><br><br>
				<button class="login-button" name="reg_user">Sign Up</button>
			</form>
		</div>
	</div>
</div>	
</div>
</header>

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
	<!-- <?php include"db_mobile.php";?>
		<?php  include"db_mobile_post.php"; ?>
		<?php  include"db_dth.php"; ?>
		<?php  include"db_ele.php"; ?>
		<?php  include"db_gas.php"; ?>
		<?php  include"db_water.php"; ?> -->
		<!---------------------- MOBILE---------------------------->    
		<div id="mob" class="tabcontent tab1 ">
			<img src="images/mobile.png" width="70px" height="70px"><br>
		    <span>
		    	
			    	<button type="submit"  class="rebtn" id="reb1" onclick="plans()">Prepaid</button>
			    	<button type="submit"  class="rebtn" id="reb2" onclick="plans2()">Postpaid</button>
			    
			</span>
		    <!-----------PREPAID---------->
			<div class="prepaid " id="prepaid">
			<form action="db_mobile.php" method="POST" autocomplete="off">	

				<h4 class="tabansh4">Enter your mobile number</h4>
				<input type="text"  pattern="[0-9]{10}" name="premobnum" required="" class="tabansinput" maxlength="10"><br>
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
				<input type="number" name="preamo" pattern="[0-9]" required=""  style="width: 200px;" class="tabansinput" maxlength="5"><a href="viewplan.html">View all plans</a><br>
				<button type="submit" name="prebtn" class="tabansbtn">Recharge Now</button>
			</form>
			</div>    

    		<!-----------------------POSTPAID---------------------->
			<div class="postpaid" id="postpaid">
			<form action="db_mobile_post.php" method="POST" autocomplete="off">
				<h4 class="tabansh4">Enter your mobile number</h4>
				<input type="text" pattern="[0-9]{10}" name="postmobnum" required="" class="tabansinput" maxlength="10"><br>
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
				<input type="text" name="postamo" pattern="[0-9]" required=""  style="width: 200px;" class="tabansinput" maxlength="5"> <br>
				<button type="submit" name="postbtn" class="tabansbtn">Pay bill</button>
			</form>
			</div>
		</div>
		<!-----------------------DTH---------------------->
		<div id="dth" class="tabcontent ">
			<img src="images/d1.png" width="80px" height="80px"><br>
			<div class="dth allt">
			<form action="db_dth.php" method="POST" autocomplete="off">
				<select name="dthoper" class="tabansselect" required="">
			  		<option value="">Select Your Operator</option>
					<option value="Airtel">Airtel</option>
					<option value="Dish Tv<">Dish Tv</option>
					<option value="Sun Direct">Sun Direct</option>
					<option value="Tata Sky">Tata Sky</option>
					<option value="Videocon">Videocon</option>
				</select>
				<h4 class="tabansh4">Enter Customer Name or ID</h4>
				<input type="text" name="dthcusid" required="" class="tabansinput" maxlength="10">
				<h4 class="tabansh4">Enter Amount</h4>
				<input type="text" name="dthamo" required="" pattern="[0-9]" style="width: 200px;" class="tabansinput" maxlength="5"><br>
				<button type="submit" name="dthbtn" class="tabansbtn" >Recharge Now</button>
			</form>
			</div>
		</div>
		<!-----------------------ELECT---------------------->
		<div id="elebill" class="tabcontent ">
		  	<img src="images/e.png" width="80px" height="80px"><br>
		    <div class="elebill allt">
		    <form action="db_ele.php" method="POST" autocomplete="off">
				<select name="elecir" required="" class="tabansselect">
			  		<option value="">Select Your Circle</option>
					<option value="Operator 1">Operator 1</option >
					<option value="Operator 2">Operator 2</option>
					<option value="Operator 3">Operator 3</option>
					<option value="Operator 4">Operator 4</option>
				</select>
				<h4 class="tabansh4">Enter Customer Name or ID</h4>
				<input type="text" name="elecusid" required="" class="tabansinput"  maxlength="10">
				<h4 class="tabansh4">Enter Amount</h4>
				<input type="text" name="eleamo" required="" pattern="[0-9]" style="width: 200px;" class="tabansinput" maxlength="5"><br>
				<button name="elebtn" type="submit" class="tabansbtn">Recharge Now</button>
			</form>
			</div>
		</div>
		<!----------------------GAS---------------------->
		<div id="gaspay" class="tabcontent ">
			<img src="images/gas.png" width="80px" height="80px"><br>
			<div class="gas allt">
			<form action="db_gas.php" method="POST" autocomplete="off">
				<select name="gasagen" required="" class="tabansselect">
			  		<option value="">Select Your Agency</option>
					<option>Operator 1</option>
					<option>Operator 2</option>
					<option>Operator 3</option>
					<option>Operator 4</option>
				</select>
				<h4 class="tabansh4">Enter Customer Name or ID</h4>
				<input type="text" name="gascusid" required="" class="tabansinput" maxlength="10">
				<h4 class="tabansh4">Enter Amount</h4>
				<input type="text" name="gasamo" required="" pattern="[0-9]" style="width: 200px;" class="tabansinput" maxlength="5"><br>
				<button type="submit" name="gasbtn" class="tabansbtn">Recharge Now</button>
			</form>
			</div>
		</div>

		<!-----------------------WATER---------------------->
		<div id="water" class="tabcontent ">
			<img src="images/w.png" width="80px" height="80px"><br>
			<div class="water allt">
			<form action="db_water.php" method="POST" autocomplete="off">
				<select name="wateroper" required="" class="tabansselect">
			  		<option value="">Select Your Operator</option>
					<option>Operator 1</option>
					<option>Operator 2</option>
					<option>Operator 3</option>
					<option>Operator 4</option>
				</select>
				<h4 class="tabansh4">Enter Customer Name or ID</h4>
				<input type="text" name="watercusid" required="" class="tabansinput" maxlength="10">
				<h4 class="tabansh4">Enter Amount</h4>
				<input type="text" name="wateramo" required="" pattern="[0-9]" style="width: 200px;" class="tabansinput" maxlength="5"><br>
				<button type="submit" name="waterbtn" class="tabansbtn">Recharge Now</button>
			</form>
			</div>
		</div>
	</div>
</div>


<!------------------------------------------------------------CUSTOMER SUPPORT--------------------------------------------->
<div class="cus">
		<img src="images/cus.jpg">
	<div class="cus1">
		<h4>Online Recharge</h4>
		<h1>24/7 Customer Service Support</h1>
		<button onclick="getElementById('demo').innerHTML='We Will Get Back  You.....!'">Get Call</button>
		<h4 id="deo" style="text-decoration:none;"></h4>
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
