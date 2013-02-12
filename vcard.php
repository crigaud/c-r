	
	<h2><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" title="<?php echo ME_LOGO ?>">Christophe Rigaud</a></h2>
	<img class="myId" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cv/image/christophe_rigaud.jpg" alt="Christophe Rigaud face picture" title="Welcome!"/>
	<dl>
		<dt><?php echo VC_AGE_T ?></dt>
			<dd><?php
				// PHP >= 5.3
				/*$datetime1 = new DateTime('1986-12-17');
				$datetime2 = new DateTime( date("y-m-d",time() ) );
				$interval = $datetime1->diff($datetime2);
				$truncated = $interval->format('%R%a') / 365;
				//echo $truncated;
				echo intval( $truncated ) . "\n";*/

				$date1 = "1986-12-17";
				$date2 = date("y-m-d",time() );

				$diff = abs(strtotime($date2) - strtotime($date1));

				echo floor($diff / (365*60*60*24));
				echo " ".VC_AGE_D;
								
				?>
			</dd>	
		<dt><?php echo VC_LOC_T ?></dt>
			<dd><?php echo VC_LOC_D ?></dd>
		<dt><?php echo VC_EMA_T ?></dt>
			<dd>
				<script type="text/javascript">
					<!--
		 			var name = "contact" ;
		 			var domain = "christophe-rigaud.com" ;
		 			var subject = "subject=What about?" ;
		 			document.write('<a href="mailto:' + name + '@' + domain + ' ?' + subject + '">') ;
		 			document.write(name + '@' + domain + '<\/a>') ;
		 			-->
		 		</script>
		 	</dd>
			<dd><a href="http://<?php echo $_SERVER['SERVER_NAME'].'/'.LANGUAGE; ?>/contact/" onclick="setStyle1(3);"><?php echo VC_EMA_D ?></a></dd>			
		<dt><?php echo VC_AVA_T ?></dt>
			<dd><?php echo VC_AVA_D ?></dd>			
		<dt><?php echo VC_NET_T ?></dt>
			<dd><a href="http://fr.linkedin.com/in/christopherigaud" onclick="window.open(this.href); return false;">
			<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/linkedin_logo.png" alt="Link to Christophe Rigaud's Linkedin network profile" title="Connect Linkedin" /></a> <a href="http://www.viadeo.com/<?php echo LANGUAGE ?>/profile/christophe.rr" onclick="window.open(this.href); return false;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="img_no_decoration" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/icon/viadeo_logo.png" alt="Link to Christophe Rigaud's Viadeo profile" title="Connect Viadeo" /></a></dd>	
														
	</dl>






