<?php
	header('HTTP/1.1 301 Moved Permanently');
	$newLocation = $_SERVER['SERVER_NAME'] . str_replace( '/index.php', '/', str_replace( 'resume', 'cv', $_SERVER['PHP_SELF']) );
	header("Location: http://". $newLocation );
/* 	if(preg_match('/fr/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'])){
		header("Location: http://". $_SERVER['SERVER_NAME']."/fr/cv/");
	}else{
 		header("Location: http://". $_SERVER['SERVER_NAME']."/en/cv/");
}*/
?>

<?php
	//include("../../resume/inc_index.php");
?>

