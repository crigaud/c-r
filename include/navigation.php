<?php
	
	// URL split
	$url = explode('/', $_SERVER['PHP_SELF']);
	$domain = $_SERVER['SERVER_NAME'];
	if( !strcmp($url[1], 'index.php' ) == 0 ){$lang = $url[1];}
	if( !strcmp($url[2], 'index.php' ) == 0 ){$section = $url[2];}else{$section="";}
	if( !strcmp($url[3], 'index.php' ) == 0 ){$subsection = $url[3];}else{$subsection="";}
	
	//echo "Debug echo in <head> ".$domain." ".$lang." ".$section." ".$subsection;
	
	
	//$lang = explode('/', $_SERVER['PHP_SELF']);
	if( strcmp($lang, 'fr') == 0 ){
		include($_SERVER['DOCUMENT_ROOT']."/include/message/fr_global.php");	
		if( strcmp($section, 'cv') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/fr_resume.php');
		}else if( strcmp($section, 'blog') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/fr_article.php');
		}else if( strcmp($section, 'blog') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/fr_tag.php');
		}
	}else{
		include($_SERVER['DOCUMENT_ROOT']."/include/message/en_global.php");	
		if( strcmp($section, 'cv') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/en_resume.php');
		}else if( strcmp($section, 'blog') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/en_article.php');
		}else if( strcmp($section, 'blog') == 0 ){
			include($_SERVER['DOCUMENT_ROOT'].'/include/message/en_tag.php');
		}
	}
	
?>
