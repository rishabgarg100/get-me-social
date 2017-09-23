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
<?php
         session_start();
         $ui = $_SESSION['uid'];
         $un = $_SESSION['uname'];
         $img = $_SESSION['uimg'];
    ?>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>EarthlingTwo by Free CSS Templates</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
.style1 {
	font-size: 36pt;
	color: #3D2A0B;
	font-family: "Comic Sans MS";
	text-decoration: underline;
}
.style2 {
	margin-top: 0;

}
.style3 {
	margin-right: 0px;
}
.abc{
	background-image:url('images/img05.jpg');
	position:relative;
	color:white;
	text-decoration:none
	
}
.style6 {
	background-image: url('images/img05.jpg');
	position: relative;
	color: white;
	text-align: center;
	text-decoration:none;
	
}
#a1{
 color:white;
 text-decoration: none;
}
#a1:hover{
	font-size:large;
}
.style7 {
	font-size: x-large;
}
#a3{
 color:white;
 text-decoration: none;
}
.style8 {
	font-size: large;
}
</style>
<script type="text/javascript">
function myFunction() {

alert("DONE");

    }
</script>

</head>
<body>
	
<div id="wrapper">
	<div id="header" style="height: 232px">
		<div style="position: absolute; width: 443px; height: 89px; z-index: 2; left: 81px; top: 52px" id="layer2" class="style1">
			<strong><em>GET&nbsp; ME SOCIAL</em></strong></div>
	</div>
	<!-- end #header -->
	<div id="menu" class="style2" style="height: 64px">
		<ul>
			<li class="current_page_item"><a href="home.php">Home</a></li>
			<li><a id="a2" href="friends.php">Friends</a></li>
			<li><a id="a2" href="group.php">Group</a></li>
			<li><a id="a2" href="messages.php">Messages</a></li>
			<li><a id="a2" href="l1.php"  >Logout</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="content" style="width: 206px; height: 186px" class="style3">
			<div id="banner" style="width: 180px; height: 154px">
				<img src="<?php echo $img; ?>" alt="" width="181" height="149" />
				
				</div>
				<b>WELCOME <?php echo $_SESSION["uid"]; ?> </b>
			<div style="clear: both; height: 0px;">
		<div class="style6"  style="position: absolute; width: 201px; height: 52px; z-index: 8; left: 227px; top: 804px;" id="layer19">
		<br />
		<a id="a1" href="editsec.php">SECURITY SETTING</a></div>
				&nbsp;<div style="position: absolute; width: 201px; height: 406px; z-index: 3; left: 227px; top: 541px" id="layer3">
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
				</div>
		<div class="style6"  style="position: absolute; width: 201px; height: 52px; z-index: 8; left: 227px; top: 652px;" id="layer17">
		<br />
		<a id="a1" href="editpwd.php">EDIT PASSWORD</a></div>
			</div>
		</div>
		<br />
		<br />
		<div class="style6"  style="position: absolute; width: 201px; height: 52px; z-index: 8; left: 227px; top: 576px;" id="layer16">
		<br />
		<a id="a1" href="editprf.php">EDIT PROFILE</a></div>
		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div style="position: absolute; width: 582px; height: 574px; z-index: 9; left: 457px; top: 339px" id="layer20" class="style7">
		<div style="position: absolute; width: 591px; height: 429px; z-index: 3; left: 9px; top: 153px; overflow:scroll" id="layer24">
			<?php
			include("db.php");
			$qry = "select * from tbimage  ORDER BY sno desc ";
			$result = mysqli_query($con,$qry) or die(mysqli_error($con));
            echo "<table>";
            
            while($row = mysqli_fetch_row($result))
            {
            if($row[1] == $ui)
            { $row[1] ="YOU"; }
            ?>
            <tr>
            
            <td><?php echo $row[1]; ?> &nbsp; uploaded image<br/><small><small><?php echo $row[3]; ?><br/> <?php echo $row[4]; ?></small></small></td>
            <td><img src="<?php echo $row[2]; ?>" width="200" height="200" /> </td>
            <td><a href="likeimg.php?imgid=<?php echo$row[0]; ?>">like</a> </td>
             </tr>
             
            <?php
           
			}
			echo "</table>";
			?>
			</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="position: absolute; width: 214px; height: 42px; z-index: 2; left: 380px; top: 32px" id="layer22">
		<div class="style6"  style="position: absolute; width: 192px; height: 30px; z-index: 8; left: 9px; top: 5px;" id="layer23">
		<a id="a3" href="viewgal.php"> VIEW GALLERY</a></div>
			</div>
&nbsp;<div style="position: absolute; width: 437px; height: 118px; z-index: 1; left: 78px; top: 0px" id="layer21">
				<span class="style8">NO OF FRIENDS 
				<?php
				//include ("db.php");
				$qry = "select * from tbfriend where userid ='$ui' and status = 1";
				$result = mysqli_query($con,$qry) or die(mysqli_error($con));
				$row = mysqli_fetch_row($result);
				$count = mysqli_num_rows($result);
				echo "        &nbsp  ".$count;
				?>
				
				<br />
				<br />
				FRIEND
				REQUEST PENDING 
				<?php
				//include ("db.php");
				$qry = "select * from tbfriend where friendid ='$ui' and status = 0";
				$result = mysqli_query($con,$qry) or die(mysqli_error($con));
				$row = mysqli_fetch_row($result);
				$count = mysqli_num_rows($result);
				echo "        &nbsp  ".$count;
				?>
			
				<br />
				<br />
				GROUPS JOINED
			<?php
				//include ("db.php");
				$qry = "select * from tbgroupmember where userid ='$ui'";
				$result = mysqli_query($con,$qry) or die(mysqli_error($con));
				$row = mysqli_fetch_row($result);
				$count = mysqli_num_rows($result);
				echo "        &nbsp  ".$count;
				?></span>

				</div>
			</div>
		<br />
		&nbsp;&nbsp;<br />
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
		<br />
		<br />
		<br />
		<br />
		<br />
		<div class="style6"  style="position: absolute; width: 201px; height: 52px; z-index: 8; left: 227px; top: 728px;" id="layer18">
		<br />
		<a id="a1" href="editpic.php">EDIT PICTURE</a></div>
		<br />
		<br />
		<br />
		<br />
		<!-- end #content -->
		<!-- end #sidebar -->
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
	</div>
	<!-- end #page -->
</div>
<div id="footer-content">
	s<div class="column1">
		<h2>Terms And Conditions</h2>
		<p>All rights reserved. Any use by you of the website
		<a href="http://www.getmesocial.com">www.getmesocial.com</a> is 
		conditional upon your acceptance of these Terms and Conditions, 
		including our Privacy Policy. Your use of the Site indicates that you 
		accept these Terms &amp; Conditions, regardless of whether or not you choose 
		to register with us. We reserve the right to amend these Terms &amp; 
		Conditions from time to time without notice and at our discretion.&nbsp; </p>
	</div>
	<div class="column2">
		<ul class="list">
			<li>IF YOU DO NOT ACCEPT THESE TERMS &amp; CONDITIONS. DO NOT USE THIS 
			WEBSITE. THIS NOTICE IS ISSUED BY THE DEER INITIATIVE. THE SERVICES 
			BY THIS WEBSITE ARE INTENDED FOR PERSONAL USE ONLY. YOU CAN CONTACT 
			THE DEVELOPERS FOR BUSINESS OR OTHER PURPOSES.</li>
		</ul>
	</div>
</div>
<div id="footer">
	<p> (c) 2017 getmesocial.com. Design by Er Rishab</p>
</div>
<!-- end #footer -->
</body>
</html>
