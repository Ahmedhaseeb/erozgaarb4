<?php 
require_once "global.php";
// $database = new Database(DB_USERNAME,DB_PWD,DB_HOST,DB_NAME);
// $db = $database->conn;
if(isset($_GET['msg']) AND !empty($_GET['msg'])){
	echo $_GET['msg'];
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
	<h1 align="center">Add / Update / Delete - Category</h1>
<div class="spacer-2x"></div>

<div class="container">
	<div class="row">
		
		<div class="col-sm-6 offset-sm-3">
		
			<form action="" method="post">

				
				<div class="form-group">
					<input class="form-control" type="text" name="category" placeholder="Enter Category Name" />
					
				</div>
				<div class="form-group">
					<input class="btn btn-md btn-primary btn-block" type="submit" value="Save" />
				</div>
				<input type="hidden" name="action" value="save_cat">
				
			</form>
		
			
		</div>			

	</div>

	<div class="row">
		
		<div class="col-sm-6 offset-sm-3">
				<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>	
				<tbody>
					
				<?php 
						$cat = new Categories;
						$allCategories = $cat->getAllCat();

						foreach ($allCategories as $key => $value) {
echo <<< _END

<tr>
	<td>{$value['id']}</td>
	<td>{$value['name']}</td>
	<td> <a href="?action=del_cat&del_id={$value['id']}">Delete</a> / <a href="edit.php?action=edit_cat&cat_name={$value['name']}&cat_id={$value['id']}">Edit</a></td>
</tr>


_END;
				
						}
				 ?>

				</tbody>
				</table>



		</div>
	</div>
</div>






	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>