	

<section itemscope itemtype="http://schema.org/Person"> 
	<h2><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" title="<?php echo ME_LOGO ?>"><span itemprop="name">Christophe Rigaud</span></a></h2>
	<!--<img class="myId" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cv/image/christophe_rigaud.jpg" alt="Christophe Rigaud picture" title="Welcome!"/>-->

			<?php echo VC_AFF_D ?>
			<br /><br />
			<section itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                
                	<?php //echo VC_LOC_BUILDING ?>
                </span>
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
        <br />
</section>




