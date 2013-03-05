
<?php
	echo '<h1>'.$txt['TA_TITLE_H'].' ADD TAG NAME FROM URL HERE'.'</h1>';	
	$cmp = 0;
	for( $i=5 ; $i <= 15 ; $i++ ){
		$ID = sprintf("%02d", $i);
		if( array_key_exists('RE_EX_'.$ID.'_TAGS', $txt) ){
			$tags = explode(',', $txt['RE_EX_'.$ID.'_TAGS']);
			for( $j=0; $j<=sizeof($tags) ; $j++){
				if($tags[$j] == 'ADD TAG NAME FROM URL HERE'){
					echo $tags[$j]."\n";
					$cmp++;
				}
			}	
		}	
	}
	if($cmp == 0){
		echo "Sorry, no articles found.";
	}

?>
