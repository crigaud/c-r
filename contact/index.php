<?php
	// Permanent redirections
	header("HTTP/1.1 301 Moved Permanently");
 	header("Location: http://". $_SERVER['SERVER_NAME']."/en/contact/");
?>





<!-- UNUSED -->
<!DOCTYPE HTML>
<html>
<head>
	<?php
		include("../include/header.php");
		//include_once ("../include/message_fr.php");
	?>
	<title><?php echo CO_TITLE ?></title>
	<meta name="description" content="<?php echo CO_DESC ?>" />
	<meta name="keywords" content="<?php echo CO_KEY ?>" />
</head>
<body onload="setStyle1(3);">			   
	<div id="wrapper">
			<!--<img class="me" title="Me" alt="Me" src="img/me.jpg" id="iconPicture"/>-->	

	<?php
		include("../include/menu_top.php");
	?>
	<div id="content">
	<div id="contact">
	<h1><?php echo CO_H1 ?></h1>
	<p>
		<?php echo CO_INTRO ?>
	</p>
	<p class="contact_error">
<?php 	
	// Get the value from sendmail.php
	if (isset( $_GET['t1']) ) {	$t1 = $_GET['t1'];	}else{		$t1 = 0;	}
	if (isset( $_GET['t2']) ) {	$t2 = $_GET['t2'];	}else{		$t2 = 0;	}
	if (isset( $_GET['sent']) ){	$sent = $_GET['sent'];	}else{		$sent = 0;	}
	
	// Check if it's sent
	if($sent == 1) echo CO_SUCCESS;
 ?>
	</p>
		<br />
		<br />
		
<form method="post" action="sendmail.php" >

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
			<td><?php echo CO_NAME ?></td>
			<td><input type="text" name="visitor" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="contact_error"><?php if($t1 == 1){ echo CO_NAME_ERROR; }?></td>
		</tr>
		<tr>
			<td><?php echo CO_EMAIL ?></td>
			<td><input type="text" name="visitormail" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="contact_error"><?php if($t2 == 1){ echo CO_EMAIL_ERROR; }?></td>
		</tr>
		<tr>
			<td><?php echo CO_SUBJECT ?></td>
			<td><input type="text" name="attn" value="<?php echo CO_SUBJECT_CONTENT ?>"/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo CO_MESSAGE ?></td>
			<td><textarea name="notes" rows="8" cols="30"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="<?php echo CO_BTN_SEND ?>" /></td>
			
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
		</div><!--END CONTENT-->
				
	</div><!-- END WRAPPER -->
<?php
	include("../include/footer.php");
?>
		
</body>
</html>
