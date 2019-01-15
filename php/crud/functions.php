<?php 

if(isset($_POST['action']) AND $_POST['action'] == "save_cat"){
	$cat_name = $_POST['category'];
	$cat = new Categories;
	$cat->save_cat($cat_name);
}


if(isset($_GET['action']) AND $_GET['action'] == "del_cat"){
	$id = $_GET['del_id'];
	$cat = new Categories;
	$cat->del_cat($id);
}
if(isset($_POST['action']) AND $_POST['action'] == "update_cat"){
	$id = $_POST['id'];
	$cname = $_POST['category'];
	$cat = new Categories;
	$cat->update_cat($cname,$id);
}
?>