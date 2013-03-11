<?php
	
	// URL split
	$url = explode('/', $_SERVER['PHP_SELF']);
	$domain = $_SERVER['SERVER_NAME'];
	if( !strcmp($url[1], 'index.php' ) == 0 ){$lang = $url[1];}else{$lang="en";}
	if( !strcmp($url[2], 'index.php' ) == 0 ){$section = $url[2];}else{$section="";}
	if( !strcmp($url[3], 'index.php' ) == 0 ){$subsection = $url[3];}else{$subsection="";}
	
	//echo "Debug echo in <head> ".$domain." ".$lang." ".$section." ".$subsection;
	
?>
