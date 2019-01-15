<?php 
require_once 'global.php';

if(!(isset($_GET['action']) AND $_GET['action'] == "edit_cat")){
	echo "To few parameters";
	exit();
}else{

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD - PHP</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/custom.css" />
</head>
<body>
<div class="spacer-2x"></div>

 	<div class="container">
 		<div class="row">
		
			<div class="col-sm-6 offset-sm-3">
			
				<form action="" method="post">

					
					<div class="form-group">
						<input class="form-control" type="text" value="<?php echo $_GET['cat_name']; ?>" name="category" />
						
					</div>

					<input type="hidden" name="id" value="<?php echo $_GET['cat_id']; ?>" />
					<div class="form-group">
						<input class="btn btn-lg btn-primary" type="submit" value="Save" />
					</div>
					<input type="hidden" name="action" value="update_cat" />
					
				</form>
			
				
			</div>			

 	</div>

	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>