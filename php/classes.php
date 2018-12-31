<?php include_once("User.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Object Oriented Programming(OOP)</title>
</head>
<body>
	<?php 
		$x = 20;
		$user1 = new User("Ahmed","123");

		$user1->setName("abc");
		$user1->showName();
		// $user1->save_user();

		// echo $user1->password;

		$user2 = new User("ABC","456");

		// $user2->save_user();

		// $user1 = new User("abcasdasasd","123");
		// print_r($user1);
		// $user1->save_user();
		
		// $user2 = new User("Shoaib","456");
		// $user2->save_user();
		// print_r($user2);




		
	?>
</body>
</html>