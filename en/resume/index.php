<?php
	header('HTTP/1.1 301 Moved Permanently');
	$newLocation = $_SERVER['SERVER_NAME'] . str_replace( '/index.php', '/', str_replace( 'resume', 'cv', $_SERVER['PHP_SELF']) );
	header("Location: http://". $newLocation );
?>

