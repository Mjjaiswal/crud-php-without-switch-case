<?php

?>
<html>
<body>
	<h2>Registration Form</h2>
	<form action="rcode.php" method="post">
	Enter User Name: <input type="text" name="name" required=""/><br/>
	Gender : <input type="radio" name="gender" value="Male"/>Male
	<input type="radio" name="gender" value="Female"/>Female<br/>
	Email : <input type="email" name="email" required=""/><br/>
	City : <select name="city" required="">
	<option>----Select City----</option>
	<option>Deoria</option>
	<option>Gorakhpur</option>
	<option>Lucknow</option>
	</select><br/>
	Address : <textarea name="address"></textarea><br/>
	Password : <input type="password" name="pass" required=""/><br/>
	<input type="submit" value="Submit">
	</form>
	
</body>
</html>