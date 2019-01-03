<?php 

class Person{


	protected $name;
	protected $age;
	protected $gender;
	protected $height;
	protected $education;

	function __construct($n,$age,$gender,$h,$edu)
	{
		$this->name = $n;
		$this->age = $age;
		$this->gender = $gender;
		$this->height = $h;
		$this->education = $edu;
	}

	public function test()
	{
		echo "I am ". __CLASS__. " class function";
	}


	final public function copyrights()
	{
		echo "All right's Reserved &copy; Designed And Develop By ABC";
	}

}

class Teacher extends Person{

	private $specialist;


	function __construct($spec)
	{
		parent::__construct("ABC","21","M","1212","XYZ");
		$this->specialist = $spec;
	}
	public function test()
	{	
		parent::test();
		echo "I am ". __CLASS__. " class function";
	}
	// public function copyrights()
	// {
	// 	echo "All right's Reserved &copy; Designed And Develop By XYZ";
	// }
}



class Doctor extends Person{
	private $specialist;


}	
?>