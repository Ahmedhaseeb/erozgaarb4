<?php
	// Enter you file path below
	$file_to_download = "enter_file_url_here_to_download";
	define("DOWNLOAD_FROM", $file_to_download);
	set_time_limit(0);
	$timeout = 50; // increase the timeout value if your file size is big.
	$config['useragent'] = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';
	$filename = basename(DOWNLOAD_FROM);
	$fp = fopen (dirname(__FILE__) . '/'. $filename, 'w+');	
	try {
		$ch = curl_init(str_replace(" ","%20",DOWNLOAD_FROM));
		curl_setopt($ch, CURLOPT_USERAGENT, $config['useragent']);
		curl_setopt($ch, CURLOPT_REFERER, 'https://www.bing.com/');
		curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_FILE, $fp); 
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_exec($ch); 
		curl_close($ch);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	fclose($fp);
?>
