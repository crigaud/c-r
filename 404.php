<!DOCTYPE HTML>
<html>
<head>
	<?php include("include/header.php"); ?>
	<title><?php echo HO_TITLE ?></title>
	<meta name="description" content="<?php echo HO_DESC ?>" />
	<meta name="keywords" content="<?php echo HO_KEY ?>" />
</head>
<body onload="setStyle1(1);">			   
	<div id="wrapper">
		<?php
			include("include/menu_top.php");
		?>
		
		<div id="content">
			<p>
				<?php echo ERROR_404 ?>
			</p>
		</div>				
		<?php
			include("include/footer.php");
		?>
	</div>
</body>
</html>
