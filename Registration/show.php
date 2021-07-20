<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:login.php");
}

mysql_connect("localhost","root","")or die("no Connection");
mysql_select_db("democruddb")or die("no Database");
$query="select * from tblcrud ";
$res=mysql_query($query);
?>
<html>
<body>
<table align="center" border="1">
<tr>
<th>S.No.</th>
<th>Name</th>
<th>Gender</th>
<th>Email</th>
<th>City</th>
<th>Address</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['city'] ?></td>
<td><?php echo $row['address'] ?></td>
<td><a href="edit.php?$id=<?php echo $row['0'] ?>">Edit</a></td>
<td><a href="delete.php?$id=<?php echo $row['0'] ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>