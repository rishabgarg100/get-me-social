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
	text-align: center;
	font-size: large;
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
	<div style="position: absolute; width: 399px; height: 230px; z-index: 1; left: 423px; top: 307px" id="layer1" class="style2">
	<?php
	  include("db.php");
	  $uid=$_POST["Text1"];
	  $pwd=$_POST["Password1"];
	  $qry = "update tbuser set pwd='$pwd' where userid='$uid' ";
	  mysqli_query($con,$qry) or die(mysqli_error($con));
	?>	
	<b>YOUR PASSWORD HAS BEED UPDATED SUCCESFULLY</b><br><br>
	<a href="login.html"> CLICK TO LOGIN</a>

		</div>
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