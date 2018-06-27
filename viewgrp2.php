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
	text-align: center;
	font-size: xx-large;
}
#a3{
 color:white;
 text-decoration: none;
}
</style>
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
			<li ><a href="home.php">Home</a></li>
			<li><a id="a2" href="friends.php">Friends</a></li>
			<li class="current_page_item"><a id="a2" href="group.php">Group</a></li>
			<li><a id="a2" href="messages.php">Messages</a></li>
			<li><a id="a2" href="logout.php">Logout</a></li>
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
		<div style="position: absolute; width: 651px; height: 575px; z-index: 9; left: 458px; top: 338px;overflow:scroll" id="layer20">
			<?php
			include("db.php");
			$gid = $_GET["gid"];
			$qry = "select * from tbgroup where groupid = $gid";
			$result = mysqli_query($con,$qry) or die(mysqli_error($con));
			$row = mysqli_fetch_row($result);
			?>
						<div style="position: absolute; width: 276px; height: 233px; z-index: 1; left: 39px; top: 12px" id="layer21">
				<img src="<?php echo $row[4]; ?>"  width="266" height="234"/>
				</div>
			<div style="position: absolute; width: 288px; height: 100px; z-index: 2; left: 350px; top: 75px" id="layer22" class="style7">
				<?php echo $row[1]; ?></div>
			<div style="position: absolute; width: 257px; height: 33px; z-index: 3; left: 357px; top: 164px" id="layer23">
				CREATED BY<a href="viewprf.php?id= <?php echo $row[2]; ?>s"> <?php echo $row[2]; ?></a></div>
		
			<div style="position: absolute; width: 574px; height: 47px; z-index: 4; left: 41px; top: 266px" id="layer24">
			<?php echo $row[3];  ?>
			</div>
		<?php
		if($ui == $row[2])
		{
		?>
		<div class="style6"  style="position: absolute; width: 304px; height: 52px; z-index: 8; left: 205px; top: 479px;" id="layer25">
		<br />
        YOU ARE OWNER OF THE GROUP
        </div>
		<?php
		}
		else
		{
         $qry = "select * from tbgroupmember where userid = '$ui' and groupid = $gid";
         $result = mysqli_query($con,$qry) or die(myqli_error($con));
         $n = mysqli_num_rows($result);
		if($n==0)
		{ ?>
		<div class="style6"  style="position: absolute; width: 305px; height: 52px; z-index: 8; left: 205px; top: 479px;" id="layer25">
		<br />
		<a id="a1" href="joingrp.php?gid=<?php echo $gid; ?>">JOIN GROUP</a></div>
		

	<?php 
		}
		else
		{
		?>		
		<div class="style6"  style="position: absolute; width: 303px; height: 52px; z-index: 8; left: 206px; top: 476px;" id="layer25">
		<br />
        YOU HAVE ALREADY JOINED THE GROUP
        </div>
		<?php
		} 
		}
        ?>
			<div style="position: absolute; width: 569px; height: 111px; z-index: 9; left: 42px; top: 346px; overflow:scroll" id="layer26">
			 

				
				 <?php
          
           $qry = "select a.userid,b.imgname,b.userid from tbgroupmember a,tbuser b where a.groupid = $gid and a.userid = b.userid";
           $result = mysqli_query($con,$qry) or die(mysqli_error($con));
           echo "<table>";
           
                $counter=0; 
                 echo "<tr>";
           while ( $row = mysqli_fetch_row($result) )
           {
           $counter++;
          
           echo "<td>";
           echo "<img height=100 width=100 src='$row[1]' >";
           echo "</td><td>";
           echo "<a href=viewprf.php?id=$row[0]> "; 
           echo "$row[0] </a>";
           echo "</td>";
           if($counter>3)
           {
            echo "</tr><tr>";
            $counter = 0;
           }          
          }
          
      
           echo "</table>";
		

           ?>
			</div>
			<div style="position: absolute; width: 174px; height: 20px; z-index: 10; left: 44px; top: 320px" id="layer27">
				VIEW GROUP MEMBERS</div>
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
