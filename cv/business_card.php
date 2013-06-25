
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
		    <?php //echo $global['VC_EMA_T'] ?><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.$lang.'/contact/';?>" ><?php echo $global['VC_EMA_D'] ?></a>
	</section>
	
	

	<ul class="network">
		<li>
			<a onclick="window.open(this.href); return false;" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/cv/download/CV_Christophe_Rigaud_<?php echo $lang ?>.pdf" >
				<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/pdf.png" alt="CV PDF" title="Download PDF" />
			</a>
		</li>
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
