<footer>	
	<div id="footer">	<!-- IF BROWSER DOESN'T SUPPORT HTML5 YET -->
	<table class="table_footer">
		<tbody>
			<tr>
			<td><img src="http://<?php echo $_SERVER['SERVER_NAME']?>/icon/logo_ff_4.png" alt="firefox_logo" title="Optimized for Firefox"/> 
			</td>
			<td><a href="http://validator.w3.org/check?uri=http://<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"  onclick="window.open(this.href); return false;" title="Valid HTML5"><img src="http://<?php echo $_SERVER['SERVER_NAME']?>/icon/logo_validation_w3c_HTML_5.png" alt="HTML_5"/></a></td>
			<td> &copy; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" title="<?php echo FO_POWER?>">2010 - <?php echo '' . date('Y') ?> Christophe Rigaud</a>
			</td>
			<td><a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.christophe-rigaud.com&amp;profile=css3" onclick="window.open(this.href); return false;" title="Valid CSS3"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/logo_validation_w3c_css_level_3.png" alt="logo_css_3"/></a>
			</td>
			
			<td><img src="http://<?php echo $_SERVER['SERVER_NAME']?>/icon/logo-html5-badge-h-css3-performance-semantics.png" height="30" alt="HTML5 Powered with CSS3 / Styling, Performance &amp; Integration, and Semantics" title="HTML5 Powered with CSS3 / Styling, Performance &amp; Integration, and Semantics">
			</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>
					<a href="http://<?php echo $_SERVER['SERVER_NAME']; if( strcmp($lang[1], 'fr') == 0 ){ echo str_replace( '/index.php', '/', str_replace( 'fr/', 'en/', $_SERVER['PHP_SELF']) ) ; }else{ echo str_replace( '/index.php', '/', $_SERVER['PHP_SELF'] ); } ?>	" title="Display in English">English</a> 
					-
					<a href="http://<?php echo $_SERVER['SERVER_NAME'];	if( strcmp($lang[1], 'en') == 0 ){ echo str_replace( '/index.php', '/', str_replace( 'en/', 'fr/', $_SERVER['PHP_SELF']) ) ; }else{ echo str_replace( '/index.php', '/', $_SERVER['PHP_SELF'] ); } ?> " title="Afficher en Français">Fran&#231;ais</a>
				</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</tbody>
	</table>
	</div>
</footer>
