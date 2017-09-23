<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : EarthlingTwo  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20090918
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
.style1 {
	font-size: 36pt;
	color: #3D2A0B;
	font-family: "Comic Sans MS";
	text-decoration: underline;
}
.style2 {
	text-align: left;
	font-size: large;
}
.style3 {
	font-family: "Comic Sans MS";
}
.style4 {
	font-size: x-large;
}
.style5 {
	font-size: 24pt;
	font-family: "Comic Sans MS";
}
</style>
</head>
<body>
<div id="wrapper">
	<div id="header" style="height: 233px">
		<div style="position: absolute; width: 443px; height: 89px; z-index: 2; left: 91px; top: 104px" id="layer2" class="style1">
			<strong><em>GET&nbsp; ME SOCIAL</em></strong></div>
	</div>
	<!-- end #header -->
	<div id="menu">
	</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	
	<div style="position: absolute; width: 632px; height: 230px; z-index: 1; left: 347px; top: 307px" id="layer1" class="style2">
		<strong><em><span class="style4">&nbsp;</span></em></strong><span class="style5"><em><strong>You 
		Have Been Successfully Registered</strong></em></span><span class="style3"><strong><em></em></strong></span><span class="style4"><br />
		&nbsp;<br />
		<span class="style3"><strong><em>
		
		<?php
$ui = $_POST["Text1"];
$un = $_POST["Text2"];
$pwd = $_POST["Password1"];
$gen = $_POST["Radio1"];
$sques = $_POST["Select1"];
$sans = $_POST["Text3"];
$img = 'default.jpg';
include("db.php");
$qry="insert into tbuser(userid,uname,pwd,gender,sques,sans,imgname) values('$ui','$un','$pwd','$gen','$sques','$sans','$img')";
mysqli_query($con,$qry) or die(mysqli_error($con));
?>
		<br><br>
		
		
		<a href="login.html">CLICK HERE TO 
		LOGIN</a></em></strong></span><br />
		</span></em></strong></span></div>
	<!-- end #menu -->
	<!-- end #page -->
	<br />
	<br />
	<br />
</div> 

<div id="footer-content">
</div>
<!-- end #footer -->

</body>
</html>
