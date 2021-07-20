<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
mysql_connect("localhost","root","")or die("no Connection");
mysql_select_db("democruddb")or die("no Database");
$query="select * from tblcrud where email='$email'and pass='$pass'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['user']=$email;
	header("Location:profile.php");
}
else
{
	header("Location:login.php");
}
?>