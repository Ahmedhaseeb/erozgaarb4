<?php
class User{
	private $name,$password;

	function __construct($n="",$p=""){
		$this->name = $n;
		$this->password = $p;
	}


	public function save_user()
		{
			echo $this->name . " saved<br>";
		}
	public function showName()
	{
		echo $this->name;
	}


	public function setName($name)
	{
		$this->name = $name;
	}

}

?>