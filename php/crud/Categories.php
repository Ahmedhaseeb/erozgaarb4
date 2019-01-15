<?php 


/**
* 
*/
class Categories
{
	private $db;
	
	function __construct()
	{
		$database = new Database(DB_USERNAME,DB_PWD,DB_HOST,DB_NAME);
		$db = $database->conn;
		$this->db = $db;
	
	}

	function save_cat($cname){
		

		$q = "INSERT INTO `categories`(`name`) VALUE(?)";
		$stmt = $this->db->prepare($q);

		$response = $stmt->execute(array($cname));
		if($response){
			echo "Category Inserted";
		}else{
			echo "Failed To insert Category";
		}

	}



	public function del_cat($id)
	{
		$q = "DELETE FROM `categories` WHERE id = ?";
		$db = $this->db;
		$stmt = $db->prepare($q);
		$response = $stmt->execute(array($id));
		if($response){
			echo "Category Deleted";
		}else{
			echo "Failed to delete category";
		}
	}

	public function getAllCat()
	{
		$q = "SELECT * FROM categories";

		$db = $this->db;


		$stmt = $db->query($q);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function update_cat($cname,$id)
	{
		$q = "Update categories  set name = ? where id = ?";

		$db = $this->db;


		$stmt = $db->prepare($q);

		$response =  $stmt->execute(array($cname,$id));
		if($response){
			$msg =  rawurlencode("Category Updated");
			header("location:index.php?msg=$msg");
		}else{
			echo "Failed to update category";
		}
	}
}
?>