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
</style>
<script type="text/javascript">  
function validate(){  
var firstpassword=document.myform.Password1.value;  
var secondpassword=document.myform.Password2.value;  
var flag = true;
document.getElementById('ul1').innerHTML ="";
  if (firstpassword == "")
	   {
	       document.getElementById('td1').innerHTML="*";
	       document.getElementById('ul1').innerHTML="<li>PASSWORD CANNOT BE EMPTY</li>";
	       flag = false;
	   }
	if (secondpassword == "")
	   {
	        document.getElementById('td2').innerHTML="*";
	        document.getElementById('ul1').innerHTML +="<li>CONFIRM PASSWORD CANNOT BE EMPTY</li>";
	        flag = false;
	   }   

if(firstpassword==secondpassword){ }  
else{  
document.getElementById('ul1').innerHTML +="<li>PASSWORD MUST BE SAME</li>";
 
flag= false;  
}  
return flag;
}  
</script>  
  
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
	<div style="position: absolute; width: 459px; height: 230px; z-index: 1; left: 441px; top: 307px" id="layer1" class="style2">
	
	<?php
	            $uid = $_POST["Text1"];
	            $ans = $_POST["Text3"];
	            include("db.php");
	            $qry = "select userid from tbuser where userid='$uid' and sans='$ans'";    
	            $result = mysqli_query($con,$qry) or die(mysqli_error($con));
	            $n = mysqli_num_rows($result);
	            echo $n;
	            if($n==0)
	            {
	            ?>
	            <b>INVALID SECURITY ANSWER</b> <br><br>
	            <a href="login.html"> TRY AGAIN</a>
                <?php
	            }
	            else
	            {
	            $row = mysqli_fetch_row($result);
	            
	            ?>

	
		<form method="post" action="forgot4.php" name="myform" onsubmit="return validate()" >
			<table style="width: 98%">
				<tr>
					<td style="width: 297px">YOUR USERID</td>
					<td style="width: 205px">
					<input name="Text1" value="<?php echo $uid ?>" readonly type="text" style="width: 185px; height: 26px" />&nbsp;</td>
					<td >&nbsp;</td>
				</tr>
				<tr>
					<td style="width: 297px">NEW PASSWORD</td>
					<td style="width: 205px">
					<input name="Password1" type="password" style="width: 185px; height: 26px" />&nbsp;</td>
					<td id="td1">&nbsp;</td>
				</tr>
				<tr>
					<td style="width: 297px">CONFIRM&nbsp; PASSWORD</td>
					<td style="width: 205px">
					<input name="Password2" type="password" style="width: 185px; height: 26px;" />&nbsp;</td>
					<td id="td2">&nbsp;</td>
				</tr>
				<tr>
					<td style="width: 297px">&nbsp;</td>
					<td style="width: 205px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="Submit1" type="submit" value="UPDATE" style="width: 107px; height: 30px">&nbsp;&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
			<div style="position: absolute; width: 455px; height: 70px; z-index: 1; left: 2px; top: 236px" id="layer3">
			<ul id="ul1"></ul>
			</div>
		</form>
		</div>
	<!-- end #menu -->
	<!-- end #page -->
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
</div>
<div id="footer-content">
</div>
<!-- end #footer -->
</body>
</html>
                <?php
                   }                
                ?>