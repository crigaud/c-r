<?php
	
	// URL split
	$url = explode('/', $_SERVER['PHP_SELF']);
	$domain = $_SERVER['SERVER_NAME'];
	if( !strcmp($url[1], 'index.php' ) == 0 ){
		$lang = $url[1];
	}else{
		//Check browser language
		$language = $_SERVER["HTTP_ACCEPT_LANGUAGE"];//http_negotiate_language($langs, $result);
		$set_lang = explode(',', $language);
		//print substr($set_lang[0],0,2)
		if( substr($set_lang[0],0,2) == 'fr'){
			$lang="fr";
		}else{
			$lang="en";
		};
		
	}
	if( !strcmp($url[2], 'index.php' ) == 0 ){$section = $url[2];}else{$section="";}
	if( !strcmp($url[3], 'index.php' ) == 0 ){$subsection = $url[3];}else{$subsection="";}
	if( !strcmp($url[4], 'index.php' ) == 0 ){$subsubsection = $url[4];}else{$subsubsection="";}
	
	//echo "Debug echo in <head> ".$domain." ".$lang." ".$section." ".$subsection." ".$subsubsection;
	
?>
