
	<?php 



die();
	if(function_exists("ucfirst")){
		echo "function exists";
	}else{
		echo "Function does not exist";
	}

	die();

		// phpinfo();

	// $length = strlen(strrev("beesaHdemhA"));
	// echo $length;

		// echo str_repeat("Ahmed Haseeb", 5);
		// echo strtoupper("Ahmed Haseeb");
		// echo strtolower("AHMEDHASEEB");

		$string = "lorem asdasd ";

		function fix_names($n1,$n2,$n3){

			$n1 = ucfirst(strtolower($n1));
			$n2 = ucfirst(strtolower($n2));
			$n3 = ucfirst(strtolower($n3));

			return array($n1,$n2,$n3);
		}

		$names = fix_names("AhMeD","hAsEEb","ShoaIb"); 

		print_r($names);
		echo "<br>";




		// echo ucwords($string);

	 ?>
