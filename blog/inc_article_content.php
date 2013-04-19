
<?php
$flag = false;

$id = $_GET["id"];


/*for( $i=10 ; $i >= 1 ; $i-- ){
	//if( preg_match("/\/blog\/index.php$/", $_SERVER['PHP_SELF']) ){

	if( array_key_exists('AR_0'.$i.'_TITLE', $art) && $flag == false ){
		$pageName = getPageNameFromTitle( $art['AR_0'.$i.'_TITLE'] );	

		if( !preg_match("/". $pageName ."/i", $_SERVER['PHP_SELF']) == 0 ){
			$flag = true;
			// Display only one article
			printArticle($i, $art);

		}
	}//END IF
}*/

// If no flag display all articles
if( $id == null ){
	for( $i=10 ; $i >= 1 ; $i-- ){
		if( array_key_exists('AR_0'.$i.'_TITLE', $art) ){
			printArticle($i, $art, $lang);

		} // END IF
	} //END FOR
}else{
	for( $i=10 ; $i >= 1 ; $i-- ){
		if( array_key_exists('AR_0'.$i.'_TITLE', $art) ){
			if($art['AR_0'.$i.'_CONTENT'] == $id.'.html'){
				printArticle($i, $art, $lang);
			}else{
				//echo $id.'<br />';
			}
		} // END IF
	} //END FOR
}

function printArticle($i, $art,$l){
	$date = explode( "-", $art['AR_0'.$i.'_DATE']);
	$monthName = date("F", mktime(0, 0, 0, $date[1]));
	//$absoluteFolder = 'http://'. $_SERVER['SERVER_NAME'].'/'.$l.'/blog/'.$date[2].'/'.$date[1].'/';
	$pageName = getPageNameFromTitle( $art['AR_0'.$i.'_TITLE'] );	
	//$path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');
	// Create page if not exists
	
	// Create if not exists
	/*if( preg_match("/\/blog\/index.php$/", $_SERVER['PHP_SELF']) ){
		if( !file_exists($date[2].'/'.$date[1].'/'.$pageName) ){
			createArticlePage($date, $pageName);
			echo 'CREATING: '. $date[2].'/'.$date[1].'/'.$pageName;
		}
	}else{
		//echo 'INFO: please go to /blog/ to auto-create '.'blog/'.$date[2].'/'.$date[1].'/'.$pageName;
	}*/	

	//if( strpos($pageName, $_SERVER['PHP_SELF'] ) == 0 ){
	//if( !preg_match("/". $pageName ."/i", $_SERVER['PHP_SELF']) == 0 ){
		echo '<div class="post">';
			echo '<div class="article">';
				echo '<div class="article_left_content">';
					echo '<div class="article_date">'.$date[0].' '.$monthName.' '.$date[2].'</div>';
					//echo '<div class="article_author"><a href="http://' . $_SERVER['SERVER_NAME'].'/'.$l .'/about/" title="' . $art['AR_AUTHOR_TITLE'] . $art['AR_0'.$i.'_AUTHOR'] . '">' . $art['AR_0'.$i.'_AUTHOR'].'</a></div>';
					echo '<div class="article_author">'.$art['AR_0'.$i.'_AUTHOR'].'</div>';
				echo '</div>';
				echo '<div class="article_right_content">';
					// TO IMPROVE: If month already in the URL = specific article is displayed = the title not linked
					if(strstr($_SERVER['PHP_SELF'], $date[1])){	echo '<h2>'. $art['AR_0'.$i.'_TITLE'].'</h2>';}
					else{
						//echo '<h2><a href="'.$_SERVER['DOCUMENT_ROOT'].'/'.$l.'/blog/?'.$art['AR_0'.$i.'_CONTENT'].'">'. $art['AR_0'.$i.'_TITLE'].'</a></h2>';}
						echo '<h2>'. $art['AR_0'.$i.'_TITLE'].'</h2>';}
					if( array_key_exists('AR_0'.$i.'_SUB_TITLE', $art) ){ echo '<h3>'.$art['AR_0'.$i.'_SUB_TITLE'].'</h3>';}
					//echo '<p>';
						if( array_key_exists('AR_0'.$i.'_CONTENT', $art) ){ 
							//$pa = $art['AR_0'.$i.'_CONTENT'] ;
							$pa = $_SERVER['DOCUMENT_ROOT'].'/blog/'.$l.'/'.$art['AR_0'.$i.'_CONTENT'];
							//echo $pa;
							include($pa);
						}else{
							echo 'ERROR: article '.$i.' not found';
						};

					//echo '</p>';
					if( array_key_exists('AR_FEEDBACK', $art) ){ echo '<div class="article_feedback">'.$art['AR_FEEDBACK'].'</div>';}
				echo '</div>';
			echo '</div>'; //END ARTICLE
		echo '</div>'; //END POST
	//} // END IF
}
?>

