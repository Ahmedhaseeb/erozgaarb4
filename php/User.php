<?php
class User{
	public $name,$password;

	function __construct($n="",$p=""){

		$this->name = $n;
		$this->password = $p;
	}


	function save_user()
	{
		echo $this->name;
		echo "<br>";
		echo "User Saved";
		echo "<br>";
	}

}

?>