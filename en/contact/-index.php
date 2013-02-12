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
	<div id="wrapper">
		<?php
			include("../../include/menu_top.php");
		?>
		<div id="vcard">
			<?php
				include("../../vcard.php");
			?>
		</div>			
		<div id="content">
			<?php
				include("../../contact/inc_contact.php");
			?>
        </div><!-- END CONTENT -->
    </div><!-- END WRAPPER -->
<?php
	include("../../include/footer.php");
?>
		
</body>
</html>
