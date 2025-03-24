/*-------------------------------------LOGIN BOX  OPEN AND CLOSE-----------------------------*/
function openForm() {
  var x = document.getElementById("myForm");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

/*-------------------------------------ADMIN LOGIN BOX  OPEN AND CLOSE-----------------------------*/

function adminloginbox() {
  var x = document.getElementById("adminloginbox");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function adminloginboxclose() {
  document.getElementById("adminloginbox").style.display = "none";
}

/*-------------------------------------LOGIN BOX AND SIGN UP -----------------------------*/
function signup(){
		document.querySelector(".login").style.cssText="display:none";
		document.querySelector(".reg").style.cssText="display:block";
		document.querySelector(".log-res").style.cssText="background: linear-gradient(to bottom,#90cfd4,#14bcc9)";
		document.querySelector(".btn-2").style.cssText="display:block; margin-left:35%;";
		document.querySelector(".btn-1").style.cssText="display:none";
	}
	function login(){
		document.querySelector(".login").style.cssText="display:block";
		document.querySelector(".reg").style.cssText="display:none";
		document.querySelector(".log-res").style.cssText="background: linear-gradient(to bottom,#5c5cad,#0a047a)";
		document.querySelector(".btn-2").style.cssText="display:none; ";
		document.querySelector(".btn-1").style.cssText="display:block;margin-left:35%;";
	}


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

/*-------------------------------------NAV BOX----------------------------*/
function plans(){
	document.getElementById("prepaid").style.cssText="display:block;";
	document.getElementById("postpaid").style.cssText="display:none;";
	document.getElementById("reb1").style.cssText="background-color:#0eddf0;"
	document.getElementById("reb2").style.cssText="background-color:none;"
}
function plans2(){
	document.getElementById("prepaid").style.cssText="display:none";
	document.getElementById("postpaid").style.cssText="display:block";
	document.getElementById("reb1").style.cssText="background-color:#dae5e6;"
	document.getElementById("reb2").style.cssText="background-color:#0eddf0;"
}


function b1(){
	document.getElementById("mob").style.cssText="display:block;";
	document.getElementById("dth").style.cssText="display:none;";
	document.getElementById("elebill").style.cssText="display:none;";
	document.getElementById("gaspay").style.cssText="display:none;";
	document.getElementById("water").style.cssText="display:none;";

	document.getElementById("b1").style.cssText="width:300px;border: 1px solid #d4d2d2;;border-radius: 3px;background-color:#0af0dd;";
	document.getElementById("b2").style.cssText="background-color:none;";
	document.getElementById("b3").style.cssText="background-color:none;";
	document.getElementById("b4").style.cssText="background-color:none;";
	document.getElementById("b5").style.cssText="background-color:none;";
}
function b2(){
	document.getElementById("mob").style.cssText="display:none;";
	document.getElementById("dth").style.cssText="display:block;";
	document.getElementById("elebill").style.cssText="display:none;";
	document.getElementById("gaspay").style.cssText="display:none;";
	document.getElementById("water").style.cssText="display:none;";

	document.getElementById("b1").style.cssText="background-color:none;";
	document.getElementById("b2").style.cssText="width:300px;border: 1px solid #d4d2d2;;border-radius: 3px;background-color:#0af0dd;";
	document.getElementById("b3").style.cssText="background-color:none;";
	document.getElementById("b4").style.cssText="background-color:none;";
	document.getElementById("b5").style.cssText="background-color:none;";
}
function b3(){
	document.getElementById("mob").style.cssText="display:none;";
	document.getElementById("dth").style.cssText="display:none;";
	document.getElementById("elebill").style.cssText="display:block;";
	document.getElementById("gaspay").style.cssText="display:none;";
	document.getElementById("water").style.cssText="display:none;";

	document.getElementById("b1").style.cssText="background-color:none;";
	document.getElementById("b2").style.cssText="background-color:none;";
	document.getElementById("b3").style.cssText="width:300px;border: 1px solid #d4d2d2;;border-radius: 3px;background-color:#0af0dd;";
	document.getElementById("b4").style.cssText="background-color:none;";
	document.getElementById("b5").style.cssText="background-color:none;";
}
function b4(){
	document.getElementById("mob").style.cssText="display:none;";
	document.getElementById("dth").style.cssText="display:none;";
	document.getElementById("elebill").style.cssText="display:none;";
	document.getElementById("gaspay").style.cssText="display:block;";
	document.getElementById("water").style.cssText="display:none;";

	document.getElementById("b1").style.cssText="background-color:none;";
	document.getElementById("b2").style.cssText="background-color:none;";
	document.getElementById("b3").style.cssText="background-color:none;";
	document.getElementById("b4").style.cssText="width:300px;border: 1px solid #d4d2d2;;border-radius: 3px;background-color:#0af0dd;";
	document.getElementById("b5").style.cssText="background-color:none;";
}
function b5(){
	document.getElementById("mob").style.cssText="display:none;";
	document.getElementById("dth").style.cssText="display:none;";
	document.getElementById("elebill").style.cssText="display:none;";
	document.getElementById("gaspay").style.cssText="display:none;";
	document.getElementById("water").style.cssText="display:block;";

	document.getElementById("b1").style.cssText="background-color:none; ";
	document.getElementById("b2").style.cssText="background-color:none;";
	document.getElementById("b3").style.cssText="background-color:none;";
	document.getElementById("b4").style.cssText="background-color:none;";
	document.getElementById("b5").style.cssText="width:310px;border: 1px solid #d4d2d2;;border-radius: 3px;background-color:#0af0dd;";
}

