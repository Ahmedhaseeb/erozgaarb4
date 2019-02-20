	<?php
		set_time_limit(0);
		$filename = "file_name_here.zip"; // your file will be save with this name example: abc.zip
		$download_from = "link_of_file_to_download"; //example: http://abc.com/backup.zip
		//This is the file where we save the    information
		$fp = fopen (dirname(__FILE__) . '/'. $filename, 'w+');
		//Here is the file we are downloading, replace spaces with %20
		$ch = curl_init(str_replace(" ","%20",$download_from));
		curl_setopt($ch, CURLOPT_TIMEOUT, 50);
		// write curl response to file
		curl_setopt($ch, CURLOPT_FILE, $fp); 
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		// get curl response
		curl_exec($ch); 
		curl_close($ch);
		fclose($fp);
	?>

