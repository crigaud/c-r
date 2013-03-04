	

<div id="vcard">
	<h2>Presentation</h2>
	<?php echo $global["HO_INTRO"];?>
	
	<h2><?php echo $global["LT_TITLE"];?></h2>
	<?php 
	for( $i=1 ; $i <= 3 ; $i++ ){
		if( array_key_exists('LT_0'.$i.'_HEAD', $global) ){
			echo '<div class="news_head">'.$global['LT_0'.$i.'_HEAD']."<br />".'</div>';
			//$date = explode( "-", $global["LT_01_DATE"]);
			//$monthName = date("F", mktime(0, 0, 0, $date[1]))	;
			//echo '<div class="news_date">'.$date[0].' '.$monthName.' '.$date[2].'</div>';
			echo '<div class="news_date">'.$global['LT_0'.$i.'_DATE'].'</div>';
			echo '<br />';
		}// END IF
	} //END FOR
	
	
	
	?>

</div>



