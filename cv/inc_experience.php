<!DOCTYPE HTML>
<html>
<head>
	<?php
		include("../../include/header.php");
	?>
	<title><?php echo $txt['RE_EX_TITLE_ALL'] ?></title>
	<meta name="description" content="<?php echo $txt['RE_EX_DESC_ALL'] ?>" />
	<meta name="keywords" content="<?php echo $txt['RE_KEY'] ?>" />
	<!--<meta property="og:title" content="<?php echo $txt['RE_TITLE'] ?>"/>
	<meta property="og:description" content="<?php echo $txt['RE_DESC'] ?>" />
	<meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME'].'/favicon.png'; ?>" />-->
</head>
<body onload="setStyle1(2);">		
	<!--<div id="vcard">-->
		<?php
			//include("../../vcard.php");
		?>
	<!--</div>	-->
	<div id="wrapper">
		<?php
			include("../../include/menu_top.php");
		?>
		
		<div id="content">
			<?php include('experience_content.php'); ?>
		</div>
		<?php
			include("../../include/footer.php");
		?>		
	</div>	
</body>
</html>
