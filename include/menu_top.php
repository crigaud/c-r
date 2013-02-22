<div id="menu_top">
<?php
	$path = explode("/", $_SERVER['REQUEST_URI']);	
?>

	<ul class="menuTop">
		<li class="logo" >
			<!--<h1>-->
				<a href="http://<?php echo $_SERVER['SERVER_NAME'] . '/'; if( strlen($lang[1]) == 2){echo $lang[1];}; ?>" title="<?php echo ME_LOGO ?>">Christophe Rigaud</a>
			<!--</h1>-->

			<a href="http://<?php echo $_SERVER['SERVER_NAME']; 
			if( strcmp($lang[1], 'fr') == 0 ){ 
				echo str_replace( '/index.php', '/', str_replace( 'fr/', 'en/', $_SERVER['PHP_SELF']) ) ; 
				echo '" title="Display in English"><img class="flag"  alt="Display in English" src="http://' . $_SERVER['SERVER_NAME'] . '/icon/flag_uk.png" /></a>';
			}else if( strcmp($lang[1], 'en') == 0 ){ 
				echo str_replace( '/index.php', '/', str_replace( 'en/', 'fr/', $_SERVER['PHP_SELF']) ); 
				echo '" title="Afficher en français"><img class="flag" alt="Afficher en français" src="http://' . $_SERVER['SERVER_NAME'] . '/icon/flag_fr.png" /></a>';
			}else{
				echo '/fr/'; 
				echo '" title="Voir la page en français"><img class="flag" alt="Afficher en français" src="http://' . $_SERVER['SERVER_NAME'] . '/icon/flag_fr.png" /></a>'; 
			}					
			?>
		</li>
		<li class="ball_1">
			<a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE; ?>/" onclick="setStyle1(1);"><?php echo ME_HOME ?></a>
		</li>
		<li class="ball_2">
			<a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE; ?>/cv/" onclick="setStyle1(2);"><?php echo ME_RESUME ?></a>
		</li>
		<li class="ball_3">
			<a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE; ?>/contact/" onclick="setStyle1(3);"><?php echo ME_CONTACT ?></a>
		</li>
	</ul>
</div>
