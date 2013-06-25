
<!--*********************************************************************************************************************
	*													SKILLS/NOTIONS													*
 	*********************************************************************************************************************-->
	
		
		<div >
		<?php

		for( $i=1 ; $i <= 10 ; $i++ ){
			if( array_key_exists('RE_SK'.$i.'_TITLE', $txt ) ){
				
				echo '<p class="skillTitle">'. $txt['RE_SK'.$i.'_TITLE'].' </p>';
				echo "<ul class='skillHorizontal'>";
				for( $j=1 ; $j <= 10 ; $j++ ){
					if( array_key_exists('RE_SK'.$i.'_0'.$j, $txt ) ){
										
						echo "<li>". $txt['RE_SK'.$i.'_0'.$j];
						if($i > 1){echo ', ';}
						echo " </li>\n\t";	
					}	
				} //END FOR
				echo "</ul>";
			}//END IF
		} //END FOR
		?>

		</div>

	

