<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays In PHP</title>
</head>
<body>
	<?php 

	function aBc()
	{
		echo "asdasd";

	}
	abc();
	die();
	$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perferendis voluptate laboriosam veritatis blanditiis similique, inventore recusandae deserunt ex culpa.";


	$explodedArray = explode(" ",$string);
	$implodedArray = implode(" ", $explodedArray);
	print_r($implodedArray);
	die();



	$arr = [0,58,20,11,70,44];
	$last = end($arr);
	echo $last;
	die();
	shuffle($arr);
	print_r($arr);

	$tictactoe = array(
		"abc",
		array("0", "X", "X" ),
		array("X", "0", "X" ),
		array("0", "0", "X" ),
	);
	echo count($tictactoe,true);
	die();
	$abc = is_array($tictactoe) ? "this is array": "not array";
	echo $abc;

die();



	foreach($tictactoe as $key => $value ){
		if(is_array($value)){
			foreach ($value as $key1 => $value1) {
				echo $value1 . " ";
			}	
		}else{
			echo $value;
		}


			echo "<br>";
	}




die();
	$array = array("a","b","c");
	$student = array(

			"name" => "Ahmed",
			"rollNo" => "66",
			"gender" => "M"
	);


	 while(list($key,$value) = each($array)){
	 	echo $key . " => " . $value . "<br>";
	 }
	// print_r($first);
	// print_r($student);
	// echo $student['name'];

	die();
	$array1 = array("a","b","c");

	$array[] = "Ahmed";
	$array[] = "Haseeb";
	// $array[100] = "asasd";

	// foreach($array as $key => $value){
	// 	echo $value;
	// 	echo "<br>";
	// }
	for($i=0;$i<count($array);$i++){
		echo $array[$i];
		echo "<br>";
	}
	?>
</body>
</html>