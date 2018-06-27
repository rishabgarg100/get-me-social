<?php
$ui = $_POST["Text1"];
$pwd = $_POST["Password1"];
include("db.php");
$qry = " select uname,imgname from tbuser where userid='$ui' and pwd='$pwd' ";
$result = mysqli_query($con,$qry) or die(mysqli_error($con));
$n = mysqli_num_rows($result);
if($n==0)
{
   header("location: invalid.html");
}
else
{
   $row = mysqli_fetch_row($result);
   session_start();
   $_SESSION["uid"] = $ui;
   $_SESSION["uname"] = $row[0];
   $_SESSION["uimg"] = $row[1];
   //echo "<img src=$_SESSION[uimg]>";
   header("location: home.php");
}
	            

?>