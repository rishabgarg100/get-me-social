﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled 1</title>
<script type="text/javascript">
  function show()
  {
   var m = confirm("are you sure");
   if(m)
   {
    location.href="logout.php";
   }
   else
   {
     location.href="home.php";
   }
  }
</script>
</head>

<body onload="show()">

</body>

</html>
