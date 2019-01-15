<?php 

/**
* 
*/
class Database
{
	public $conn;
	function __construct($un,$pwd,$host,$dbname)
	{
		$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $un, $pwd);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
		$this->conn = $db;
	}

}


?>