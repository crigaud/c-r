<!--<p>
<?php
	//echo $global['HO_INTRO'];
?>
</p>-->

<div class="layout-row">

<section class="article">
			<h2><?php echo $global["HO_MINDMAP"];?></h2>
				<div class="article-content">
					<!--<object data="/image/christophe_rigaud_mindmap.svg" type="image/svg+xml"></object>-->
					<p>Après un BTS en conception et réalisation de systèmes automatiques</a> à Carpentras, une <a href="/fr/cv/iut-salon-de-provence/" >licence à l'IUT de Salon de Provence</a> et un <a href="/fr/cv/istia/" >diplôme d'ingénieur en Automatique et Génie Informatique</a> à l'école d'ingénieur de l'Université d'Angers en 2011, je mène aujourd'hui un <a href="/fr/cv/l3i/" >projet de thèse de doctorat européen</a> au sein du laboratoire de recherche en informatique, image et interaction (L3i) de l'Université de La Rochelle. Je travaille aussi en cotutelle avec le <a href="http://www.cvc.uab.es/" onclick='window.open(this.href); return false;'>centre de vision par ordinateur</a> (CVC) de l'Université autonome de Barcelone.
<br />
Mes travaux de recherches actuels concernent l'analyse de bandes dessinées par ordinateur dans lesquelles je cherche à extraire un maximum d'informations pour décrire automatiquement le contenu des images à savoir les cases, les bulles, le texte et les personnages. L'ensemble de ses informations constitue une base de connaissance que l'on peut alors intérroger avec des mots clefs (voir un exemple) pour retrouver une case en particulier, un dialogue ou une suite d'actions à partir d'une multitude d'albums numérisés et en quelques secondes. D'autre applications sont à l'étude comme la lecture case par case sur smartphone ou tablette, la traduction automatique et la synthèse vocale.
				</p>
				</div><!--end article-content-->
		</section><!--end acticle-->
		
		
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
					
					<br />
					<br />

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
								<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/viadeo_logo.png" alt="Viadeo profile" title="Viadeo profile" />
							</a>
						</li>
						<li>
							<a href="http://www.mendeley.com/profiles/christophe-r/" onclick="window.open(this.href); return false;">
								<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/mendeley-logo-445px.jpg" alt="Mendeley profile" title="Mendeley profile" />
							</a>
						</li>
						<li>
							<a href="https://github.com/crigaud" onclick="window.open(this.href); return false;">
								<img height="20px" class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/GitHub.svg" alt="Github profile" title="Github profile" />
							</a>
						</li>
					</ul>
	
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
	
	
	
</div><!--end layout-row-->









	
