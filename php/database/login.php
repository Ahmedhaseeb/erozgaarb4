<?php require_once("connection.php"); 
if(is_login()){
	// echo '<meta http-equiv="refresh" content="0;url=dashboard.php" />';
	header('location:dashboard.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<?php 
if(isset($_POST['email']) AND isset($_POST['pwd'])){
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	
	try {
		$q = "SELECT * FROM users WHERE email = ? AND pwd = ?";
		$stmt = $db->prepare($q);
		$stmt->execute(array($email,$pwd));
		if($stmt->rowCount()>0){
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			loginUser($row);
		}else{
			echo "Invalid Login Details";
		}
			// $q = "hi hihi ";
			// echo $q;
			// $stmt = $db->query($q);
			// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			// 	echo "Welcome " . $row['name'] . "<br>";
			// }

	} catch (PDOException $e) {
		echo $e->getMessage();
	}

	// print_r($stmt);	
	// print_r($row);


}

?>


	<h1 align="center">Login Form</h1>
	<form action="" method="post">
		<input type="text" name="email" placeholder="Enter Your Email Address" />

		<input type="password" name="pwd" placeholder="enter your password here" />

		<input type="submit" value="Login" />
	</form>




</body>
</html>