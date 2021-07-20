<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:login.php");
}
?>
<html>
<body>
<h3>Welcome to profile</h3>
<a href="show.php">Show All Detail</a>
<a href="changepassword.php">Change Password</a>
<a href="logout.php">Logout</a>
</body>
</html>