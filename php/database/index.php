<?php require_once("connection.php");
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		deleteUser($id);
	}
 ?>

 <a href="?abc=1">asdassd</a>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
<form action="" method="post">
	<input type="text" name="email" placeholder="enter email" />
	<input type="password" name="pwd" placeholder="enter your password" />
	<input type="submit" value="Login" />

</form>
<?php 
	function deleteUser($id)
	{
		global $db;
		try {
			$q = "DELETE FROM users where id = ?";
			$stmt = $db->prepare($q);
			$response = $stmt->execute(array($id));
			if($response){
				echo "Record Deleted";
			}else{
				"Something is wrong";
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}

$q = "SELECT * FROM users";
$stmt =  $db->query($q);

?>
<table>
<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
<?php
while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
?>

<tr>
	<td><?php echo $row->id; ?></td>
	<td><?php echo $row->name; ?></td>
	<td><a href="?del=<?php echo $row->id; ?>">Delete</a></td>
</tr>


<?php
}

?>
</tbody>
</table>

<?php






if(isset($_POST['email']) AND isset($_POST['pwd'])):
	$email  = $_POST['email'];
	$pwd  = $_POST['pwd'];
	
	try {
		$q = "SELECT * FROM users where email = ? AND pwd = ?";
		$stmt = $db->prepare($q);
		$response = $stmt->execute(array($email,$pwd));	
		if($stmt->rowCount() > 0){
			while ( $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo "Welcome " . $row['name'] . "<br>";
			}
			
		}else{
			echo "Invalid Login Details";
		}
			

		// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// foreach ($data as $key => $value) {
		// 	echo $value['name'];
		// 	echo "<br>";
		// }
		
	} catch (PDOException $ex) {
			echo $ex->getMessage();
	}

endif;
?>


</body>
</html>