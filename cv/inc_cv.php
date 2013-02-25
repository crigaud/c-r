
<!--*********************************************************************************************************************
	*														INTRO 														*
 	*********************************************************************************************************************-->



<img class="myId" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cv/image/christophe_rigaud.jpg" alt="Christophe Rigaud picture" title="Welcome!"/>

<section itemscope itemtype="http://schema.org/Person"> 
				<span itemprop="givenName">Christophe</span> <span itemprop="familyName">Rigaud</span>
				<br />
				<span itemprop="jobTitle"><?php echo VC_AVA_D ?></span>
				<br /><br />
				<span itemprop="affiliation">
					<section itemprop="affiliation" itemscope itemtype="http://schema.org/Organization">

					    	<?php echo VC_AFF_D ?>
						<span itemprop="location">
							<section itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<?php echo VC_LOC_BUILDING ?>
								<br />
								<span itemprop="streetAddress">
									<?php echo VC_LOC_STREET ?>
								</span>
								<br />
								<span itemprop="postalCode">
									<?php echo VC_LOC_POSTALCODE ?>
								</span>
								<span itemprop="addressLocality">
									<?php echo VC_LOC_LOCALITY ?>
								</span>
								<br />
								<span itemprop="addressCountry">
									<?php echo VC_LOC_COUNTRY ?>
								</span>
							</section>
					    </span>
					</section>	
			    </span>
				
					
		    <br />
	</section>
<table>
	<tr>
		<td><a href="http://fr.linkedin.com/in/christopherigaud" onclick="window.open(this.href); return false;">
			<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/linkedin_logo.png" alt="Visit Linkedin network profile account" title="Connect Linkedin" /></a>
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	
		<td><a href="http://www.viadeo.com/<?php echo $lang ?>/profile/christophe.rr" onclick="window.open(this.href); return false;">
			<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/viadeo_logo.png" alt="Viadeo profile" title="Connect Viadeo" /></a>
		</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>	
		<td><a onclick="window.open(this.href); return false;" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/cv/download/CV_Christophe_Rigaud_<?php echo $lang ?>.pdf" >
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
	<?php include($_SERVER['DOCUMENT_ROOT'].'/cv/experience_content.php'); ?>
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

