<!DOCTYPE HTML>
<html>
<head>
	<?php
		include($_SERVER['DOCUMENT_ROOT']."/skeleton/head.php");
	?>
</head>

<!-- REMOVE ONLOAD STYLE -->
<body onload="setStyle1(1);">		
	<div id="wrapper">
		<div id="left_panel">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/skeleton/left_panel.php");
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
		<div id="bottom">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/skeleton/bottom.php");
			?>
		</div>
	</div>
</body>
</html>
