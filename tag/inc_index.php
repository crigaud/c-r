<!DOCTYPE HTML>
<html>
<head>
	<?php
		include("../../include/header.php");
		
		$url = explode('/', $_SERVER['PHP_SELF']);
		$ID = 'TA_' . $url[3];
		//if( strcmp($url[3], 'lisa') == 0 ){				
	?>
	<title><?php echo $tag['TA_TITLE'] ?></title>
	<meta name="description" content="<?php echo $tag['TA_DESC'] ?>" />
	<meta name="keywords" content="<?php echo $url[3] . $tag['TA_KEY'] ?>" />
	
	<!-- DIAGRAM	
	<link href="../../../tag/css/default.css" rel="stylesheet" type="text/css" />	
	<script src="../../../tag/js/jquery.js" type="text/javascript"></script>
	<script src="../../../tag/js/raphael.js" type="text/javascript"></script>
	<script src="../../../tag/js/init.js" type="text/javascript"></script>	 -->
</head>
<body onload="setStyle1(1);">			   
	<div id="wrapper">
		<?php
			include("../../include/menu_top.php");
		?>
		
		<div id="content">
		
			<h2><?php echo $tag['TA_TITLE'] ?></h2>
				
			<?php	
				$dir = opendir('./');
				$files = array();

				//sort folders by name
				while ($files[] = readdir($dir));
				sort($files);

				//display links
				//$cpt = 0;	
				foreach ($files as $file) {
				if( is_dir($file) && strlen($file) > 2){
						echo ("<a href='$file' title='" . ucfirst($file) . " tag contents'>" . ucfirst($file) . "</a><br />");
						//$cpt ++;
					}
				}	
				
				// DIAGRAM
				/* echo '<div id="diagram"></div>'
				echo '<div class="get">';	
				foreach ($files as $file) {
				if( is_dir($file) && strlen($file) > 2 && (int)$tag['TA_'. strtoupper($file) .'_VALUE'] > 75 ){
						echo ('<div class="arc">
									<span class="text">'. ucfirst( $file ) .'</span>
									<input type="hidden" class="percent" value="'. $tag['TA_'. strtoupper($file) .'_VALUE'] .'" />
									<input type="hidden" class="color" value="#'. random_hex_color() .'" />
							   </div>');
						//$cpt ++;
					}
				}		
				echo '		</div>';*/
				closedir($dir);
			?>
		</div>	
		<?php
			include("../../include/footer.php");
		?>	
	</div>	
</body>
</html>
