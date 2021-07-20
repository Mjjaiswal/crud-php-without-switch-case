<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:login.php");
}
?>
<html>
<head>
</head>
<body>
<form action="chancode.php" method="post">
Old Password:
<input type="text" name="op"/><br/>
new Password:
<input type="text" name="cp"/><br/>
confirm Password:
<input type="text" name="cnp"/><br/>
<input type="submit" value="change"/>
</form>
</body>
</html>