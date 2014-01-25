<!--<p>
<?php
	//echo $global['HO_INTRO'];
?>
</p>-->

<div class="layout-row">
	<div class="right-column">
		<section class="article">
			<h2><?php echo $global["VC_TITLE"];?></h2>
			<div class="article-content">
				
				<section class="person" itemscope itemtype="http://schema.org/Person">								
					<span itemprop="name">Christophe Rigaud</span>
					<img class="myId"  itemprop="image" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cv/image/christophe_rigaud.jpg" alt="Christophe Rigaud picture" title="Welcome!"/>
					<br />
					<span itemprop="jobTitle"><?php echo $global['VC_AVA_D'] ?></span>
					<br /><br />

						<section itemprop="affiliation" itemscope itemtype="http://schema.org/Organization">
							<span itemprop="brand"><?php echo $global['VC_AFF_D'] ?></span><br />
							<span itemprop="department"><?php echo $global['VC_LOC_DEPARTMENT'] ?></span><br />
							<?php echo $global['VC_LOC_POLE'] ?><br />
							<span itemprop="name"><?php echo $global['VC_LOC_BUILDING'] ?></span>
							
							<!--<span itemprop="location">-->
								<section itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">
										<?php echo $global['VC_LOC_STREET'] ?>
									</span>
									<br />
									<span itemprop="postalCode">
										<?php echo $global['VC_LOC_POSTALCODE'] ?>
									</span>
									<span itemprop="addressLocality">
										<?php echo $global['VC_LOC_LOCALITY'] ?>
									</span>
									<br />
									<span itemprop="addressCountry">
										<?php echo $global['VC_LOC_COUNTRY'] ?>
									</span>
								</section><!-- END ADDRESS -->
							<!--</span>-->
						</section>	<!-- END AFFILIATION -->
				
					<br />
					<span itemprop="telephone">+33 (0) 5 46 45 87 63</span><br />
					<?php //echo $global['VC_EMA_T'] ?>
					<span itemprop="email">
						<a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang.'/contact/';?>" >
							<?php echo $global['VC_EMA_D'] ?>
						</a>
					</span>
					
				</section><!-- END PERSON -->
				
				<ul class="network">
						<!--<li>
							<a onclick="window.open(this.href); return false;" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/cv/download/CV_Christophe_Rigaud_<?php echo $lang ?>.pdf" >
								<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/pdf.png" alt="CV PDF" title="Download PDF" />
							</a>
						</li>-->
						<li>
							<a href="http://fr.linkedin.com/in/christopherigaud" onclick="window.open(this.href); return false;">
								<img  height="19px" class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/linkedin_Logo.svg" alt="LinkedIn profile" title="LinkedIn profile" />
							</a>
						</li>
						<li>
							<a href="http://www.viadeo.com/<?php echo $lang ?>/profile/christophe.rr" onclick="window.open(this.href); return false;">
								<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/viadeo_logo.png" alt="Viadeo logo" title="Viadeo profile" />
							</a>
						</li>
						<li>
							<a href="http://www.mendeley.com/profiles/christophe-r/" onclick="window.open(this.href); return false;">
								<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/mendeley-logo-445px.jpg" alt="Mendeley logo" title="Mendeley profile" />
							</a>
						</li>
						<li>
							<a href="https://github.com/crigaud" onclick="window.open(this.href); return false;">
								<img height="20px" class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/GitHub.svg" alt="Github logo" title="Github profile" />
							</a>
						</li>
						<li>
							<a href="http://www.slideshare.net/ChristopheRigaud/" onclick="window.open(this.href); return false;">
								<img height="20px" class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/slideshare.svg" alt="Slideshare logo" title="Slideshare profile" />
							</a>
						</li>
					</ul>
				
			</div><!--end article-content-->
		</section><!--end acticle-->
	</div><!--end right-column-->
	
	<div class="left-column">
		<section class="article">
			<h2><?php echo $global["LT_TITLE"];?></h2>
			<div class="article-content">
					<?php
						for( $i=20 ; $i >= 1 ; $i-- ){
							$id = sprintf('%02d', $i);
							//echo $id;
							if( array_key_exists('LT_'. $id .'_HEAD', $global) ){
								echo '<div class="news_head">'.$global['LT_'.$id.'_HEAD']."<br />".'</div>';
								//$date = explode( "-", $global["LT_01_DATE"]);
								//$monthName = date("F", mktime(0, 0, 0, $date[1]))	;
								//echo '<div class="news_date">'.$date[0].' '.$monthName.' '.$date[2].'</div>';
								echo '<div class="news_date">'.$global['LT_'.$id.'_DATE'].'</div>';
							}// END IF
						} //END FOR
					?>
			</div><!--end article-content-->
		</section><!--end acticle-->
	</div><!--end left-column-->
	<section id="mindmap">
		<h2><?php echo $global["HO_MINDMAP"];?></h2>
		<object data="/image/christophe_rigaud_mindmap.svg" type="image/svg+xml"></object> 
	</section>
</div><!--end layout-row-->









	
