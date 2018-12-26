<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// switch (variable) {
	// 	case 'value':
	// 		# code...
	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }

// echo `dir`;

function run()
{
	Static $count = 1;
	$count++;
	echo $count;
	echo "<br>";
}


run();
run();
die();
// $x = true ? 20:0;
// echo $x;




$val1 = 200;


function doSomeWork()
{
	global $val1;
	echo $val1;
	return;
	$array = ["1","asd","sdfs"];

	return $array;
}




function asdad()
{
	global $val1;
	echo $val1;
}
asdad();
$returnVal = doSomeWork();
echo "<pre>";
print_r($returnVal);
echo "</pre>";



die();
function calculate($num1,$num2,$op = "+"){
	if($op == "+"){
		return $num1 + $num2;
	}
	if($op == "-"){
		return $num1 - $num2;
	}
	if($op == "*"){
		return $num1 * $num2;
	}
	if($op == "/"){
		return $num1 / $num2;
	}
	if($op == "%"){
		return $num1 % $num2;
	}

	echo "Invalid Operator";
}
$num1 = 20;
$num2 = 50;
echo calculate($num1,$num2);




die();
function today()
{
	return date("y-m-d");
}
echo today();

die();

function sum($num1, $num2)
{
	return $num1 + $num2;
}

$sum = sum(2,9);


echo $sum;



die();

 2>6 ? print("true") : print("false");


die();
		if( !true ){

			echo "abc";
		}

		$x = 10;
		$x += 20; // $x = $x + 20;
		// echo $x;


		// echo $x--;

		// echo $x;


		$msg = "aasdasda " . $x . "        asdasdasds";
		$msg .= 2000;
		// echo $msg;


		$name = "Ahmed";
		$string = "my name 

asdasdasdsas
asdasdasdasd
asdasd


<h1>asdasdas</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi necessitatibus excepturi labore officia dicta facere officiis asperiores, ea cupiditate! Eveniet!</p>
		is $name";
		// echo $string;


		$text = "It's my \nbirthday";

		echo $text;

echo <<<_END
asdasdasd
as
das $text
d
as
da
sd
asd
_END;

$number = 2000;

echo "<br>";
echo substr($text, 5,2);


define("NAME", "Ahmed Haseeb");


echo NAME;

echo "<br>";
$x = 200 + print(-200);

echo $x;
die();
echo __LINE__;

print "asdasads";

	?>	
</body>
</html>