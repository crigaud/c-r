<!DOCTYPE HTML>
<html>
<head>
	<?php
		include("../../include/header.php");
	?>
	<title><?php echo RE_TITLE ?></title>
	<meta name="description" content="<?php echo RE_DESC ?>" />
	<meta name="keywords" content="<?php echo RE_KEY ?>" />
</head>
<body onload="setStyle1(2);">			   
	<div id="wrapper">
		<?php
			include("../../include/menu_top.php");
		?>
		
		<div id="content">
			<?php
				include("../../cv/cv.php");
			?>
		</div>
				
	</div>
<?php
	include("../../include/footer.php");
?>		
</body>
</html>
