<?php require_once("connection.php");



function is_login()
{
	if(isset($_SESSION['login']) AND $_SESSION['login'] == "true" ){
		return true;
	}else{
		false;
	}
}

function loginUser($row)
{
	$_SESSION['login'] = "true";
	$_SESSION['user'] = $row['name'];
	header('location:dashboard.php');
}

?>