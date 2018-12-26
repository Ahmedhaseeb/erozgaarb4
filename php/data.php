<?php 
if(isset($_POST['username'])  && isset($_POST['password'])){

	$username =  $_POST['username'];
	// echo "<br>";
	$password  = $_POST['password'];

	$country = $_POST['country'];

	$subjects = $_POST['subjects'];

	
}
 ?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1><?= $username; ?></h1>

	<h2><?= $password; ?></h2>
	<h2><?php print_r($country); ?></h2>
	<h2><?php print_r($subjects); ?></h2>


 </body>
 </html>