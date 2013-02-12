<!DOCTYPE HTML>
<html>
<head>
	<?php include("../../include/header.php"); ?>
	<title><?php echo AB_TITLE ?></title>
	<meta name="description" content="<?php echo AB_DESC ?>" />
	<meta name="keywords" content="<?php echo AB_KEY ?>" />
	<!--<meta property="og:title" content="<?php echo HO_TITLE ?>"/>-->
	<!--<meta property="og:description" content="<?php echo HO_DESC ?>" />-->
	<!--<meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME'].'/icon/favicon.png'; ?>" />-->
	
</head>
<body onload="setStyle1(1);">		
	<div id="vcard">
		<?php
			include("../../vcard.php");
		?>
	</div>	
	<div id="wrapper">
		<?php
			include("../../include/menu_top.php");
		?>

		<div id="content">
			<?php
				//echo '<p>'.BL_INTRO.'</p>';
				include('../../about/inc_index.php');
			?>
		</div>	
		<?php
			include("../../include/footer.php");
		?>				
	</div>
	
</body>
</html>
