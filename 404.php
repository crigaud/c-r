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
			<div class="layout-row">
				<section class="article">
					<h2><?php echo 'Error';?></h2>
					<div class="article-content">
						<p>
							<?php echo $global["ERROR_404"] ?>
						</p>
					</div><!--end acticle content-->		
				</section><!--end acticle-->
			</div><!--end layout-row-->
		</div>				
		<div id="bottom">
			<?php
				include($_SERVER['DOCUMENT_ROOT']."/skeleton/bottom.php");
			?>
		</div>
	</div>
</body>
</html>
