<!DOCTYPE HTML>
<html>
<head>
	<?php
		include("../../include/header.php");
	?>
	<title><?php echo CO_TITLE ?></title>
	<meta name="description" content="<?php echo CO_DESC ?>" />
	<meta name="keywords" content="<?php echo CO_KEY ?>" />
</head>
<body onload="setStyle1(3);">			   
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
			<a href="/<?php echo LANGUAGE; ?>/tools/text-localization-in-comics/" ><?php echo TO_TEXT_LOCA_TITLE ?></a>
			<br />
			<br />
			<a href="/<?php echo LANGUAGE; ?>/tools/letter-transcription/" ><?php echo TO_TRANS_TITLE ?></a>		
        </div><!-- END CONTENT -->
       <?php
			include("../../include/footer.php");
		?>
    </div><!-- END WRAPPER -->
		
</body>
</html>
