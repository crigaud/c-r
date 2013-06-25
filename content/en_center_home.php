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
				<img class="myId" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cv/image/christophe_rigaud.jpg" alt="Christophe Rigaud picture" title="Welcome!"/>

				<section class="person" itemscope itemtype="http://schema.org/Person"> 
					<span itemprop="givenName">Christophe</span> <span itemprop="familyName">Rigaud</span>
					<br />
					<span itemprop="jobTitle"><?php echo $global['VC_AVA_D'] ?></span>
					<br /><br />
					<span itemprop="affiliation">
						<section itemprop="affiliation" itemscope itemtype="http://schema.org/Organization">

								<?php echo $global['VC_AFF_D'] ?>
							<span itemprop="location">
								<section itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
										<?php echo $global['VC_LOC_BUILDING'] ?>
									<br />
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
								</section>
							</span>
						</section>	
					</span>
				
					<br />
					+33 (0) 5 46 45 87 63<br />
					<?php //echo $global['VC_EMA_T'] ?>
					<a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang.'/contact/';?>" >
						<?php echo $global['VC_EMA_D'] ?>
					</a>
				</section>
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









	
