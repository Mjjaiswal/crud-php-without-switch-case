<?php
session_start();
echo "hii";
if($_SESSION['user']=="")
	
{
	session_destroy();
	header("location:login.php");
}
?>
