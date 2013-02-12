
<?php
for( $i=10 ; $i >= 1 ; $i-- ){

	if( array_key_exists('AR_0'.$i.'_TITLE', $art) ){

		$date = explode( "-", $art['AR_0'.$i.'_DATE']);
		$monthName = date("F", mktime(0, 0, 0, $date[1]));
		$absoluteFolder = 'http://'. $_SERVER['SERVER_NAME'].'/'.LANGUAGE.'/blog/'.$date[2].'/'.$date[1].'/';	
		$pageName = getPageNameFromTitle( $art['AR_0'.$i.'_TITLE'] );	
		$linkToArticle = getLinkFromArticleTitle($date, $art['AR_0'.$i.'_TITLE'] );		

		if( !strpos($linkToArticle, $_SERVER['PHP_SELF'] ) == 0 ){
			echo '<div class="post">';
				echo '<div class="article">';
					echo '<div class="article_left_content">';
						echo '<div class="article_date">'.$date[0].' '.$monthName.' '.$date[2].'</div>';
						echo '<div class="article_author">'. $art['AR_0'.$i.'_AUTHOR'].'</div>';
					echo '</div>';
					echo '<div class="article_right_content">';
						// If month already in the URL = specific article is displayed = the title doesn have to be a link
						//if(strstr($_SERVER['PHP_SELF'], $date[1])){	echo '<h2>'. $art['AR_0'.$i.'_TITLE'].'</h2>';}
						//else{
						echo '<h2><a href="'.$linkToArticle.'">'. $art['AR_0'.$i.'_TITLE'].'</a></h2>';
						//}
						if( array_key_exists('AR_0'.$i.'_SUB_TITLE', $art) ){ echo '<h3>'.$art['AR_0'.$i.'_SUB_TITLE'].'</h3>';}
						//echo '<p>';
							if( array_key_exists('AR_0'.$i.'_CONTENT', $art) ){ echo $art['AR_0'.$i.'_CONTENT'] ;}
							else{echo 'ERROR: article '.$i.' not found';};
	
						//echo '</p>';
						if( array_key_exists('AR_0'.$i.'_FEEDBACK', $art) ){ echo '<div class="article_feedback">'.$art['AR_0'.$i.'_FEEDBACK'].'</div>';}
					echo '</div>';
				echo '</div>'; //END ARTICLE
			echo '</div>'; //END POST
		} // END IF
	} // END IF
} //END FOR

?>

