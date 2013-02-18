
	<?php 
		// FUNCTION
		include_once("function.php");
				
		// LANGUAGE SELECTION FROM URL
		$lang = explode('/', $_SERVER['PHP_SELF']);
		if( strcmp($lang[1], 'fr') == 0 ){
			include_once("message/fr_global.php");
			include_once("message/fr_article.php");			
			if( strcmp($lang[2], 'cv'	) == 0 ){	include_once("message/fr_resume.php")	;}
			if(	strcmp($lang[2], 'tag'	) == 0 ){	include_once("message/fr_tag.php")		;}		
		}else{
			include_once("message/en_global.php");
			include_once("message/en_article.php");						
			if( strcmp($lang[2], 'cv'	) == 0 ){	include_once("message/en_resume.php")	;}
			if(	strcmp($lang[2], 'tag'	) == 0 ){	include_once("message/en_tag.php")		;}						
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
	<meta name="designer" content="Christophe Rigaud">
	<!--<meta name="name" content="Christophe Rigaud official website" />-->
	
