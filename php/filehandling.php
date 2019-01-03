<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filehanding in PHP</title>
</head>
<body>
	<?php 


		echo file_get_contents("https://google.com");
		// $fh = fopen("test.txt","r+");
		// $line = fgets($fh);
		// echo $line;
		// fseek($fh,0,SEEK_CUR);
		// fwrite($fh,"555");
		// fclose($fh);
		// if(file_exists("Person.php")){
		// 	echo "File exist";
		// }else{
		// 	echo "File not exist";
		// }



		// $fh = fopen("test.txt","a");


		// fwrite($fh,"asdasfgfgfg\t\t\t\thfghghjghjg\r\nasdasdasdasd");			

		// fclose($fh);


		// $fh = fopen("test.txt", "r");
		// $data = fread($fh,1024);
		// echo $data;
		// fclose($fh);
		

		// $fh = fopen("test.txt", "r");
		// while($line = fgets($fh)){
		// 	echo $line . "<br>";
		// }
	
		// fclose($fh);



	// die();
		// if(!copy("test.txt","test1.txt")){
		// 	echo "failed to copy file";
		// }else{
		// 	echo "file copied";
		// }



		// if(file_exists("testttttt.txt")){
		// 	rename("testttttt.txt","test.txt");
		// }	

	// unlink("test.txt");
	?>
</body>
</html>