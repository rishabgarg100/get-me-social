<?php
define('DB_HOST','localhost');
define('DB_NAME','dbsocial');
define('DB_USER','root');
define('DB_PASS','');
$con = @mysqli_connect(DB_HOST,DB_USER,DB_PASS)or die(mysqli_connect_error());
mysqli_select_db($con,DB_NAME) or die(mysqli_error($con));
?>