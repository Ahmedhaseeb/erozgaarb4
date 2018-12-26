<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Loops</title>
</head>
<body>
	
	<h1 align="center">Loop In PHP</h1>

	<ul>
		<li>While</li>
		<li>do While</li>
		<li>for</li>
		<li>foreach</li>
	</ul>

<?php 
$x = 20;
$y = 2;


$z = (object)($x/$y);
print_r($z);

die();
$array = ["A","B","C","D","E"];
$tictactoe = array(
	"asdasdas",
	array("0", "X", "X" ),
	array("X", "0", "X" ),
	array("0", "0", "X" ),
);

foreach ($tictactoe as $value) {
	if(is_array($value)){
		foreach ($value as $value1) {
			echo $value1;
		}
	}else{
		echo $value;
	}
}






die();

for($i=0;$i<10;$i++){


	for($j=0;$j<5;$j++){

		if($j == 2){
			// break(2);
			continue(2);
		}
		echo "$i - $j <br>";
	}
	echo "External loop";
}

die();


$x = 0;
while ($x < 10) {
	$x++;
	continue;
	if( $x%2 == 0)
		{

			if($x == 4){
				$x++;
				continue;
			}
			echo $x;
		}
	$x++;
}





die();
$x = 0;

while ($x<20) {
	// break;
	if($x == 5 ){
		echo "I love abc";
	}else{
		echo "I love Pakistan<br>";
	}

	$x++;
}



$y = 200;
do{
	echo "I love Pakistan<br>";
	$y++;
}while($y<10);


 ?>




</body>
</html>