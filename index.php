<?
	if(preg_match('/fr/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'])){
		header("Location: http://". $_SERVER['SERVER_NAME']."/fr/");
	}else{
		header("Location: http://". $_SERVER['SERVER_NAME']."/en/");
	}
?>

