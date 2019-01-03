<?php
class User{
	private $name,$password;

	static $sp = "abc";
	const ENGLISH = 0;
	const URDU = 1;

	static function userRegistered()
	{
		return self::$sp;
		echo self::URDU;
		// echo "You have been registered";
	}
	function __construct($n="",$p=""){
		$this->name = $n;
		$this->password = $p;
	}
	function __destruct()
	{
		// echo __METHOD__;
		// echo __CLASS__;
		// echo "<br>";
		echo $this->name . " going to destroy<br>";
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