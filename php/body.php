<?php 
require_once("header.php");

// print_r($_POST);



?>






<form method="post" action="data.php">

	<input type="text" name="username" value="ashdakjsdhakjshdkjas" placeholder="Enter Username" />
	<input type="password" name="password" placeholder="Enter Password" />
	<input type="submit" value="Login">

	<input type="checkbox" name="subjects[]"  value="eng" />
	<input type="checkbox" name="subjects[]"  value="urdu" />
	<input type="checkbox" name="subjects[]"  value="maths" />


	
	<select name="country[]" multiple="">
		<option value="1">Pakistan</option>
		<option value="2">USA</option>
		<option value="3">China</option>
	</select>
</form>



<?php
include_once("footer.php");
?>
