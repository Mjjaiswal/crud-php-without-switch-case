<?php
$id=$_REQUEST['$id'];
mysql_connect("localhost","root","")or die("no Connection");
mysql_select_db("democruddb")or die("no Database");
$query="delete from tblcrud where id=$id";
mysql_query($query);
header("Location:show.php")
?>
