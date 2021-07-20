<?php
$name=$_POST['name'];
//echo $name;
$gender=$_POST['gender'];
//echo $gender;
$email=$_POST['email'];
$city=$_POST['city'];
//echo $city;
$address=$_POST['address'];
//echo $address;
$pass=$_POST['pass'];

mysql_connect("localhost","root","")or die("no Connection");
mysql_select_db("democruddb")or die("no Database");
$query="insert into tblcrud	(name,gender,email,city,address,pass) values('$name','$gender','$email','$city','$address','$pass')";
mysql_query($query);
//echo "Data Save";
echo "<script>alert('ERROR : Registration Successfull');window.location.href='login.php';</script>";
?>