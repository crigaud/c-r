<footer>	
	<div id="footer">	<!-- IF BROWSER DOESN'T SUPPORT HTML5 YET -->
	<table class="table_footer">
		<tbody>
			<tr>
			<!--<td><img src="http:///icon/logo_ff_4.png" alt="firefox_logo" title="Optimized for Firefox"/> -->
			</td>
			<td>

			<a href="http://validator.w3.org/check?uri=http://<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"  onclick="window.open(this.href); return false;" title="Valid HTML5"><img src="http://<?php echo $_SERVER['SERVER_NAME']?>/icon/logo_validation_w3c_HTML_5.png" alt="HTML_5"/></a></td>
			<td>
			2010 - <?php echo '' . date('Y') ?> <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons License</a><br />
			<?php echo $global['FO_POWER']?>
			<!--<a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/80x15.png" /></a>
			-->
			<br />
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" ><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">christophe-rigaud.com</span></a>
			</td>
			<td><a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.christophe-rigaud.com&amp;profile=css3" onclick="window.open(this.href); return false;" title="Valid CSS3"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/logo_validation_w3c_css_level_3.png" alt="logo_css_3"/></a>
			</td>
			
			<!--<td><img src="http:///icon/logo-html5-badge-h-css3-performance-semantics.png" height="30" alt="HTML5 Powered with CSS3 / Styling, Performance &amp; Integration, and Semantics" title="HTML5 Powered with CSS3 / Styling, Performance &amp; Integration, and Semantics">
			</td>-->
			</tr>
			<tr>
				<td></td>
				<td>
					<a href="http://<?php echo $_SERVER['SERVER_NAME'].'/';if(strlen($lang)==2){echo $lang;}else{echo 'en';}; ?>/">HOME</a> | 
					<a href="http://<?php echo $_SERVER['SERVER_NAME'].'/';if(strlen($lang)==2){echo $lang;}else{echo 'en';}; ?>/about/">ABOUT</a>	| 
					<a href="http://<?php echo $_SERVER['SERVER_NAME'].'/';if(strlen($lang)==2){echo $lang;}else{echo 'en';}; ?>/contact/">CONTACT</a>
				</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	</div>
</footer>
