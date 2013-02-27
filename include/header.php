	
	<!-- ENCODING -->	
	<meta charset="UTF-8">

	<!-- DESIGN -->	
	<link rel="shortcut icon" type="image/x-icon" href="http://<?php echo $_SERVER['SERVER_NAME']?>/favicon.png" />
	<link rel="stylesheet" media="screen" type="text/css" title="css" href="http://<?php echo $_SERVER['SERVER_NAME']?>/design.css" />
	
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']?>/include/function.js"></script>

	<!-- GENERAL -->
	<!--<meta name="owner" content="Christophe Rigaud" />-->
	<meta name="author" content="Christophe Rigaud" />
	<meta name="designer" content="Christophe Rigaud">
	<!--<meta name="name" content="Christophe Rigaud official website" />-->
	
	<!-- DINAMIC CONTENT -->
	<?php
	if(strlen($lang) == 2){
		if($section == "cv"){
			$title = $txt["RE_TITLE"];
			$desc = $txt["RE_DESC"];
			$key = $txt["RE_KEY"];
		}else if($section == "contact"){
			$title = $global["CO_TITLE"];
			$desc = $global["CO_DESC"];
			$key = $global["CO_KEY"];
		}else{
			$title = $global['HO_TITLE'];
			$desc = $global['HO_DESC'];
			$key = $global['HO_KEY'];
		}
	}else{
		$title = $global['HO_TITLE'];
		$desc = $global['HO_DESC'];
		$key = $global['HO_KEY'];
	}	
	?>
	
	<title><?php echo $title ?></title>
	<meta name="description" content="<?php echo $desc ?>" />
	<meta name="keywords" content="<?php echo $key ?>" />
		
	
