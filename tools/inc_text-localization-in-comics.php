<!DOCTYPE HTML>
<html>
<head>
	<?php
		include("../../../include/header.php");
	?>
	<title><?php echo TO_TEXT_LOCA_TITLE ?></title>
	<meta name="description" content="<?php echo TO_TEXT_LOCA_DESC ?>" />
	<meta name="keywords" content="<?php echo TO_TEXT_LOCA_KEY ?>" />
</head>
<body onload="setStyle1(3);">			   
	<div id="vcard">
		<?php
			include("../../../vcard.php");
		?>
	</div>
	<div id="wrapper">
		<?php
			include("../../../include/menu_top.php");
		?>		
		<div id="content">
			<h1><?php echo TO_TEXT_LOCA_TITLE ?></h1>
			<?php echo TO_TEXT_LOCA_INTRO ?>
        </div><!-- END CONTENT -->
       <?php
			include("../../../include/footer.php");
		?>
    </div><!-- END WRAPPER -->
		
</body>
</html>
