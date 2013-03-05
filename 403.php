<!DOCTYPE HTML>
<html>
<head>
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/skeleton/head.php");
	?>
</head>
<body>			   
	<div id="wrapper">
		<div id="top">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/skeleton/top.php");
			?>
		</div>
		<div id="content">
			<p>
				<?php echo $global["ERROR_403"] ?>
			</p>
		</div>				
		<div id="bottom">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/skeleton/bottom.php");
			?>
		</div>
	</div>
	
</body>
</html>
