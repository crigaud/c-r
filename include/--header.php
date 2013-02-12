
	<?php 
		// FUNCTION
		include_once("function.php");
				
		// LANGUAGE SELECTION
		$lang = explode('/', $_SERVER['PHP_SELF']);
		if( strcmp($lang[1], 'fr') == 0 ){
			include_once("fr/message.php");
			include_once("fr/resume.php");
		}else{
			include_once("en/message.php");
			include_once("en/resume.php");
		}
	?>
	
	<!-- ENCODING -->	
	<meta charset="UTF-8">

	<!-- DESIGN -->	
	<!--<link rel="home" title="Home" href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE.'/'?>" /> -->
	<link rel="shortcut icon" type="image/x-icon" href="http://<?php echo $_SERVER['SERVER_NAME']?>/favicon.png" />
	<link rel="stylesheet" media="screen" type="text/css" title="css" href="http://<?php echo $_SERVER['SERVER_NAME']?>/design.css" />

	
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']?>/include/function.js"></script>

	<!-- GENERAL -->
	<!--<meta name="owner" content="Christophe Rigaud" />-->
	<meta name="author" content="Christophe Rigaud" />
	<!--<meta name="name" content="Christophe Rigaud official website" />-->
