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
.style3 {
	text-align: left;
}
</style>
<script type="text/javascript">
	function validate()
	{// alert("hi");
	var name = document.myform.Text3.value;
	var flag = true;
	//alert(name);
	  document.getElementById('ul1').innerHTML ="";
	if (name == "")
	   {
	      // document.getElementById('td1').innerHTML="*";
	       document.getElementById('ul1').innerHTML="<li><b>SECURITY ANSWER CANNOT BE EMPTY</b></li>";
	       flag = false;
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
	<div style="position: absolute; width: 399px; height: 225px; z-index: 1; left: 423px; top: 307px" id="layer1" class="style2">
	        <?php
	            $uid = $_POST["Text1"];
	            include("db.php");
	            $qry = "select sques from tbuser where userid='$uid'";    
	            $result = mysqli_query($con,$qry) or die(mysqli_error($con));
	            $n = mysqli_num_rows($result);
	            if($n==0)
	            {
	            ?>
	            <b>INVALID USERID</b> <br><br>
	            <a href="login.html"> TRY AGAIN</a>
                <?php
	            }
	            else
	            {
	            $row = mysqli_fetch_row($result);
	            
	            ?>
	            	            <form method="post" action="forgot3.php" name="myform" onsubmit="return validate()">
									<table style="width: 100%">
										<tr>
											<td class="style3" style="width: 160px">
											USERID</td>
						<td class="style3">
						<input name="Text1" type="text" value="<?php echo $uid; ?>" readonly style="width: 216px; height: 25px ;"  />&nbsp;</td>
						</tr>
						<tr>
							<td class="style3" style="width: 160px; height: 26px">
							QUESTION</td>
						<td style="height: 26px" class="style3">
						<input name="Text2" type="text" value="<?php echo $row[0] ?>" readonly style="width: 216px; height: 25px" /></td>
						</tr>
						<tr>
							<td class="style3" style="width: 160px">ANSWER</td>
						<td class="style3">
						<input name="Text3" type="text"  style="width: 216px; height: 25px" />&nbsp;</td>
						</tr>
						<tr>
							<td style="width: 160px">&nbsp;</td>
						<td>
						<input name="Submit1" type="submit" value="submit" style="width: 92px; height: 34px" />&nbsp;</td>
						</tr>
					</table>
				</form>
	</div>
	<!-- end #menu -->
	<!-- end #page -->
	<br />
	<br />
	<br />
	<div style="position: absolute; width: 395px; height: 27px; z-index: 3; left: 424px; top: 529px" id="layer3">
	<ul id="ul1"></ul>
	</div>
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