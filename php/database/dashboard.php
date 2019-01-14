<?php require_once("connection.php");
if(isset($_GET['logout']) AND $_GET['logout'] == "1"){
	unset($_SESSION['login']);
	unset($_SESSION['user']);
	session_destroy();
}
if(!is_login()){
	header('location:login.php');
}
echo "Welcome - ". $_SESSION['user'];




?>


<a href="?logout=1">Logout</a>