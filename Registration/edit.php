<?php
$id=$_REQUEST['$id'];
mysql_connect("localhost","root","")or die("no Connection");
mysql_select_db("democruddb")or die("no Database");
$query="select * from tblcrud where id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<body>
	<form action="update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
	Enter User Name: <input type="text" name="name" value="<?php echo $row['name']?>" required=""/><br/>
	Gender : <input type="radio" name="gender" value="Male"
	<?php
	if($row['gender']=="Male"){echo 'checked';}
	?>
	/>Male
	<input type="radio" name="gender" value="Female"
	<?php
	if($row['gender']=="Female"){echo 'checked';}
	?>
	/>Female<br/>
	City : <select name="city" value="<?php echo $row['city']?>" required="">
	<option>----Select City----</option>
	<option>Deoria</option>
	<option>Gorakhpur</option>
	<option>Lucknow</option>
	</select><br/>
	Address : <textarea name="address" value="<?php echo $row['address']?>"></textarea><br/>
	<input type="submit" value="Submit">
	</form>
	<?php
	}
	?>
	</body>
	</html>

