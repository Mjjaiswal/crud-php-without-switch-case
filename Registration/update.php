<?php
$id=$_REQUEST['id'];
//echo $id;
$name=$_POST['name'];
//echo $name;
$gender=$_POST['gender'];
//echo $gender;
$city=$_POST['city'];
//echo $city;
$address=$_POST['address'];
//echo $address;

mysql_connect("localhost","root","")or die("no Connection");
mysql_select_db("democruddb")or die("no Database");
$query="update tblcrud set name='$name',gender='$gender',city='$city',address='$address' where id='$id'";
$res=mysql_query($query);
header("location:show.php");
?>