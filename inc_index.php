<!DOCTYPE HTML>
<html>
<head>
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/skeleton/head.php");
	?>
	
	<!-- TO REMOVE -->
	<title><?php echo HO_TITLE ?></title>
	<meta name="description" content="<?php echo HO_DESC ?>" />
	<meta name="keywords" content="<?php echo HO_KEY ?>" />
	<!--<meta property="og:title" content="<?php echo HO_TITLE ?>"/>-->
	<!--<meta property="og:description" content="<?php echo HO_DESC ?>" />-->
	<!--<meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME'].'/icon/favicon.png'; ?>" />-->
	
</head>

<!-- REMOVE ONLOAD STYLE -->
<body onload="setStyle1(1);">		

	<div id="wrapper">
		<div id="left">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/skeleton/left.php");
			?>
		</div>
		<div id="right"><?php include($_SERVER['DOCUMENT_ROOT']."/skeleton/right.php");	?></div>		
		<div id="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/skeleton/top.php");
			?>
		</div>
		<div id="content">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/skeleton/center.php");
			?>
		</div>

		</div>
		<div id="bottom">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/skeleton/bottom.php");
			?>
		</div>
	</div>
	
</body>
</html>
