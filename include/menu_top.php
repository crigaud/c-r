<div id="menu_top">
<?php
	$path = explode("/", $_SERVER['REQUEST_URI']);	
?>

	<table class="menuTop">
	<tbody>
	<tr>
		<td class="logo" ><h1>

		<a href="http://<?php echo $_SERVER['SERVER_NAME'] . '/'; if( strlen($lang[1]) == 2){echo $lang[1];}; ?>" title="<?php echo ME_LOGO ?>">Christophe Rigaud</a></h1></td>
		<!--<td class="logo"><h1><a class="logo_a" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" title="<?php echo ME_LOGO ?>">Christophe &nbsp;&nbsp; Rigaud</a></h1></td>-->
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td class="ball_1"><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE; ?>/blog/" onclick="setStyle1(1);"><?php echo ME_HOME ?></a></td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td class="ball_2"><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE; ?>/cv/" onclick="setStyle1(2);"><?php echo ME_RESUME ?></a></td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td class="ball_3"><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE; ?>/contact/" onclick="setStyle1(3);"><?php echo ME_CONTACT ?></a></td>
	</tr>
	</tbody>
	</table>
</div>
