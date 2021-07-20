 <?php
 session_start();
 $op=$_POST['op'];
 $cp=$_POST['cp'];
 $cnp=$_POST['cnp'];
 $e=$_SESSION['user'];
mysql_connect("localhost","root","") or die("connection error");
mysql_select_db("democruddb") or die("database not connect");
$q="select pass from tblcrud where email='$e'";
$res=mysql_query($q);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pp=$row['pass'];
	if($pp==$op)
	{
		if($op==$cp)
		{
			echo "<script>alert('ERROR : old password and new password are same');window.location.href='changepassword.php';</script>";
		}
		else if($cp==$cnp)
		{   
			$query="update tblcrud set pass='$cp' where email='$e'";
			mysql_query($query);
			session_destroy();
			echo "<script>alert('successfully change');window.location.href='login.php';</script>";
		}
		else
		{
			echo "<script>alert('new password and confirm new password does not  match');window.location.href='changepassword.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('old password does not  match from database password');window.location.href='changepassword.php';</script>";
	}
}
else
{
	echo "email or query wrong";
}
 ?>