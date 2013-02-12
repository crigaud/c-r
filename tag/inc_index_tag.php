<!DOCTYPE HTML>
<html>
<head>
	<?php
		include("../../../include/header.php");
		
		$url = explode('/', $_SERVER['PHP_SELF']);
		$ID = 'TA_' . strtoupper( $url[3] ) . '_';
		//if( strcmp($url[3], 'lisa') == 0 ){				
	?>
	<title><?php echo $tag['TA_TITLE_H'] . ucfirst( $url[3] )?></title>
	<meta name="description" content="<?php echo $tag['TA_DESC'] . $url[3] ; ?>" />
	<meta name="keywords" content="<?php echo $url[3] . ',' . $tag['TA_KEY']; ?>" />
	
	<!-- DIAGRAM -->	
	<script src="http://<?php echo $_SERVER['SERVER_NAME']?>/include/js/jquery.js" type="text/javascript"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME']?>/include/js/raphael.js" type="text/javascript"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME']?>/include/js/init.js" type="text/javascript"></script>
	
	
</head>
<body onload="setStyle1(1);">			   
	<div id="wrapper">
		<?php
			include("../../../include/menu_top.php");
		?>
		
		<div id="content">
		
			<h2><?php echo $tag['TA_TITLE_H'] . $url[3] ;?></h2>
			
			<!--<div class="legend">
				<h1>Legend:</h1>
				<div class="skills">
					<ul>
						<li class="jq">JavaScript</li>
						<li class="css">CSS3</li>
					</ul>
				</div>	
			</div>-->
			
			<div class="get">
				<div class="arc">
					<span class="text"><?php echo ucfirst( $url[3] ) ;?></span>
					<input type="hidden" class="percent" value="<?php echo $tag[$ID .'VALUE'] ;?>" />
					<input type="hidden" class="color" value="#<?php echo random_hex_color() ;?>" />
				</div>
			</div>
		
			<div id="diagram"></div>
		
		</div>				
		<?php
			include("../../../include/footer.php");
		?>				
	</div>
	
</body>
</html>
