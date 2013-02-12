
<!--*********************************************************************************************************************
	*														INTRO 														*
 	*********************************************************************************************************************-->

<table>
	<tr>
		<td><a href="http://fr.linkedin.com/in/christopherigaud" onclick="window.open(this.href); return false;">
			<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/linkedin_logo.png" alt="Visit Linkedin network profile account" title="Connect Linkedin" /></a>
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	
		<td><a href="http://www.viadeo.com/<?php echo LANGUAGE ?>/profile/christophe.rr" onclick="window.open(this.href); return false;">
			<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/viadeo_logo.png" alt="Viadeo profile" title="Connect Viadeo" /></a>
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	
		<td><a onclick="window.open(this.href); return false;" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/cv/download/CV_Christophe_Rigaud_<?php echo LANGUAGE ?>.pdf" >
			<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/pdf.png" alt="CV PDF" title="Download PDF" />
		</a></td>
	</tr>
</table>

<p class="Style1" >
	<?php echo $txt['RE_INTRO'] ?>
</p>
<!--*********************************************************************************************************************
	*														EXPERIENCE													*
 	*********************************************************************************************************************-->

<br />
	<?php include('experience_content.php'); ?>
<br />
<!--*********************************************************************************************************************
	*														EDUCATION													*
 	*********************************************************************************************************************-->

<br />
	<?php include('education_content.php'); ?>
<br />
<!--*********************************************************************************************************************
	*														 VARIED 													*
 	*********************************************************************************************************************-->
 <div class="SectionTitle"><h2><?php echo $txt['RE_VA_TITLE'] ?></h2></div>

<table class="ItemTable2">
<?php
for( $i=1 ; $i <= 4 ; $i++ ){
	echo '
		<tr>
			<td class="ItemEnumTitle">'. $txt['RE_VA_0'.$i.'_TITLE'] .'</td>
			<td class="ItemEnumDesc">'.   $txt['RE_VA_0'.$i.'_DESC_01']. '</td>
		</tr>	
	';
} //END FOR
?>
</table>
<br />

<div id="ItemUpdate"><?php echo $txt['RE_VA_LAST_UP'] ?></div>

