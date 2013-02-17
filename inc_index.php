<?php
	//header("HTTP/1.1 301 Moved Permanently");
 	/*if(preg_match('/fr/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'])){
		header("Location: http://". $_SERVER['SERVER_NAME']."/fr/cv/");
	}else{
 		header("Location: http://". $_SERVER['SERVER_NAME']."/en/cv/");
}*/
?>

<!DOCTYPE HTML>
<html>
<head>
	<?php include($_SERVER['DOCUMENT_ROOT']."/include/header.php"); ?>
	<title><?php echo HO_TITLE ?></title>
	<meta name="description" content="<?php echo HO_DESC ?>" />
	<meta name="keywords" content="<?php echo HO_KEY ?>" />
	<!--<meta property="og:title" content="<?php echo HO_TITLE ?>"/>-->
	<!--<meta property="og:description" content="<?php echo HO_DESC ?>" />-->
	<!--<meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME'].'/icon/favicon.png'; ?>" />-->
	
</head>
<body onload="setStyle1(1);">		
	<!--<div id="vcard">
		<?php
			//include($_SERVER['DOCUMENT_ROOT']."/vcard.php");
		?>
	</div>	-->
	<div id="wrapper">
		<?php
			include($_SERVER['DOCUMENT_ROOT']."/include/menu_top.php");
		?>

		<div id="content">
			<?php
				echo '<p>'.HO_INTRO.'</p>';
				include($_SERVER['DOCUMENT_ROOT'].'/about/inc_index.php');
				//include("../mindmap.php");
			?>
		</div>	
		<?php
			include($_SERVER['DOCUMENT_ROOT']."/include/footer.php");
		?>				
	</div>
	
</body>
</html>
