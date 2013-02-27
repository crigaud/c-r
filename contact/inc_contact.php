
<div id="contact">

	<h1><?php echo $global['CO_H1'] ?></h1>

	<figure tabindex=1>
		<img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/contact/img/qr_code_mailto_christophe_rigaud.png" alt="QR code mailto" title="Zoom, flash and email" />
	</figure>

	<p>
		<?php echo $global['CO_INTRO'] ?>
	</p>
	<p class="contact_error">
<?php 	
	// Get the value from sendmail.php
	if (isset( $_GET['t1']) ) {	$t1 = $_GET['t1'];	}else{		$t1 = 0;	}
	if (isset( $_GET['t2']) ) {	$t2 = $_GET['t2'];	}else{		$t2 = 0;	}
	if (isset( $_GET['sent']) ){	$sent = $_GET['sent'];	}else{		$sent = 0;	}
	
	// Check if it's sent
	if($sent == 1) echo $global['CO_SUCCESS'];
 ?>
	</p>
		
<form method="post" action="/<?php echo $lang; ?>/contact/sendmail.php" >

<?php
	$ipi = getenv("REMOTE_ADDR");
	$httprefi = getenv ("HTTP_REFERER");
	$httpagenti = getenv ("HTTP_USER_AGENT");
?>
	<p>
		<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
		<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
		<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
	</p>
	
	<table>
	<tbody >
		<tr>
			<td><?php echo $global['CO_NAME'] ?></td>
			<td><input type="text" name="visitor" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="contact_error">
			<?php 
			if($t1 == 1){ 
				echo $global['CO_NAME_ERROR']; 
			}?>
			</td>
		</tr>
		<tr>
			<td><?php echo $global['CO_EMAIL'] ?></td>
			<td><input type="text" name="visitormail" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="contact_error"><?php if($t2 == 1){ echo $global['CO_EMAIL_ERROR']; }?></td>
		</tr>
		<tr>
			<td><?php echo $global['CO_SUBJECT'] ?></td>
			<td><input type="text" name="attn" value="<?php echo $global['CO_SUBJECT_CONTENT'] ?>"/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $global['CO_MESSAGE'] ?></td>
			<td><textarea name="notes" rows="8" cols="30"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="<?php echo $global['CO_BTN_SEND'] ?>" /></td>
			
		</tr>
	</tbody>
</table>
	
</form>
<br />
<?php 	
// 	$_SESSION['sent'] = 0;
// 	$_SESSION['error1'] = 0;
// 	$_SESSION['error2'] = 0; 
?>
</div><!--END CONTACT-->
